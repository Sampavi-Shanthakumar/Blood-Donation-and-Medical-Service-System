
@extends('layouts.app')
@section('content')
<div class="content" style=" color:black ;border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">


<table>
<tr>
<a href="{{ route('search') }}"> <img src="{{ url('/images/index.jpg') }}" style="margin-left:200px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('mydetails') }}"> <img src="{{ url('/images/profile.jpg') }}" style="margin-left:50px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('donated_details.index') }}"> <img src="{{ url('/images/index1.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a></tr><br><br>

<tr><a style="margin-left:250px; margin-bottom:50px;"><strong>Search Donor</strong></a>
<a style="margin-left:190px; margin-bottom:50px;"><strong>My details</strong></a>
<a style="margin-left:150px;margin-bottom:50px;"><strong>Donated Details Management</strong></a></tr><br><br>

<tr>
<a href="{{ route('chat') }}"> <img src="{{ url('/images/chat.jpg') }}" style="margin-left:200px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a>
<a href="{{ route('checkdate') }}"> <img src="{{ url('/images/date.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a>
<a href="{{ route('feedbacks.add') }}"> <img src="{{ url('/images/feedback.jpg') }}" style="margin-left:50px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
</tr><br><br>
<tr>
<a style="margin-left:250px;margin-bottom:50px;"><strong>Chat Box</strong></a>
<a style="margin-left:190px;margin-bottom:50px;"><strong>My Donated Details</strong></a>
<a style="margin-left:160px; margin-bottom:50px;"><strong>Feedbacks</strong></a>
</tr><br><br>


</table>





















@endsection