@extends('layouts.app')
@section('content')

<div class="content" >
<div class="row">
    <div class="col-lg-11">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
  
        
                    @if(!empty($posts))
        <div style= "color:black" class="row" >
            <div class="col-lg-11 margin-tb">
                <div  style="font-weight:bold;font-size:40px">
                    Notice Details 
                </div>
               
            </div>
        </div>
        <br/>
        <br/>
        <div style="margin-left:300px" class="col-xs-6 col-sm-6 col-md-6">

               
                    @foreach($posts as $post)
                    <div style= "color:black;outline: 5px solid black;" class="row">
 
                                <div style="margin-left:180px;font-size:32px;font-weight:bold;margin-top:20px;margin-bottom:20px">
                                {{$post->title}}
                                </div>
                           
                                <div style="color:black;margin-left:24px;margin-right:1px;font-size:18px;margin-bottom:20px">
                                {{$post->message}}
                                </div>
                          
                                </div>   
                            
                           
                                <br/>
        <br/>  
                    @endforeach
                    
           
        </div>
        
        @endif
    </div>
</div>
@endsection