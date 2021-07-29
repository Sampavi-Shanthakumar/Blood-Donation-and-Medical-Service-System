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
                    <center><h2>Donor Details </h2></center>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ url('index/pdf') }}"> convert to pdf</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
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
                       
                        
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($report as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->lname}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->no}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->street}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->city}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->phoneno}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->gender}}</div>
                            </td>
                            
                            <td class="table-text">
                                <div>{{$post->age()}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->nic}}</div>
                            
                            <td class="table-text">
                                <div>{{$post->donatedDate}}</div>
                            </td>
                           
                          
                            <td class="table-text">
                                <div>{{$post->type}}</div>
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