@extends('backendtemplate')
@section('content')


<div class="container-fluid">
    <h2 class="d-inline">Dashboard Table</h2>
    <div class="row">
        <div class="col-md-3">
            <h5>Room No</h5>
            @foreach($rooms as $row)
            <button class="btn btn-success rounded circle d-block my-2">{{$row->room_no}}</button>
            @endforeach
        </div>
        <div class="col-md-9">
            <div id='calendar'></div>
        </div>
    </div>

</div>
@endsection