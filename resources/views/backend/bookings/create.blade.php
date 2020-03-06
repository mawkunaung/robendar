
@extends('backendtemplate')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<form action="{{route('bookings.store')}}" method="post" class="col-8" enctype="multipart/form-data"> <!-- store with Route -->
			<h2 class="d-inline">Booking Create Form</h2>
			<a href="{{route('bookings.index')}}" class="btn btn-info float-right">Back to table</a>
			@csrf<!--  for from save -->
			<div class="form-group">
				<label for="checkin">Check-In-Date</label>
				<input type="date" class="form-control @error('checkin') is-invalid @enderror" id="checkin" aria-describedby="checkinHelp" name="checkin" value="{{ isset($user) ? $user->checkin : '' }}">
				@error('checkin')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="checkout">Check-Out-Date</label>
				<input type="date" class="form-control @error('checkout') is-invalid @enderror" id="checkout" aria-describedby="checkoutHelp" name="checkout" value="{{ isset($user) ? $user->checkout : '' }}">
				@error('checkout')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label class="col-form-table">UserName</label>
				<select name="userid" class="form-control">
					@foreach($users as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="col-form-table">RoomType</label>
				<select name="roomtypeid" class="form-control">
					@foreach($roomtypes as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<input type="text" class="form-control @error('message') is-invalid @enderror" id="message" aria-describedby="messageHelp" name="message" value="{{ isset($user) ? $user->message : '' }}" placeholder="Review">
				@error('message')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary mb-3">Book</button>
		</form>
		</div>
	</div>
</div>



@endsection

