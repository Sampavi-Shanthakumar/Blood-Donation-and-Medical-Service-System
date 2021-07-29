<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
class PDF_BC_Controller extends Controller
{
    public function index(){
       $report = $this->get_report();
       return view('indexDonatedDetails',['report'=>$report]);
    }
    public function get_report(){
        $report =DB::table('donated_details')
        ->select('donated_details.*')
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
            <th width="">Donor Id</th>
            <th width="">Donated Date</th>
            <th width="">Location</th>
           
            
          
           </tr>
        </thead>';
        
            foreach($report as $post){
                $output .= ' 
                <tr>
                <td class="table-text">
                    <div>'.$post->donor_id.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->donateDate.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->location.'</div>
                </td>
               
               
            </tr>
      
                ';
            }
            $output .= '</table>';
           
    return $output;
    }
   
}
