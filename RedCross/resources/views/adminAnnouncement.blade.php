@extends('layouts.app');
@section('content');



<form method="post" action="{{ route('announcement') }}">
<label>Enter Your Announcement</label>
<textarea class="form-control" name="text">

</textarea>

<select name="active_status">
    <option value="0">Deactive</option>
    <option value="1">Active</option>
</select>
  </form>





  @endsection