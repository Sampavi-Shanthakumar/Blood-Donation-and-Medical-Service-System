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
           
              <center><h3> Add Blood Campaign Details </h3></center>
            </div>
            <div class="panel-body">
                <form action="{{ route('bloodcamp.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Location</label>
                        <div class="col-sm-10">
                            <input type="text" name="location" id="location" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Event Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="event_date" id="event_date" class="form-control">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-sm-2" >Hospital</label>
                        <div class="col-sm-10">
                            <input type="text" name="hospital" id="hospital" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Add Details" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection