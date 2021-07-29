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
           
              <center><h3>  Add Donor </h3></center>
            </div>
            <div class="panel-body">
                <form action="{{ route('posts.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >First Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" id="fname" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="lname" id="lname" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <fieldset style="border:1px solid #D3D3D3;">
                    <legend class="control-label col-sm-2">Address</legend>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >No</label>
                        <div class="col-sm-10">
                            <input type="text" name="no" id="no" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Street</label>
                        <div class="col-sm-10">
                            <input type="text" name="street" id="street" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >City</label>
                        <div class="col-sm-10">
                            <input type="text" name="city" id="city" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    </fieldset>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phoneno" id="phoneno" class="form-control" autocomplete="off" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gender</label>
                        <div class="col-sm-10">
                    <label>Male </label><input name="gender"  type="radio" value="Male" autocomplete="off" required>
		            <label>Female </label><input name="gender"  type="radio" value="Female" autocomplete="off" required>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Date of Birth</label>
                        <div class="col-sm-10">
                        
                        <input id="dobDate" type="date"  class="form-control @error('dobDate') is-invalid @enderror" name="dobDate" value="{{ old('dobDate') }}" required autocomplete="dobDate" autofocus>
                       
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="control-label col-sm-2" >NIC</label>
                        <div class="col-sm-10">
                            <input type="text" name="nic" id="nic" class="form-control" maxlength="10"  title="Please enter exactly 10 characters"autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Blood Group</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="sell" name="bg_id" style="width:200px" autocomplete="off" required>
		                    <option value="1">A-</option>
		                    <option value="2">A+</option>
		                    <option value="3">B-</option>
		                     <option value="4">B+</option>
		                    <option value="5">AB-</option>
		                    <option value="6">AB+</option>
                            <option value="7">O-</option>
                            <option value="8">O+</option>
		                 </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Last Donated Date</label>
                        <div class="col-sm-10">
                        <input type="date" name="donatedDate" id="donatedDate" class="form-control" autocomplete="off"required>
                    </div>
                    </div>
                   
                   
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Add Details">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection