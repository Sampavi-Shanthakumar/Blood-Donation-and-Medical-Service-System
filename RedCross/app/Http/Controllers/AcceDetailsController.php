<?php
namespace App\Http\Controllers;
use App\Acceptor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use DB;
use App\User;
class AcceDetailsController extends Controller
{
    public function ageIndex()
        {
            $user_id = Auth::user()->id;
            $pages = Acceptor::join('users', 'users.id', '=', 'acceptors.user_id')
            ->select('acceptors.*')
            ->where('users.id',$user_id) // else it will get all rows
            ->get();
            if(count ($pages)>0){
                return view('acceptorDetails',['pages'=>$pages])->with($user_id);
            }
        
        //pass posts data to view and load list view
       
    }
    
}