@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-right">
            <a href="{{ route('posts.donorReport') }}" class="btn btn-info pull-right"> Back</a>
        </div>
        <div class="pull">
           <center> <h2>Donor Report</h2></center>
        </div>
        
       
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name:</strong>
            {{ $posts->fname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name:</strong>
            {{ $posts->lname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>No:</strong>
            {{ $posts->no }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Street:</strong>
            {{ $posts->street }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>City:</strong>
            {{ $posts->city }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone Number:</strong>
            {{ $posts->phoneno }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gender:</strong>
            {{ $posts->gender }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date of Birth:</strong>
            {{ $posts->dobDate }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age:</strong>
            {{ $posts->age }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIC:</strong>
            {{ $posts->nic }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Blood Group:</strong>
            {{ $posts->type }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Availability:</strong>
            {{ $posts->availability }}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Donated Location:</strong>
            {{ $posts->location }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Donated Date:</strong>
            {{ $posts->donateDate }}
        </div>
    </div>
   
</div>
@endsection