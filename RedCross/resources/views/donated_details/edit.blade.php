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
            <a href="{{ route('donated_details.index') }}" class="btn btn-info pull-right">Back</a>
              <center><h3>  Edit Post </h3></center>
            </div>
            <div class="panel-body">
                <form action="{{ route('donated_details.update', $donated_detail->dd_id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Location</label>
                        <div class="col-sm-10">
                            <input type="text" name="location" id="location" class="form-control" value="{{ $donated_detail->location }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Donated Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="donateDate" id="donateDate" class="form-control" value="{{ $donated_detail->donateDate }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Donor Id</label>
                        <div class="col-sm-10">
                            <input type="text" name="donor_id" id="donor_id" class="form-control" value="{{ $donated_detail->donor_id }}">
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