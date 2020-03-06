@extends('backendtemplate')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="container">
		<div class="col-md-8">
		<h2 class="d-inline">Room Update Form</h2>
		<a href="{{route('rooms.index')}}" class="btn btn-info float-right">Back to table</a>
		</div>
		<div class="row">
			
			<div class="col-md-8 mt-4 pl-5">
				<form action="{{route('rooms.update',$room->id)}}" method="post">
					@csrf
					@method('PUT')
					<div class="form-group">
					    <label for="rno">Room_no</label>
					    <input type="number" class="form-control" id="rno" name="rno" placeholder="enter room number" value="{{$room->room_no}}">
					 </div>

					 <div class="form-group">
					    <label class="selectroom">Select Room</label>
						<select name="rtid" class="form-control roomtype">
							@foreach($roomtypes as $row)
							<option value="{{$row->id}}" @if($row->id== $room->roomtype_id)selected @endif>{{$row->name}}</option>
							@endforeach
						</select>
					 </div>

					 <button type="submit" class="btn btn-info mt-2">Update</button>
				</form>
			</div>
		</div>
	</div>
@endsection