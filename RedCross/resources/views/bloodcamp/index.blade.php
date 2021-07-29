@extends('layouts.app')
@section('content')

<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:10px; margin-right:100px;margin-bottom:100px;width:100%;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
  
        
                    @if(!empty($bloodcamp))
        <div style="color:black" class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull">
                    <center> <h3>Blood Campaign Details </h3></center>
                </div>
                <div class="pull-right" style="margin-bottom:10px;">
                    <a class="btn btn-success" href="{{ route('bloodcamp.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div style="color:black" class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="">Location</th>
                        <th width="">Event Date</th>
                        <th width="">Hospital</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($bloodcamp as $blood_campaign)
                        <tr>
                            <td class="table-text">
                                <div>{{$blood_campaign->location}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$blood_campaign->event_date}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$blood_campaign->hospital}}</div>
                            </td>
                           
                           
                          
                           <td>
                                <a href="{{ route('bloodcamp.details', $blood_campaign->bc_id) }}" class="btn btn-info">Details</a> </td>
                                <td> <a href="{{ route('bloodcamp.edit', $blood_campaign->bc_id) }}" class="btn btn-warning">Edit</a> </td>
                                <td> <a href="{{ route('bloodcamp.delete', $blood_campaign->bc_id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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