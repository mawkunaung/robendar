@extends('frontendbooking')

@section('content')

<<<<<<< HEAD
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
||||||| merged common ancestors
<div class="container btn-light mt-5">
=======
<div class="container btn-light mt-3">
>>>>>>> 84328a5b9ae12e5bf4f0e2f7271c6ff366bcacf4
	<div class="col-md-8  pl-5 offset-2">
	<h2 class="text-center" style="font-size: 50px;">Booking Form</h2>
	</div>
	<div class="row ">			
		<div class="col-md-8 my-5 pl-5 offset-2 ">
			<form method="POST" action="{{route('bookings.store')}}" class="col-12" enctype="multipart/form-data">
				@csrf
				@method("POST")
				 <div class="form-group">
<<<<<<< HEAD
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
||||||| merged common ancestors
				    <label class="selectroom">Select Room</label>
					<select name="rtid" class="form-control roomtype">
					
						<option value="roomtype">Roomtypes</option>
						
					</select>
				 </div>

				  <div class="form-group">
				    <label for="checkin_date">CheckIn_date</label>
				    <input type="date" class="form-control" id="checkin_date" placeholder="Start date">
				  </div>
				  <div class="form-group">
				    <label for="checkout_date">CheckOut_date</label>
				    <input type="date" class="form-control" id="checkout_date" placeholder="End date">
				  </div>
				  	<!-- <div class="form-group row">
					    <label for="checkin_date" class="col-sm-2 col-form-label">CheckIn_date</label>
					    <div class="col-sm-10">
					      <input type="date" class="form-control" id="checkin_date">
					    </div>
					</div>
				  <div class="form-group row">
				    <label for="checkout_date" class="col-sm-2 col-form-label">CheckOut_date</label>
				    <div class="col-sm-10">
				      <input type="date" class="form-control" id="checkout_date">
				    </div>
				   </div> -->
				  <div class="form-group">
				    <label for="message">Message</label>
				    <textarea class="form-control" id="message" rows="3"></textarea>
				  </div>
=======
				    <label class="selectroom">Select Room</label>
					<select name="rtid" class="form-control roomtype">
					
						<option value="roomtype">Roomtypes</option>
						
					</select>
				 </div>

				  <div class="form-group">
				    <label for="checkin_date">CheckIn_date</label>
				    <input type="date" class="form-control" id="checkin_date" placeholder="Start date">
				  </div>
				  <div class="form-group">
				    <label for="checkout_date">CheckOut_date</label>
				    <input type="date" class="form-control" id="checkout_date" placeholder="End date">
				  </div>
				  	
				  <div class="form-group">
				    <label for="message">Message</label>
				    <textarea class="form-control" id="message" rows="3"></textarea>
				  </div>
>>>>>>> 84328a5b9ae12e5bf4f0e2f7271c6ff366bcacf4
				 <button type="submit" class="btn btn-success mt-2">Booking</button>
			</form>
		</div>
	</div>
</div>
@endsection