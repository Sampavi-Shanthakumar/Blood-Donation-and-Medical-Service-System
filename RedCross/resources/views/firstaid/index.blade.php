@extends('layouts.app')
@section('content')

<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:10px; margin-right:100px;margin-bottom:100px;width:100%;">
<div class="row">
    <div class="col-lg-11">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
  
        
                    @if(!empty($firstaid))
        <div style= "color:black" class="row">
            <div class="col-lg-11 margin-tb">
                <div class="pull">
                    <center> <h3>Firstaid Camp Details </h3></center>
                </div>
                <div class="pull-right" style="margin-bottom:10px;">
                    <a class="btn btn-success" href="{{ route('firstaid.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div style= "color:black" class="row">
            <div class="col-xs-11 col-sm-11 col-md-11">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="">First Name</th>
                        <th width="">Last Name</th>
                        <th width="">Organization</th>
                        <th width="">No</th>
                        <th width="">Street</th>
                        <th width="">City</th>
                        <th width="">Phone No</th>
                        <th width="">Date</th>
                        <th width="">Event</th>
                        <th width="">Location</th>
                        <th width="">NIC</th>
                        
                       
                        
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($firstaid as $firstaid_camp)
                        <tr>
                            <td class="table-text">
                                <div>{{$firstaid_camp->fname}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->lname}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->organization}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->no}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->street}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->city}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->phoneno}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->date}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->event}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->location}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$firstaid_camp->nic}}</div>
                           </td>
                           <td>
                                <a href="{{ route('firstaid.details', $firstaid_camp->fc_id) }}" class="btn btn-info">Details</a> </td>
                                <td> <a href="{{ route('firstaid.edit', $firstaid_camp->fc_id) }}" class="btn btn-warning">Edit</a> </td>
                                <td> <a href="{{ route('firstaid.delete', $firstaid_camp->fc_id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td> 
                            
                           
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection