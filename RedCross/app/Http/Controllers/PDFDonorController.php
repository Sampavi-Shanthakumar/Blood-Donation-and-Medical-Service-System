<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
class PDFDonorController extends Controller
{
    public function index(){
       $report = $this->get_report();
       return view('indexBloodDonationCampaign',['report'=>$report]);
    }
    public function get_report(){
        $report =DB::table('blood_campaigns')
        ->select('blood_campaigns.*')
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
            <th width="">Location</th>
            <th width="">Event Date</th>
            <th width="">Hospital</th>
           
            
          
           </tr>
        </thead>';
        
            foreach($report as $post){
                $output .= ' 
                <tr>
                <td class="table-text">
                    <div>'.$post->location.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->event_date.'</div>
                </td>
                <td class="table-text">
                    <div>'.$post->hospital.'</div>
                </td>
               
               
            </tr>
      
                ';
            }
            $output .= '</table>';
           
    return $output;
    }
   
}
