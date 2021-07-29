<?php

namespace App\Http\Controllers;
use App\Sms\SendSms;
use  App\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
   /* function index(){
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to' => '94713745635',
            'to' =>'94767026631',
            'from'=>'94767026631',
            'text'=>$data
        ]);
        */
        function index()
        {
         return view('sms');
        }
        function send(Request $request)
        {
         $this->validate($request, [
         
          'text' =>  'required'
         ]);
    
            $data = array(
                
                'text'   =>   $request->text
            );
            $nexmo = app('Nexmo\Client');
            $nexmo->message()->send([
                
                'to' =>'94767026631',
                'from'=>'94767026631',
                'text'=>$data
            ]);
           
        
         return back()->with('success', 'SMS send successfully');
    
        }
}
