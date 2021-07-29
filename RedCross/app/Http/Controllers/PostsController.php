<?php

namespace App\Http\Controllers;
use App\User;
use App\Donor;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;

class PostsController extends Controller
{
    
    public function index(){
        //fetch all posts data
        $posts = Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
     
        ->orderBy('created','desc')->get();
        
        //pass posts data to view and load list view
        return view('posts.index', ['posts' => $posts]);
    }
    
    public function details($donor_id){
        //fetch post data
        $post = Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
        ->find($donor_id);
        
        //pass posts data to view and load list view
        return view('posts.details', ['post' => $post]);
    }
    
    public function add(){
        //load form view
        return view('posts.add');
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
            'bg_id' => 'required',
           
           
            
        ]);
        
        //get post data
      
        //insert post data
         //get post data
         $post = $request->all();
        
         //insert post data
         Donor::create($post);
       
        
        //store status message
        Session::flash('success_msg', 'Details added successfully!');

        return redirect()->route('posts.index');
    }
    
    public function edit($donor_id){
        //get post data by id
        $post = Donor::find($donor_id);
        
        //load form view
        return view('posts.edit', ['post' => $post]);
    }
    
    public function update($donor_id, Request $request){
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
            'bg_id' => 'required',
           
            
        ]);
        
        //get post data
        $postData = $request->all();
        
        
         //update post data
        Donor::find($donor_id)->update($postData);
        
        //store status message
        Session::flash('success_msg', 'Details updated successfully!');

        return redirect()->route('posts.index');
    }
    
    public function delete($donor_id){
        //update post data
        Donor::find($donor_id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Details deleted successfully!');

        return redirect()->route('posts.index');
    }
    public function showDonor()
    {
            // whatever you do, do it here
            // prepare some data to use in the view (optional)
            $data['page_title'] = 'donor';
            // finally load the view
            return view("donor", compact("data"));
        }
        public function showSearch()
    {
            // whatever you do, do it here
            // prepare some data to use in the view (optional)
            $data['page_title'] = 'search';
            // finally load the view
            return view("search", compact("data"));
        }
        public function showSearchdetails()
        {
                // whatever you do, do it here
                // prepare some data to use in the view (optional)
                $data['page_title'] = 'searchdetails';
                // finally load the view
                return view("searchdetails", compact("data"));
            }
        public function showDate()
        {
                // whatever you do, do it here
                // prepare some data to use in the view (optional)
                $data['page_title'] = 'checkdate';
                // finally load the view
                return view("checkdate", compact("data"));
            }
            public function showPDF()
        {
                // whatever you do, do it here
                // prepare some data to use in the view (optional)
                $data['page_title'] = 'pdfs';
                // finally load the view
                return view("pdfs", compact("data"));
            }
            public function showChat()
            {
                    // whatever you do, do it here
                    // prepare some data to use in the view (optional)
                    $data['page_title'] = 'chat';
                    // finally load the view
                    return view("chat", compact("data"));
                }
        public function showAdmin()
    {
            // whatever you do, do it here
            // prepare some data to use in the view (optional)
            $data['page_title'] = 'admin';
            // finally load the view
            return view("admin", compact("data"));
        }
        public function showAcceptor()
        {
                // whatever you do, do it here
                // prepare some data to use in the view (optional)
                $data['page_title'] = 'acceptor';
                // finally load the view
                return view("acceptor", compact("data"));
            }
            public function showDoctor()
            {
                    // whatever you do, do it here
                    // prepare some data to use in the view (optional)
                    $data['page_title'] = 'doctor';
                    // finally load the view
                    return view("doctor", compact("data"));
                }
                public function showDonorlogin()
                {
                        // whatever you do, do it here
                        // prepare some data to use in the view (optional)
                        $data['page_title'] = 'donorlogin';
                        // finally load the view
                        return view("donorlogin", compact("data"));
                    }
        public function showWelcome()
    {
            // whatever you do, do it here
            // prepare some data to use in the view (optional)
            $data['page_title'] = 'home';
            // finally load the view
            return view("home", compact("data"));
        }
        public function showSms()
    {
            // whatever you do, do it here
            // prepare some data to use in the view (optional)
            $data['page_title'] = 'sms';
            // finally load the view
            return view("sms", compact("data"));
        }
        public function showAbout()
        {
                // whatever you do, do it here
                // prepare some data to use in the view (optional)
                $data['page_title'] = 'about';
                // finally load the view
                return view("about", compact("data"));
            }
            public function showAwareness()
            {
                    // whatever you do, do it here
                    // prepare some data to use in the view (optional)
                    $data['page_title'] = 'awareness';
                    // finally load the view
                    return view("awareness", compact("data"));
                }   
}
