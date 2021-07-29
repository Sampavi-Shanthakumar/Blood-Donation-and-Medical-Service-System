<?php

namespace App\Http\Controllers;
use App\User;
use App\Acceptor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;

class AcceptorController extends Controller
{
  
    public function index(){
        //fetch all posts data
        $pages = Acceptor::orderBy('acceptor_id')->get();
        
        //pass posts data to view and load list view
        return view('pages.index', ['pages' => $pages]);
    }
    
    public function details($acceptor_id){
        //fetch post data
        $page = Acceptor::find($acceptor_id);
        
        //pass posts data to view and load list view
        return view('pages.details', ['page' => $page]);
    }
    
    public function add(){
        //load form view
        return view('pages.add');
    }
    public function setBirthDateAttribute($dobDate){
       
            return $this->attributes['dobDate']=Carbon::parse($dobDate)->format('y-m-d');
      
    }
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'lname' => 'required',
           
            'no' => 'required',
            'street' => 'required',
            'city' => 'required',
            'phoneno' => 'required',
            'gender' => 'required',
            'dobDate' => 'required',
           
            'nic' => 'required',
           
           
           
            
        ]);
        
        //get post data
      
        //insert post data
         //get post data
         $page = $request->all();
        
         //insert post data
         Acceptor::create($page);
       
        
        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('pages.index');
    }
    
    public function edit($acceptor_id){
        //get post data by id
        $page = Acceptor::find($acceptor_id);
        
        //load form view
        return view('pages.edit', ['page' => $page]);
    }
    
    public function update($acceptor_id, Request $request){
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'lname' => 'required',
            'dobDate' => 'required',
            'no' => 'required',
            'street' => 'required',
            'city' => 'required',
            'phoneno' => 'required',
            'gender' => 'required',
           
           
            'nic' => 'required',
            
           
            
        ]);
        
        //get post data
        $pageData = $request->all();
        
        
         //update post data
        Acceptor::find($acceptor_id)->update($pageData);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('pages.index');
    }
    
    public function delete($acceptor_id){
        //update post data
        Acceptor::find($acceptor_id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('pages.index');
    }
    
}
