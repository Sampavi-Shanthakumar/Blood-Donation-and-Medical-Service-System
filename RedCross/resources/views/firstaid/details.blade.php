@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div style= "color:black" class="row">
    <div class="col-lg-11 margin-tb">
    <div class="pull-right">
            <a href="{{ route('firstaid.index') }}" class="btn btn-info pull-right"> Back</a>
        </div>
        <div class="pull">
           <center> <h2>Firstaid camp Details</h2></center>
        </div>
       
    </div>
</div>

<div style= "color:black" class="row">
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>First Name:</strong>
            {{ $firstaid_camp->fname }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Last Name:</strong>
            {{ $firstaid_camp->lname }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Organization:</strong>
            {{ $firstaid_camp->organization }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>No:</strong>
            {{ $firstaid_camp->no }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Street:</strong>
            {{ $firstaid_camp->street }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>City:</strong>
            {{ $firstaid_camp->city }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Phone Number:</strong>
            {{ $firstaid_camp->phoneno }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Date:</strong>
            {{ $firstaid_camp->date }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Event:</strong>
            {{ $firstaid_camp->event }}
        </div>
    </div>
    
    
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Location:</strong>
            {{ $firstaid_camp->location }}
        </div>
    </div>
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>NIC:</strong>
            {{ $firstaid_camp->nic }}
        </div>
    </div>
    
    <div class="col-xs-11 col-sm-11 col-md-11">
        <div class="form-group">
            <strong>Published On:</strong>
            {{ $firstaid_camp->created }}
        </div>
    </div>
   
    
        </div>
    </div>
</div>
</div>
@endsection