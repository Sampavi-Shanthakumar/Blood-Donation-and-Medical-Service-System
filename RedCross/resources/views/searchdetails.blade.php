@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    <form action="{{URL::to('/searchdetails')}}" method="POST" role="search">
    {{ csrf_field() }}
   <center> <h3>Search My Details</h3></center>
   <p><strong>You can search your details using your E-mail address</strong></p><br>
    <div class="input-group">
   
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
<div class="container">
    @if(isset($details))
    
  <center><h3>My Details</h3></center>
    <table class="table table-striped">
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
                        <th width="">Availability</th>
                        <th width="">Blood Group</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
            <td>{{$user->fname}}</td>
            <td>{{$user->lname}}</td>
            <td>{{$user->no}}</td>
            <td>{{$user->street}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->phoneno}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->nic}}</td>
                <td>{{$user->availability}}</td>
                <td>{{$user->type}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
   
    @endif
    
</div>
    </div>
</div>
@endsection
           