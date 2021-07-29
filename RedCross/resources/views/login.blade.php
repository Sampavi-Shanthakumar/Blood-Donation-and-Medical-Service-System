@extends('layouts.app')

@section('content')

<div class="col-6">
	<div class="panel panel-default">
<div class="panel-body">
<form action="{{ route('insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
	<center><h2 class="form-signin-heading" style="font-family:lato">LOGIN HERE</h2></center>
	
    <div class="form-group">
      <label class="label1">User Name</label>
      <input type="name" class="form-control" id="user" name="username" placeholder="User Name" required>
    </div>
    <div class="form-group">
      <label class="label1">Password</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
                        <label class="control-label col-sm-2" >User Type</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="sell" name="userType" style="width:200px">
		                    <option value="Donor">Donor</option>
		                    <option value="Acceptor">Acceptor</option>
		                    <option value="Doctor">Doctor</option>
		                     <option value="Admin">Admin</option>
		                    
		                 </select>
                        </div>
                    </div>
    <center><button type="submit" name="login" class="btn btn-success" >LOGIN</button></center>

  </form>
</div>
</div>
</div>




















@endsection