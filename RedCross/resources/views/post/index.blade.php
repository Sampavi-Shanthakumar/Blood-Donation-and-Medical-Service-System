@extends('layouts.app')
@section('content')

<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:10px; margin-right:100px;margin-bottom:100px;width:100%;">
<div class="row">
    <div class="col-lg-11">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
  
        
                    @if(!empty($posts))
        <div style= "color:black" class="row">
            <div class="col-lg-11 margin-tb">
                <div class="pull">
                    <center> <h3>Notice Details </h3></center>
                </div>
                <div class="pull-right" style="margin-bottom:10px;">
                    <a class="btn btn-success" href="{{ route('post.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div style= "color:black" class="row">
            <div class="col-xs-11 col-sm-11 col-md-11">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="">Title</th>
                        <th width="">Message</th>
 
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->title}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->message}}</div>
                            </td>
                           
                       
                                <td> <a href="{{ route('post.delete', $post->post_id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td> 
                            
                           
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection