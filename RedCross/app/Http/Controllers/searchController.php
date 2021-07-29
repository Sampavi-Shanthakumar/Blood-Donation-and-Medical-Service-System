<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
class searchController extends Controller
{
    public function add(){
        //load form view
        return view('search');
    }
    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table ('donors')
        ->where ('city', 'LIKE', "%{$query}%")
        ->groupBy('city')
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->city.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }


    function fetch2(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data =Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
      ->select('donors.*','blood_group.type')
        ->where ('type', 'LIKE', "%{$query}%")
        ->groupBy('type')
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->type.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }


    public function index(){
        //fetch all posts data
      
        
       
        
        $type = Input::get ( 'type' );
        $city = Input::get ( 'city' );
        if(!empty($type) && !empty($city)){
            $posts =  Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
            ->select('donors.*','blood_group.type')
            ->where('type','=',Input::get ( 'type' ))
            ->where('city','=',Input::get ( 'city' ))
            ->where('donatedDate', '<', (new \Carbon\Carbon)->submonths(3) )
            ->get();
        }if(!empty($type) && empty($city)){
            $posts =  Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
            ->select('donors.*','blood_group.type')
            ->where('type','=',Input::get ( 'type' ))
            ->where('donatedDate', '<', (new \Carbon\Carbon)->submonths(3) )
            ->get();
        }if(empty($type) && !empty($city)){
            $posts =  Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
            ->select('donors.*','blood_group.type')
            ->where('city','=',Input::get ( 'city' ))
            ->where('donatedDate', '<', (new \Carbon\Carbon)->submonths(3) )
            ->get();
        }
        
        //pass posts data to view and load list view
        return view('search', ['posts' => $posts]);
    }
}
