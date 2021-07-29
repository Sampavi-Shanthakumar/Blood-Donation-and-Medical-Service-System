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
                    <li class="nav-item ">
                        <a class="nav-link " href="/">
                            home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link " href="/about">
                            about<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="sendrequest">
                            firstaid camp request<span class="sr-only">(current)</span>
                        </a>
                    </li>
                   
                    <li class="nav-item active">
                        <a class="nav-link " href="/awarness">
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
<br>
<br>

     
<div class="features-area pb30">
  <div class="container">
    <div style="color:black;font-size:18px"class="row">
    <div style="color:black;font-size:18px" class="features-body">
    <div style="color:black;font-size:18px" class="features-box ">
    <div  style="color:black;font-size:18px"class="features-elements">
      <div class="col-xs-12 col-md-6">  
      <a href="{{ route('awareness') }}"> <img src="{{ url('/images/awareness.jpg') }}" style="width:100%; height:450px;"></a>
      </div>
          <div class="col-xs-12 col-md-6" style="width:100%">
         
    <h4 align="center"><h4 style="color:red">Awarness about Blood Donation</h4></h4><br>
    <p align=" justify"><p style="color:black;font-size:18px" >Sri Lanka Red Cross mobilises to help control spiralling dengue outbreak
The Sri Lanka Red Cross Society is mobilising volunteers to support government efforts to stem the country’s worst-ever outbreak of dengue virus disease and provide medical assistance at overstretched hospitals.

<br></p></p>
             
          <p><ol><li>Age above 18 years and below 60 years.<br>
                 <li>Weight is not less than 55 Kg in donor.<br>
                 <li>If previously donated, at least 4 months should be elapsed since the date of previous donation.<br>
                 <li>Hemoglobin level should be more than 12g/dL.<br>
                 <li>Free from any serious disease condition or pregnancy.<br>
                 <li>Should have a valid identity card or any other document to prove the identity.<br>
                 <li>Free from "Risk Behaviours".<br></ol>

                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b style="color:red">Risk Behaviours :-<br></b>
             <ul>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Homosexuals.<br>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Sex workers and their clients.<br>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Drug addicts.<br>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Engaging in sex with any of the above.<br>
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Having more than one sexual partner<br>
                      </ul>
                      </li>
            </p>
          
            
           </div>

                </div>
                

           </div>
         </div>
        </div>
</div>
</div>
</div>
</div>
        @endsection