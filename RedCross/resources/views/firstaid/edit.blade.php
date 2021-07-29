@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-11">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div style= "color:black" class="panel panel-default">
            <div class="panel-heading">
            <a href="{{ route('firstaid.index') }}" class="btn btn-primary pull-right">Back</a>
               <center><h3> Edit Firstaid Camp Details </h3></center>
            </div>
            <div style= "color:black" class="panel-body">
                <form action="{{ route('firstaid.update', $firstaid_camp->fc_id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="fname" id="fname" class="form-control" value="{{ $firstaid_camp->fname }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lname" id="lname" class="form-control" value="{{ $firstaid_camp->lname }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Organization</label>
                        <div class="col-sm-10">
                            <input type="text" name="organization" id="organization" class="form-control" value="{{ $firstaid_camp->organization}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >No</label>
                        <div class="col-sm-10">
                            <input type="text" name="no" id="no" class="form-control" value="{{ $firstaid_camp->no }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Street</label>
                        <div class="col-sm-10">
                            <input type="text" name="street" id="street" class="form-control" value="{{ $firstaid_camp->street }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" id="city" class="form-control" value="{{ $firstaid_camp->city }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phoneno" id="phoneno" class="form-control" value="{{ $firstaid_camp->phoneno }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Event</label>
                        <div class="col-sm-10">
                            <input type="text" name="event" id="event" class="form-control" value="{{ $firstaid_camp->event }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" id="date" class="form-control" value="{{ $firstaid_camp->date }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Location</label>
                        <div class="col-sm-10">
                            <input type="text" name="location" id="location" class="form-control" value="{{ $firstaid_camp->location }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >NIC</label>
                        <div class="col-sm-10">
                            <input type="text" name="nic" id="nic" class="form-control" value="{{ $firstaid_camp->nic }}">
                        </div>
                    </div>
                   
                  
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Update Post" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection