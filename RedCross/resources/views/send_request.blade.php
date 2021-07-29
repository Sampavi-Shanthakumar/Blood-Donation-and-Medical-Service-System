@extends('layouts.static_app')

@section('content')
<header class="header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="/"> <img src="{{ url('/images/logo1.jpg') }}" alt="Life Line"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a style="margin-right:360px; text-transform: capitalize;" class="nav-link " href="/" onmouseover="this.style.background='nonr'">
                            LifeLine<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/">
                            home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="/about">
                            about<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="sendrequest">
                            firstaid camp request<span class="sr-only">(current)</span>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link " href="/awareness">
                            blood donation awareness<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<br>
<br>
<br>

<section style="margin-left:75px; margin-right:75px" >
        <div class="container">
        <div class="col-sm-6"> 
<img style="width:1020px; height:350px" src="{{ url('/images/firstaid.jpg') }}" alt="firstaid">
</div>
</div>
</div>
<br>
  <div style="color:black" class="container box">
   <h1 align="center">Request for First aid camp</h1><br />
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
   <form method="post" action="{{url('sendrequest/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label> First Name</label>
     <input type="text" name="fname" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label> Last Name</label>
     <input type="text" name="lname" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Phone Number</label>
     <input type="text" name="number" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>NIC</label>
     <input type="text" name="nic" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Your Organization</label>
     <input type="text" name="organization" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Your Organization Address</label>
     <input type="text" name="address" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Event</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <label>Event location</label>
     <input type="text" name="location" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Event date</label>
     <input type="text" name="date" class="form-control" value="" />
    </div>
    <div class="form-group">
     <input type="submit" name="send" style="font-size:15px" class="btn btn-primary full-width active form-dimensions" value="Send Request" />
    </div>
   </form>
</div>
   </div>
</div>
   @endsection

  