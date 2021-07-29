@extends('layouts.app')

@section('content')

<br>


<section style="margin-left:75px; margin-right:75px" >
        <div class="container">
        <div class="col-sm-6"> 
<img style="width:1020px; height:350px" src="{{ url('/images/new.jpg') }}" alt="blood">
</div>
</div>
</div>
<br>
  <div style="color:black" class="container box">
   <h1 align="center">Request for Blood Campaign</h1><br />
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
   <div style="font-size:16px" class="row">
   <div class="col-lg-10">
   <form method="post" action="{{url('sendblood/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Blood Group</label>
     <select class="form-control"name="bloodgroup" >
		                    <option value="A-">A-</option>
		                    <option value="A+">A+</option>
		                    <option value="B-">B-</option>
		                     <option value="B+">B+</option>
		                    <option value="AB-">AB-</option>
		                    <option value="AB+">AB+</option>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
		                 </select>
    </div>
    <div class="form-group">
     <label>Hospital</label>
     <input type="text" name="place" class="form-control" value="" />
</div>
<div class="form-group">
     <label>Contact Number</label>
     <input type="text" name="contact" class="form-control" value="" />
</div>
    <div class="form-group">
     <input type="submit" name="send" style="font-size:15px" class="btn btn-primary full-width active form-dimensions" value="Send Request" />
    </div>
   </form>
</div>
   </div>
</div>
   @endsection

  