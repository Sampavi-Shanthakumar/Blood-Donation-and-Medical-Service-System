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
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
           
              <center> <h3> Add Feedback</h3> </center>
            </div>
            <div class="panel-body">
                <form action="{{ route('feedbacks.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >user_id</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_id" value="{{Auth::user()->id}}" id="user_id" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Comments</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="comment" id="comment" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Add Feedback" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection