<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;
class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );
        $emails = ['shanthakumarsampavi@gmail.com', 'shakila.shaki08@gmail.com','sampavi.shanthakumar@gmail.com'];
     Mail::to( $emails )->send(new SendMail($data));
     return back()->with('success', 'email send successfully');

    }
}
