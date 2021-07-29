@extends('layouts.app')
@section('content')
<div class="content" style=" color:black ;border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">


<table>
<tr>
<a href="{{ route('index') }}"> <img src="{{ url('/images/note.jpg') }}" style="margin-left:200px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('indexBloodDonationCampaign') }}"> <img src="{{ url('/images/note1.jpg') }}" style="margin-left:50px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
<a href="{{ route('indexDonatedDetails') }}"> <img src="{{ url('/images/note2.jpg') }}" style="margin-left:50px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px; height:150px;"></a></tr><br><br>

<tr><a style="margin-left:240px; margin-bottom:50px;"><strong>Donor Report</strong></a>
<a style="margin-left:160px; margin-bottom:50px;"><strong>Blood Donation Details Report</strong></a>
<a style="margin-left:110px;margin-bottom:50px;"><strong>Donated Details Report</strong></a></tr><br><br>

<tr>
</table>
@endsection