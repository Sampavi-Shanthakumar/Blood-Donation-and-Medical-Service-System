@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($feedbacks))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Feedbacks</h2>
                </div>
                
            </div>
        </div>
       
        @foreach($feedbacks as $feedback)
        <div class="w3-container">
      <div class="w3-card-4"  style="width:100%; margin-bottom:20px;margin-left:10px;margin-right:10px;box-sizing: border-box; border: 2px solid black;">
        <header class="w3-container w3-light-grey">
          <h3 style="margin-left:10px color:blue;">&#x2709;{{$feedback->name}}</h3>
         
        </header>
        <div class="w3-container">
          <p><strong>&#9734'{{$feedback->title}}</strong></p>
          <hr>
          <p style="margin-left:20px;">{{$feedback->comment}}</p><br>
        
        <a href="{{ route('feedbacks.delete', $feedback->fb_id) }}" class="btn btn-danger" style="margin-left:1000px;width:100px;height:30px;" onclick="return confirm('Are you sure to delete?')">Delete</a>
        </div>
        </div>
    </div>
        @endforeach
     
    @endif
    </div>
</div>
@endsection