
@extends('layouts.app');
@section('content');

<div class="container">
   
                 
<div class="content" style=" color:black;border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<table>
<tr>
<a href="sendblood"> <img src="{{ url('/images/need.jpg') }}" style="margin-left:50px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('search') }}"> <img src="{{ url('/images/index.jpg') }}" style="margin-left:50px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a>
<a href="{{ route('chat') }}"> <img src="{{ url('/images/chat.jpg') }}" style="margin-left:50px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a><br><br>

<tr><a style="margin-left:80px; margin-bottom:50px;"><strong>Send Blood Campaign Request</strong></a>
<a style="margin-left:110px;margin-bottom:50px;"><strong>Search Donor</strong></a>
<a style="margin-left:180px;margin-bottom:50px;"><strong>Chat Box</strong></a></tr>
<tr>
<a href="{{ route('acceptorDetails') }}"> <img src="{{ url('/images/acceptorD.png') }}" style="margin-left:200px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('feedbacks.add') }}"> <img src="{{ url('/images/feedback.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a><br><br>

<tr><a style="margin-left:260px; margin-bottom:50px;"><strong>My Details</strong></a>
<a style="margin-left:180px;margin-bottom:50px;"><strong>Feedbacks</strong></a>
</tr>
</table>






















                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
