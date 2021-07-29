@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12 margin-tb">
  
        <div class="pull">
           <center> <h2>My Donated Details</h2></center>
        </div>
       
    </div>
</div>
@foreach($posts as $value)
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Donated Date:</strong>
            {{$value->donateDate}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            {{$value->location}}
        </div>
    </div>
  
    @endforeach


   


</div>
    
  
</div>
</div>
@endsection