@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="offset-2 col-lg-8 offset-2 py-3">
			<h2 class="d-inline">Booking Details</h2>
		<a href="{{route('bookings.index')}}" class="btn btn-info float-right">Back to table</a>
		</div>
		<div class="offset-2 col-lg-8 offset-2">
			<div class="card mb-3 bg-light">
			<div class="row no-gutters">
				@php $c=0; @endphp
				
				<div class="col-md-12">
					<div id="carouselExampleInterval{{$c}}" class="carousel slide card" data-ride=" carousel">
						<div class="carousel-inner ">
							@php
							$photo = json_decode($booking->roomtype->photo);
							$i=0;
							@endphp
							@foreach($photo as $r_photo)
							<div class="carousel-item @if($i==0) {{'active'}} @endif" data-interval="10000">
								<img src="{{$r_photo}}" class="d-block w-100" style="height: 30rem;">
							</div>
							@php $i++; @endphp
							@endforeach

						</div>
						<a class="carousel-control-prev" href="#carouselExampleInterval{{$c}}" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleInterval{{$c}}" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				@php $c++; @endphp
				
				<div class="col-md-12">
					<div class="row text-center">
						<div class="card-body col-md-6">
							<label>Room Type :</label>
							<h4>{{$booking->roomtype->name}}</h4>
						</div>
						<div class="card-body col-md-6">
							<label>Price :</label>
							<h4>{{$booking->roomtype->price}}</h4>
						</div>
					</div>
					<hr style="width: 30rem;height: 1rem;">
					<div class="row text-center">
						<h3 class="card-title col-12"><b>About Customer</b></h3>
						<div class="card-body col-md-6">
							<label>Name :</label>
							<p class="card-text">{{$booking->user->name}}</p>
						</div>
						<div class="card-body col-md-6">
							<label>Email :</label>
							<p class="card-text">{{$booking->user->email}}</p>
						</div>
						<div class="card-body col-md-6">
							<label>Phone :</label>
							<p class="card-text">{{$booking->user->phone}}</p>
						</div>
						<div class="card-body col-md-6">
							<label>NRC :</label>
							<p class="card-text">{{$booking->user->nrc_no}}</p>
						</div>
						<div class="card-body col-md-6">
							<label>Address :</label>
							<p class="card-text">{{$booking->user->address}}</p>
						</div>
					</div>
					<hr style="width: 30rem;height: 1rem;">
					<div class="row text-center">
						<h3 class="card-title col-12"><b>Rooms Types Service</b></h3>
						<div class="card-body col-12">
							@foreach($booking->roomtype->services as $roomtype_service)  
								<img src="{{$roomtype_service->logo}}" width="50px" height="50px"><h5>{{$roomtype_service->name}}</h5>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

















	@endsection
