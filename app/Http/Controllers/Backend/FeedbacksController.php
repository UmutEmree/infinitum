<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use Illuminate\Support\Facades\Input;

class FeedbacksController extends Controller
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
       $feedbacks = Feedback::all();
       return view('backend.pages.feedback.index')->with(compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.pages.feedback.create');
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
            'title' => 'required|unique:feedback'
            ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->title = $request->title;
        $feedback->text = $request->text;

        $feedback->save();

        return redirect()->back();
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $feedbacks = Feedback::all();
        $feedback = Feedback::find($id);
        return view('backend.pages.feedback.edit')->with(compact('feedback','feedbacks'));
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
            $feedback = Feedback::find($id);
          $input = Input::except('_method','_token','image');

          $feedback->update($input);

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
        $feedback = Feedback::find($id);
        $feedback->delete();

          return redirect()->route('feedbacks.index');
    }
}