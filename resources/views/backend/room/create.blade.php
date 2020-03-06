@extends('backendtemplate')
@section('content')
	<div class="container">
		<div class="col-md-8">
		<h2 class="d-inline">Room Create Form</h2>
		<a href="{{route('rooms.index')}}" class="btn btn-info float-right">Back to table</a>
		</div>
		<div class="row">
			
			<div class="col-md-8 mt-4 pl-5">
				<form action="{{route('rooms.store')}}" method="post">
					@csrf
					<div class="form-group">
					    <label for="rno">Room_no</label>
					    <input type="number" class="form-control" id="rno" name="rno" placeholder="enter room number">
					 </div>

					 <div class="form-group">
					    <label class="selectroom">Select Room</label>
						<select name="rtid" class="form-control roomtype">
							@foreach($roomtypes as $row)
							<option value="{{$row->id}}">{{$row->name}}</option>
							@endforeach
						</select>
					 </div>

					 <button type="submit" class="btn btn-info mt-2">Create</button>
				</form>
			</div>
		</div>
	</div>
@endsection