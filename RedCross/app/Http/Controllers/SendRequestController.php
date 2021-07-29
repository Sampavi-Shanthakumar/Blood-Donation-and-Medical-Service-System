<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRequest;
use Illuminate\Http\Request;

class SendRequestController extends Controller
{
    function index()
    {
     return view('send_request');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'fname'     =>  'required',
      'lname'     =>  'required',
      'email'  =>  'required|email',
      'number'     =>  'required|numeric|digits:10',
      'nic'     =>  'required',
      'organization'     =>  'required',
      'address'     =>  'required',
      'message' =>  'required',
      'location'     =>  'required',
      'date'     =>  'required|date_format:Y/m/d|after:yesterday',
     ]);

        $data = array(
            'fname'      =>  $request->fname,
            'lname'      =>  $request->lname,
            'email'      =>  $request->email,
            'number'      =>  $request->number,
            'nic'      =>  $request->nic,
            'organization'      =>  $request->organization,
            'address'      =>  $request->address,
            'message'   =>   $request->message,
            'location'      =>  $request->location,
            'date'      =>  $request->date,
        );

     Mail::to('shakila.shaki08@gmail.com')->send(new SendRequest($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
