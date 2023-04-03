<?php

namespace App\Http\Controllers\Backend;

use App\Reference;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\file;
use Illuminate\Support\Facades\Input;
class ReferencesController extends Controller
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
       $references = Reference::all();
       return view('backend.pages.posts.index')->with(compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
         return view('backend.pages.posts.add-post')->with(compact('categories'));
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
            'slug' => 'required|unique:references'
            ]);

        $reference = new Reference();
        $reference->slug = $request->slug;
        
      
  
           if(Input::hasFile('image'))
        {
        
        $imageTempName = $request->file('image')->getPathname();
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '/uploads/references/';
        $request->file('image')->move($path , $imageName);
        $reference->image = $imageName;
        }
          if(Input::hasFile('image2'))
        {
        
        $imageTempName = $request->file('image2')->getPathname();
        $imageName = time() . $request->file('image2')->getClientOriginalName();
        $path = base_path() . '/uploads/references/';
        $request->file('image2')->move($path , $imageName);
        $reference->image2 = $imageName;
        }

          if(Input::hasFile('image3'))
        {
        
        $imageTempName = $request->file('image3')->getPathname();
        $imageName = time() . $request->file('image3')->getClientOriginalName();
        $path = base_path() . '/uploads/references/';
        $request->file('image3')->move($path , $imageName);
        $reference->image3 = $imageName;
        }
       
        $reference->name = $request->name;
        $reference->text = $request->text;
        $reference->category_id = $request->category_id;
        $reference->link = $request->link;
        $reference->home = $request->home;
        $reference->meta = $request->meta;
        $reference->title = $request->title;
        
        $reference->save();

        return redirect()->route('references.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
  

      public function show($id)
    {
        $reference = Reference::find($id);
        $categories = Category::all();
        return view('backend.pages.posts.edit')->with(compact('reference','categories'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          $reference = Reference::where('id', $request->id);
       
        if(Input::hasFile('image')){
            $imageTempName = $request->file('image')->getPathname();
              $imageName = time() . $request->file('image')->getClientOriginalName();
            $path = base_path() . '/uploads/references/';
            $request->file('image')->move($path , $imageName);
           
            $reference->update(array(
            'image' => $imageName,
            
            ));
        }
          if(Input::hasFile('image2')){
            $imageTempName = $request->file('image2')->getPathname();
              $imageName = time() . $request->file('image2')->getClientOriginalName();
            $path = base_path() . '/uploads/references/';
            $request->file('image2')->move($path , $imageName);
           
            $reference->update(array(
            'image2' => $imageName,
            
            ));
        }

         if(Input::hasFile('image3')){
            $imageTempName = $request->file('image3')->getPathname();
              $imageName = time() . $request->file('image3')->getClientOriginalName();
            $path = base_path() . '/uploads/references/';
            $request->file('image3')->move($path , $imageName);
           
            $reference->update(array(
            'image3' => $imageName,
            
            ));
        }

          $input = Input::except('_method', '_token','image','image2','image3');

          $reference->update($input);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reference = Reference::find($id);
        $path = base_path() . '/uploads/references/'. $reference->image;
         \File::delete($path);
        $reference->delete();

        return back();
    }
}