<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendBlood;
use Illuminate\Http\Request;

class SendBloodController extends Controller
{
    function index()
    {
     return view('send_blood');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'bloodgroup'     =>  'required',
      'place'     =>  'required',
      'contact'     =>  'required|numeric|digits:10',
     
     ]);

        $data = array(
            'bloodgroup'      =>  $request->bloodgroup,
            'place'      =>  $request->place,
            'contact'      =>  $request->contact,
         
        );

     Mail::to('shakila.shaki08@gmail.com')->send(new SendBlood($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
