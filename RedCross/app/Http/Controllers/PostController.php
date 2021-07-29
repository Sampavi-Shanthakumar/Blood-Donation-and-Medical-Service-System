<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PostController extends Controller
{
    public function add(){
        //load form view
        return view('post.add');
    }
    
        public function index(){
            //fetch all posts data
            $posts = post::orderBy('post_id')->get();
            
            //pass posts data to view and load list view
            return view('post.index', ['posts' => $posts]);
        
}

        public function details($post_id){
            //fetch post data
            $posts =posts::find($post_id);
            
            //pass posts data to view and load list view
            return view('post.details', ['posts' => $posts]);
        }
        public function insert(Request $request){
            //validate post data
            $this->validate($request, [
                'title' => 'required',
                'message' => 'required',
               
                
            ]);
            
            //get post data
            $postsData = $request->all();
            
            //insert post data
           post::create($postsData);
            
            //store status message
            Session::flash('success_msg', 'Post added successfully!');
    
            return redirect()->route('post.index');
        }
     
        
      
    public function delete($post_id){
        //update post data
      post::find($post_id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('post.index');
    }
    public function show(){
        //fetch all posts data
        $posts = post::orderBy('post_id')->get();
        
        //pass posts data to view and load list view
        return view('post.show', ['posts' => $posts]);
    
}
}
