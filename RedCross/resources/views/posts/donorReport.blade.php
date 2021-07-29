@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:10px; margin-right:10px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($donors))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull">
                    <center><h3>Donor Details </h3></center>
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
                        <th width="">Date of Birth</th>
                        <th width="">Age</th>
                        <th width="">NIC</th>
                      
                        <th width="">Availability</th>
                       
                        <th width="">Donated Location</th>
                        <th width="">Donated Date</th>
                      
                        <th width="">Blood Group</th>
                        <th width="">Action</th>
                       
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($donors as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->fname}}</div>
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
                                <div>{{$post->dobDate}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->age}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->nic}}</div>
                            </td> 
                            <td class="table-text">
                                <div>{{$post->availability}}</div>
                            </td>
                          
                            <td class="table-text">
                                <div>{{$post->location}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->donateDate}}</div>
                            </td>
                               
                            <td class="table-text">
                                <div>{{$post->type}}</div>
                            </td>
                            <td>
                                <a href="{{ route('posts.viewReport', $post->donor_id) }}" class="btn btn-info">Details</a>
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