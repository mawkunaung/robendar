@extends('backendtemplate');
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('checkins.store')}}" method="post" class="col-8" enctype="multipart/form-data"> <!-- store with Route -->
            <h2 class="d-inline">Booking Confirm Form</h2>
            <a href="{{route('bookings.index')}}" class="btn btn-info float-right">Back to table</a>
            @csrf<!--  for from save -->
            <div class="form-group">
                <label for="roomtypeid">RoomtypesName</label>
                <input type="text" class="form-control @error('roomtypeid') is-invalid @enderror" id="roomtypeid" aria-describedby="roomtypeidHelp" name="roomtypeid" value="{{$booking->roomtype->name}}{{ isset($user) ? $user->roomtypeid : '' }}">
                @error('roomtypeid')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-form-table">Rooms</label>
                <select name="roomid" class="form-control">
                    @foreach($room as $row)
                    <option value="{{$row->id}}">{{$row->room_no}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="booikingid" value="{{$booking->id}}">


            <button type="submit" class="btn btn-primary mb-3">CheckIn</button>
        </form>
        </div>
    </div>
</div>

@endsection