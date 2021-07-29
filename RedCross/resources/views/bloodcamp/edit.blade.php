@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
            <a href="{{ route('bloodcamp.index') }}" class="btn btn-primary pull-right">Back</a>
               <center><h3> Edit Blood Campaign Details </h3></center>
            </div>
            <div class="panel-body">
                <form action="{{ route('bloodcamp.update', $blood_campaign->bc_id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Location</label>
                        <div class="col-sm-10">
                            <input type="text" name="location" id="location" class="form-control" value="{{ $blood_campaign->location }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Event Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="event_date" id="event_date" class="form-control" value="{{ $blood_campaign->event_date }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Hospital</label>
                        <div class="col-sm-10">
                            <input type="text" name="hospital" id="hospital" class="form-control" value="{{ $blood_campaign->hospital}}">
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