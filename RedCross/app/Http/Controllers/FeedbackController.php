<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //fetch all posts data
         $feedbacks = Feedback::join('users', 'users.id', '=', 'feedbacks.user_id')
         ->orderBy('created','desc')->get();
        
         //pass posts data to view and load list view
         return view('feedbacks.index', ['feedbacks' =>  $feedbacks]);
    }

    

    public function add(){
        //load form view
        return view('feedbacks.add');
    }

   
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required',
            'comment' => 'required'
           
        ]);
        
        //get post data
        $feedbackData = $request->all();
        
        //insert post data
        Feedback::create($feedbackData);
        
        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('feedbacks.add');
    }
    public function delete($fb_id){
        //update post data
        Feedback::find($fb_id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('feedbacks.index');
    }
}
