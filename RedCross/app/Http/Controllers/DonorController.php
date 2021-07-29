<?php

namespace App\Http\Controllers;
use App\Donor;
use App\Donated_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use DB;
use App\User;

class DonorController extends Controller
{
  
   
        //fetch all posts data
      
            public function ageIndex(){
                $user_id = Auth::user()->id;
                $posts = Donor::join('users', 'users.id', '=', 'donors.user_id')
                ->join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
                ->select('donors.*','blood_group.type')
                ->where('users.id',$user_id) // else it will get all rows
                ->get();
                if(count ($posts)>0){
                //pass posts data to view and load list view
                return view('mydetails', ['posts' => $posts])->with($user_id);
                }
            }
        
        //pass posts data to view and load list view
       
        public function dateIndex(){
            $user_id = Auth::user()->id;
            $posts = Donor::join('users', 'users.id', '=', 'donors.user_id')
           ->join('donated_details', 'donated_details.donor_id', '=', 'donors.donor_id')
            ->select('donated_details.*')
            ->where('users.id',$user_id) // else it will get all rows
            ->orderBy('created','desc')
            ->limit(1)
            ->get();
            if(count ($posts)>0){
            //pass posts data to view and load list view
            return view('checkdate', ['posts' => $posts])->with($user_id);
            }
        }
    
   
}
