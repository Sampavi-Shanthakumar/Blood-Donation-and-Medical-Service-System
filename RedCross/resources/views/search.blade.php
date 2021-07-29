@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    <form action="{{URL::to('/searchDonor')}}" method="GET" role="search">
    {{ csrf_field() }}
   <center> <h3>Find Donor</h3></center>
   <p><strong>Search donor by blood group and hometown</strong></p><br>
    <div class="input-group">
    <label><strong>City</strong></label>
    <div class="col-md-4">
    <input type="text" class="form-control" name="city" id="city" value="{{Input::get ( 'city' )}}"
            placeholder="Search" autocomplete="off"> 
            <div id="cityList">
    </div>
 
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            
            <label><strong>Blood Group</strong></label>
            <div class="col-md-4">
        <input type="text" class="form-control" name="type" id="type" value="{{Input::get ( 'type' )}}"
            placeholder="Search" autocomplete="off"> 
            <div id="typeList">
    </div>
            </div>
            <button type="submit" class="btn btn-success" value="search">
              search 
            </button>
        
    </div>
</form>
<div class="container">
    @if(isset($posts))
      
  <center><h3>Available Donors</h3></center>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>City</th>
                <th>Phone No</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->age()}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->phoneno}}</td>
                <td> <a href="{{ route('send_email') }}" class="btn btn-info">Send Email</a></td>
            </tr>
            @endforeach
            

        </tbody>
    </table>
    <hr>
    <div style= "color:black;outline: 5px solid black;">
    <h4 style="margin-left:200px;padding-top:20px;padding-bottom:10px;">If there is no donor for particular town and group you can send mail to all donors</h4>
            <a style="margin-left:500px;margin-bottom:10px;background-color:gray" class="btn" href="{{ route('send_email') }}" >Send Email</a>
    </div>
    @endif
    
</div>
    </div>
</div>
<script>
$(document).ready(function(){

 $('#city').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('search.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#cityList').fadeIn();  
                    $('#cityList').html(data);
          }
         });
        }
    });

    $(document).on('click', '#cityList li', function(){  
        $('#city').val($(this).text());  
        $('#cityList').fadeOut();  
    });  

});
$(document).ready(function(){

$('#type').keyup(function(){ 
       var query = $(this).val();
       if(query != '')
       {
        var _token = $('input[name="_token"]').val();
        $.ajax({
         url:"{{ route('search.fetch2') }}",
         method:"POST",
         data:{query:query, _token:_token},
         success:function(data){
          $('#typeList').fadeIn();  
                   $('#typeList').html(data);
         }
        });
       }
   });

   $(document).on('click', '#typeList li', function(){  
       $('#type').val($(this).text());  
       $('#typeList').fadeOut();  
   });  

});
</script>
@endsection
           