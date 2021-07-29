<?php

namespace App\Http\Controllers;
use App\Donated_detail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class Donated_detailsController extends Controller
{
   
    public function index()
    {
         //fetch all posts data
         $donated_details = Donated_detail::join('donors', 'donors.donor_id', '=', 'donated_details.donor_id')
         ->select('donated_details.*')
         ->orderBy('created','desc')->get();
        
         //pass posts data to view and load list view
         return view('donated_details.index', ['donated_details' =>  $donated_details]);
    }

  
    public function add(){
        //load form view
        return view('donated_details.add');
    }

   
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'donor_id' => 'required',
            'location' => 'required',
            'donateDate' => 'required',
           
        ]);
        
        //get post data
        $donated_detailData = $request->all();
        
        //insert post data
        Donated_detail::create($donated_detailData);
        
        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('donated_details.index');
    }
    

  
    public function details($dd_id){
        //fetch post data
        $donated_detail = Donated_detail::find($dd_id);
        
        //pass posts data to view and load list view
        return view('donated_details.details', ['donated_detail' => $donated_detail]);
    }

  
    
}
