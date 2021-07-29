<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
class PDFController extends Controller
{
    public function index(){
       $report = $this->get_report();
       return view('index',['report'=>$report]);
    }
    public function get_report(){
        $report =Donor::join('blood_group', 'donors.bg_id', '=', 'blood_group.bg_id')
        ->select('donors.donor_id','donors.name','donors.lname','donors.no','donors.street', 'donors.city','donors.phoneno','donors.age','donors.gender','donors.dobDate','donors.nic','donors.donatedDate','blood_group.type')
        ->limit(100)
        ->get();
        return $report;
    }
    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf = \PDF::setPaper('a4','landscape');
        $pdf -> loadHTML($this->
        convert_report_to_html());
        return $pdf->stream();
    }
    function convert_report_to_html(){
        $report = $this->get_report();
       
        $output ='
        <table class="table table-striped task-table">
        <!-- Table Headings -->
        <thead>
        <tr>
            <th width="">First Name</th>
            <th width="">Last Name</th>
            <th width="">No</th>
            <th width="">Street</th>
            <th width="">City</th>
            <th width="">Phone No</th>
            <th width="">Gender</th>
           
            <th width="">Age</th>
            <th width="">NIC</th>
            <th width="">Last Donated Date</th>
           
            
            <th width="">Blood Group</th>
           </tr>
        </thead>';
        
            foreach($report as $post){
                $output .= ' 
                <tr>
                <td class="table-text">
                    <div>'.$post->name.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->lname.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->no.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->street.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->city.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->phoneno.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->gender.'</div>
                </td>
               
                <td class="table-text">
                    <div>'.$post->age.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->nic.'</div>
                </td> <td class="table-text">
                    <div>'.$post->donatedDate.'</div>
                </td>
               
                
                <td class="table-text">
                <div>'.$post->type.'</div>
            </td>    
               
            </tr>
      
                ';
            }
            $output .= '</table>';
           
    return $output;
    }
   
}
