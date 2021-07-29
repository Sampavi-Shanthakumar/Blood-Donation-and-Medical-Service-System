<?php

namespace App\Http\Controllers;
use App\blood_campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class BloodCampController extends Controller
{
    public function add(){
        //load form view
        return view('bloodcamp.add');
    }
    
        public function index(){
            //fetch all posts data
            $bloodcamp = blood_campaign::orderBy('bc_id')->get();
            
            //pass posts data to view and load list view
            return view('bloodcamp.index', ['bloodcamp' => $bloodcamp]);
        
}

        public function details($bc_id){
            //fetch post data
            $blood_campaign = blood_campaign::find($bc_id);
            
            //pass posts data to view and load list view
            return view('bloodcamp.details', ['blood_campaign' => $blood_campaign]);
        }
        public function insert(Request $request){
            //validate post data
            $this->validate($request, [
                'location' => 'required',
                'event_date' => 'required',
                'hospital' => 'required',
                
            ]);
            
            //get post data
            $blood_campaignData = $request->all();
            
            //insert post data
            blood_campaign::create($blood_campaignData);
            
            //store status message
            Session::flash('success_msg', 'Post added successfully!');
    
            return redirect()->route('bloodcamp.index');
        }
     
         public function edit($bc_id){
        //get post data by id
        $blood_campaign = blood_campaign::find($bc_id);
        
        //load form view
        return view('bloodcamp.edit', ['blood_campaign' => $blood_campaign]);
    }
    public function update($bc_id, Request $request){
        //validate post data
        $this->validate($request, [
            'location' => 'required',
                'event_date' => 'required',
                'hospital' => 'required',
               
        ]);
        
        //get post data
        $blood_campaignData = $request->all();
        
        
         //update post data
         blood_campaign::find($bc_id)->update($blood_campaignData);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('bloodcamp.index');
    }
    public function delete($bc_id){
        //update post data
        blood_campaign::find($bc_id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('bloodcamp.index');
    }
}
