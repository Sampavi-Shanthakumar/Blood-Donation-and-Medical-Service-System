<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function postAnnouncement(Request $request){

        $this->validate($request, [
            'text' => 'required',
            'status' => 'required',
            ]);
            $post = $request->all();
        
            //insert post data
            Announcement::create($post);
          
           
           //store status message
           Session::flash('success_msg', 'Post added successfully!');
   
           return redirect()->route('admin');
     }
}
