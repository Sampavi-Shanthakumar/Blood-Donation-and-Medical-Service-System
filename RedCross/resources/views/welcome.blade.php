@extends('layouts.static_app')
@include('static_pages.navbar');
@section('content')
<br>
<br>
<br>
<br>


<div class="container-fluid">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <!-- Images from http://wefunction.com/free-photos-vol-4/ -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{ url('/images/slide1.jpg') }}" alt="image 1" style="width:100%;height:450px">
           
          </div>
          <div class="item">
            <img src="{{ url('/images/slide4.jpg') }}" alt="image 2" style="width:100%;height:450px">
            
          </div>
          <div class="item">
            <img src="{{ url('/images/slide3.jpeg') }}" alt="image 3" style="width:100%;height:450px">
           
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <br>





@endsection