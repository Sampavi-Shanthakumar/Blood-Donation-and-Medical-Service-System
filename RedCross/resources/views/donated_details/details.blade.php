@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-right">
            <a href="{{ route('donated_details.index') }}" class="btn btn-info pull-right"> Back</a>
        </div>
        <div class="pull">
            <center><h2>Donated Details</h2></center>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            {{ $donated_detail->location }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Donated Date:</strong>
            {{ $donated_detail->donateDate }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Donor Id:</strong>
            {{ $donated_detail->donor_id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Published On:</strong>
            {{ $donated_detail->created }}
        </div>
    </div>
</div>
</div>
@endsection