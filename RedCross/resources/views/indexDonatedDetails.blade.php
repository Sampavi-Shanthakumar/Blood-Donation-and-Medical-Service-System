@extends('layouts.app')

@section('content')

<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:10px; margin-right:100px;margin-bottom:100px;width:100%;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
  
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="left">
                    <center><h2>Blood Donated Details </h2></center>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ url('indexDonatedDetails/pdf') }}"> convert to pdf</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="">Donor Id</th>
                        <th width="">Donated Date</th>
                        <th width="">Location</th>
                        
                       
                        
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($report as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->donor_id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->donateDate}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->location}}</div>
                            </td>
                          
                           
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
 
    </div>
</div>
@endsection