
@extends('layouts.app');
@section('content');

<div class="content" style="color:black; border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<table>
<tr>
<a href="{{ route('posts.index') }}"> <img src="{{ url('/images/blood-donor.jpg') }}" style="margin-left:200px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('bloodcamp.index') }}"> <img src="{{ url('/images/bcamp.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a>

<a href="{{ route('pages.index') }}"> <img src="{{url('/images/acceptor.jpg')  }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a></tr><br><br>
<tr><a style="margin-left:250px; margin-bottom:50px;"><strong>Donor Management</strong></a>
<a style="margin-left:90px;margin-bottom:50px;"><strong>Blood Campaign Management</strong></a>
<a style="margin-left:50px; margin-bottom:50px;"><strong>Acceptor Management</strong></a></tr><br><br>
<tr>
<a href="{{ route('feedbacks.index') }}"> <img src="{{ url('/images/feedback.jpg') }}" style="margin-left:200px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('search') }}"> <img src="{{ url('/images/index.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a>
<a href="{{ route('sms') }}"> <img src="{{ url('/images/sms1.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a></tr><br><br>
<tr><a style="margin-left:250px; margin-bottom:50px;"><strong>Feedbacks</strong></a>
<a style="margin-left:180px;margin-bottom:50px;"><strong>Search Donor</strong></a>
<a style="margin-left:130px;margin-bottom:50px;"><strong>Send Blood Campaign SMS</strong></a></tr><br><br>
<tr>


<a href="{{ route('firstaid.index') }}"> <img src="{{ url('/images/FIRST.jpg') }}" style="margin-left:200px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('pdfs') }}"> <img src="{{ url('/images/pdf.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a>
<a href="{{ route('post.index') }}"> <img src="{{ url('/images/notice.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a></tr><br><br>

<tr>

<a style="margin-left:250px; margin-bottom:50px;"><strong>Firstaid Camp Details</strong></a>
<a style="margin-left:90px;margin-bottom:50px;"><strong>Report Generation</strong></a>
<a style="margin-left:150px;margin-bottom:50px;"><strong>Post Notice</strong></a></tr><br><br>

</tr>




</table>






















@endsection