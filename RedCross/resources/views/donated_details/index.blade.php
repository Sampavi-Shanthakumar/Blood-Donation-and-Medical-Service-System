@extends('layouts.app')

@section('content')
<div class="content" style=" border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;margin-left:50px; margin-right:100px;margin-bottom:100px;">
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($donated_details))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull">
                   <center> <h2>Donated Details </h2></center>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('donated_details.add') }}"> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="">Location</th>
                        <th width="">Donated Date</th>
                        <th width="">Donor Id</th>
                        <th width="">Created</th>
                        <th width="">Action</th>
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($donated_details as $donated_detail)
                        <tr>
                            <td class="table-text">
                                <div>{{$donated_detail->location}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$donated_detail->donateDate}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$donated_detail->donor_id}}</div>
                            </td>
                           <td class="table-text">
                                <div>{{$donated_detail->created}}</div>
                            </td>
                            <td>
                                <a href="{{ route('donated_details.details', $donated_detail->dd_id) }}" class="btn btn-info">Details</a>
                                
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