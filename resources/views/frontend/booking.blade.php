@extends('frontendbooking')

@section('content')

@php 
	$date=date('Y-m-d');
@endphp

<div class="container btn-light mt-5">
	<!-- Alert session -->
	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
	@endif
	<div class="col-md-8  pl-5 offset-2">
	<h2 class="text-center" style="font-size: 50px;">Booking Form</h2>
	</div>
	<div class="row ">			
		<div class="col-md-8 my-5 pl-5 offset-2 ">
			<form method="POST" action="{{route('bookings.store')}}" class="col-12" enctype="multipart/form-data">
				@csrf
				@method("POST")
				 <div class="form-group">
				<label for="checkin">Check-In-Date</label>
				<input type="date" class="form-control @error('checkin') is-invalid @enderror" id="checkin" aria-describedby="checkinHelp" name="checkin" min="{{$date}}" value="{{ isset($user) ? $user->checkin : '' }}">
				@error('checkin')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="checkout">Check-Out-Date</label>
				<input type="date" class="form-control @error('checkout') is-invalid @enderror" id="checkout" aria-describedby="checkoutHelp" name="checkout" min="{{$date}}" value="{{ isset($user) ? $user->checkout : '' }}">
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
				 <button type="submit" class="btn btn-success mt-2">Booking</button>
			</form>
		</div>
	</div>
</div>
@endsection