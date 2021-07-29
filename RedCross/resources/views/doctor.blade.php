
@extends('layouts.app')
@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">

                <table>
<tr>
<a href="{{ route('chat') }}"> <img src="{{ url('/images/chat.jpg') }}" style="margin-left:400px; margin-bottom:10px;box-shadow: 5px 10px #888888;border: 1px solid; border-radius:50%; width:200px;height:150px;"></a>
</tr><br><br>
<tr>
<a style="margin-left:470px;margin-bottom:50px;"><font color="black"><strong>Chat Box</strong></font></a>        
    </tr>
    </table>
    </div>















@endsection