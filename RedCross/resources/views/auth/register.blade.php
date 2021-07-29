@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="font-size:30px;margin-left:350px" class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" title="must contain atleast 8 characters"required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" title="must contain atleast 8 characters"required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right" >User Type:</label>
                                <div class="col-md-6">
                                <select class="form-control" name="type" id="executive">
                                <option value="admin">Admin</option>
                                <option value="acceptor">Acceptor</option>
                                <option id="nationalExecutive" value="donor">Donor</option>
                                <option value="doctor">Doctor</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Last Name</label>
                        <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    
                    <fieldset style="border:1px solid #D3D3D3;">
                    <legend class="col-md-4 col-form-label text-md-left">Address</legend>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >No</label>
                        <div class="col-md-6">
                                <input id="no" type="text" class="form-control @error('no') is-invalid @enderror" name="no" value="{{ old('no') }}" required autocomplete="no" autofocus>

                                @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Street</label>
                        <div class="col-md-6">
                                <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}" required autocomplete="street" autofocus>

                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >City</label>
                        <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    </fieldset>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Phone Number</label>
                        <div class="col-md-6">
                                <input id="phoneno" type="text" class="form-control @error('phoneno') is-invalid @enderror" name="phoneno" value="{{ old('phoneno') }}" required maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" autocomplete="phoneno" autofocus>

                                @error('phoneno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Gender</label>
                        <div class="col-md-6">
                        <select class="form-control" id="sell" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus style="width:200px">
		                    <option value="M">Male</option>
		                    <option value="F">Female</option>
                            </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Date of Birth</label>
                        <div class="col-md-6">
                        <input id="dobDate" type="date"  class="form-control @error('dobDate') is-invalid @enderror" name="dobDate" value="{{ old('dobDate') }}" required autocomplete="dobDate" autofocus>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >NIC</label>
                        <div class="col-md-6">
                        <input id="nic" type="text"  class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="nic"maxlength="10"  title="Please enter exactly 10 characters" autofocus>
                        </div>
                    </div>
                    
                    <div class="textarea nationalExecutive">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Blood Group</label>
                        <div class="col-md-6">
                        <select class="form-control" id="sell" class="form-control @error('bg_id') is-invalid @enderror" name="bg_id" value="{{ old('bg_id') }}" required autocomplete="bg_id" autofocus style="width:200px">
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
                    </div>
                    <div class="textarea nationalExecutive">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" >Last Donated Date</label>
                        <div class="col-md-6">
                        <input id="donatedDate" type="date"  class="form-control @error('donatedDate') is-invalid @enderror" name="donatedDate" value="{{ old('donatedDate') }}" autocomplete="donatedDate" autofocus>
                                @error('donatedDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                  
<script>
    $(document).ready(function(){
        $('.nationalExecutive').hide();
        $('#executive').change(function() {
            if ($(this).val() == "donor") {
                $('.nationalExecutive').show();
            }
            else
            {
                $('.nationalExecutive').hide();
            }
        });
    });
</script>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
