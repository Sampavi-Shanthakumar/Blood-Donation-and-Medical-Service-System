@extends('layouts.app')

@section('content')
<div class="content" style="with:auto;height:auto; border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:10px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($pages))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull">
                   <center> <h3>Acceptor Details </h3></center>
                </div>
                <div class="pull-right" style="margin-left:1000px;">
                  
               
                    <a class="btn btn-success" href="{{ route('pages.add') }}"> Add New</a>
                </div>&nbsp;
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
                        
                       
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td class="table-text">
                                <div>{{$page->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->lname}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->no}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->street}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->city}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->phoneno}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->gender}}</div>
                            </td>
                           
                            <td class="table-text">
                                <div>{{ $page->age() }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$page->nic}}</div>
                            </td> 
                            
                           
                               
                            <td>
                                <a href="{{ route('pages.details', $page->acceptor_id) }}" class="btn btn-info">Details</a> </td>
                                <td> <a href="{{ route('pages.edit', $page->acceptor_id) }}" class="btn btn-warning">Edit</a> </td>
                                <td> <a href="{{ route('pages.delete', $page->acceptor_id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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