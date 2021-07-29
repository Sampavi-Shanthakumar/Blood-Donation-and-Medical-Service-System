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
                    
                    <li class="nav-item active">
                        <a class="nav-link " href="/about">
                            about<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
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
<br>
<br>
<div class="features-area pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-body">
                        <div class="features-box text-center">
                            <div class="features-elements">
                                <h4 class="mb20">Services</h4>
                                <p class="mb20"><p align=" justify">SriLanka Red Cross mobilises to help control spiralling dengue outbreak
The SriLanka RedCrossSociety is mobilising volunteers to support government efforts to stem the country’s worst-ever outbreak of dengue virus disease and provide medical assistance at overstretched hospitals.

<br></p></p>
                            </div>
                            <div class="features-box-img">
                                <a class="primary-overlay" href="#"><img src="{{  url('/images/about1.jpg') }}"  alt="feature img"></a>
                            </div>
                        </div>
                        <div class="features-box text-center">
                            <div class="features-elements">
                                <h4 class="mb20">History</h4>
                                <p class="mb20"><p align=" justify">The Sri Lanka Red Cross Society has operated since 1936, first as a branch of the British Red Cross and then from 1949 to 1971 as the Ceylon Red Cross Society. It was recognized by the ICRC and admitted into the League of Red Cross Societies (now the International Federation of Red Cross & Red Crescent Societies) in 1952. The Ceylon Red Cross Society was renamed as Sri Lanka Red Cross Society in 1972. The society was recognized by Royal Charter in 1951 and as a charitable organization also in the same year by a gazette notification of the Finance Ministry. It was also registered under the Social Service Act 33 of 1980.
</p></p>
                            </div>
                            <div class="features-box-img">
                                <a class="primary-overlay" href="#"><img src="{{ url('/images/about2.jpg')}}"  alt="feature img"></a>
                            </div>
                        </div>
                        <div class="features-box text-center">
                            <div class="features-elements" style="margin-bottom: 18px">
                                <h4 class="mb20">Priciples</h4>
                                <p class="mb20">The RedCross and Red crescent movement fundamental principles are humanity,impartiality,neutrality,independence,voluntary service,unity and universality
<br></p>
                            </div>
                            <div class="features-box-img">
                                <a class="primary-overlay" href="#"><img src="{{  url('/images/about3.jpg') }}"  alt="feature img"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!--features-area end-->

    @endsection