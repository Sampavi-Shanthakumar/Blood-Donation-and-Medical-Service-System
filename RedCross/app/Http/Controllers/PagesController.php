<?php

namespace App\Http\Controllers;
use App\firstaid_camp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PagesController extends Controller
{
    public function add(){
        //load form view
        return view('firstaid.add');
    }
    
        public function index(){
            //fetch all posts data
            $firstaid = firstaid_camp::orderBy('fc_id')->get();
            
            //pass posts data to view and load list view
            return view('firstaid.index', ['firstaid' => $firstaid]);
        
}
        public function details($fc_id){
            //fetch post data
            $firstaid_camp = firstaid_camp::find($fc_id);
            
            //pass posts data to view and load list view
            return view('firstaid.details', ['firstaid_camp' => $firstaid_camp]);
        }
        public function insert(Request $request){
            //validate post data
            $this->validate($request, [
                'fname' => 'required',
                'lname' => 'required',
                'organization' => 'required',
                'no' => 'required',
                'street' => 'required',
                'city' => 'required',
                'phoneno' => 'required',
                'date' => 'required',
                'event' => 'required',
                'location' => 'required',
                'nic' => 'required',
                
            ]);
            
            //get post data
            $firstaid_campData = $request->all();
            
            //insert post data
            firstaid_camp::create($firstaid_campData);
            
            //store status message
            Session::flash('success_msg', 'Post added successfully!');
    
            return redirect()->route('firstaid.index');
        }
     
         public function edit($fc_id){
        //get post data by id
        $firstaid_camp = firstaid_camp::find($fc_id);
        
        //load form view
        return view('firstaid.edit', ['firstaid_camp' => $firstaid_camp]);
    }
    public function update($fc_id, Request $request){
        //validate post data
        $this->validate($request, [
            'fname' => 'required',
                'lname' => 'required',
                'organization' => 'required',
                'no' => 'required',
                'street' => 'required',
                'city' => 'required',
                'phoneno' => 'required',
                'date' => 'required',
                'event' => 'required',
                'location' => 'required',
                'nic' => 'required',
        ]);
        
        //get post data
        $firstaid_campData = $request->all();
        
        
         //update post data
         firstaid_camp::find($fc_id)->update($firstaid_campData);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('firstaid.index');
    }
    public function delete($fc_id){
        //update post data
        firstaid_camp::find($fc_id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('firstaid.index');
    }
    
}