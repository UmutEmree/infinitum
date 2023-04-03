<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       $blog = Blog::all();
       return view('backend.pages.blog.index')->with(compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'name' => 'required:min3',
            'slug' => 'required|unique:blog'
            ]);

        $blog = new Blog();
             
      if(Input::hasFile('image'))
           if(Input::hasFile('image'))
        {
        
        $imageTempName = $request->file('image')->getPathname();
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '/uploads/blogs/';
        $request->file('image')->move($path , $imageName);
        $blog->image = $imageName;
        }
       
        $blog->name = $request->name;
        $blog->slug = $request->slug;
        $blog->text = $request->text;
       
        $blog->save();

        return redirect()->route('blog.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::all();
        $blog = Blog::find($id);
        return view('backend.pages.blog.edit')->with(compact('blog','blogs'));
    }

    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
       public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
       
        if(Input::hasFile('image')){
            $imageTempName = $request->file('image')->getPathname();
              $imageName = time() . $request->file('image')->getClientOriginalName();
            $path = base_path() . '/uploads/blogs/';
            $request->file('image')->move($path , $imageName);
           
            $blog->update(array(
            'image' => $imageName,
            
            ));
        }
          $input = Input::except('_method', '_token','image');

          $blog->update($input);

          return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $path = base_path() . '/uploads/blogs/'. $blog->image;
         \File::delete($path);
        $blog->delete();

          return redirect()->route('blog.index');
    }
}