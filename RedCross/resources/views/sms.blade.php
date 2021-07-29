
@extends('layouts.app')

@section('content')
<div class="content" style=" color:black ;border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:100px; margin-right:100px;margin-bottom:100px;">
  <div class="container box">
   <h3 align="center">Send SMS</h3><br />
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sms/send')}}">
    {{ csrf_field() }}
   
    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="text" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
   
  </div>
 
@endsection

