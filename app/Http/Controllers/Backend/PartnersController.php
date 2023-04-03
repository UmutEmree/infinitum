<?php

namespace App\Http\Controllers\Backend;

use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class PartnersController extends Controller


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
       $partners = Partner::all();
       return view('backend.pages.partners.index')->with(compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.partners.add-post');
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

            'name' => 'required:min3'
           
            ]);

        $partner = new Partner();
        
      
  
          
           if(Input::hasFile('image'))
        {
        
        $imageTempName = $request->file('image')->getPathname();
        $imageName = time() . $request->file('image')->getClientOriginalName();
        $path = base_path() . '/uploads/partners/';
        $request->file('image')->move($path , $imageName);
        $partner->image = $imageName;
        }
        
        $partner->name = $request->name;  
        $partner->save();

        return redirect()->route('partners.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
  

      public function show($id)
    {
        $partner = Partner::find($id);
        $partners = Partner::all();
        return view('backend.pages.partners.edit')->with(compact('partner','partners'));
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
          $partner = Partner::where('id', $request->id);
       
        if(Input::hasFile('image')){
            $imageTempName = $request->file('image')->getPathname();
              $imageName = time() . $request->file('image')->getClientOriginalName();
            $path = base_path() . '/uploads/partners/';
            $request->file('image')->move($path , $imageName);
           
            $partner->update(array(
            'image' => $imageName,
            
            ));
        }

          $input = Input::except('_method', '_token','image','image2');

          $partner->update($input);

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
        $partner = Partner::find($id);
        $path = base_path() . '/uploads/partners/'. $partner->image;
         \File::delete($path);
        $partner->delete();

        return back();
    }

}