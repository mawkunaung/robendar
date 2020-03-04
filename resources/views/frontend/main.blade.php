@extends('frontendtemplate')

@section('content')
    <!-- service -->
	<div class="container">
		<div class="row" id="primary">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span>Welcome to Robander Hotel</span>
				<h2 class="mb-4">A New Vision of Luxury Hotel</h2>
			</div> 
			<div class="card col-lg-3" style="align-items: center;height: 12rem;">
				<span class="fa-stack fa-3x text-center">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
				</span>
				<div class="card-body">
					<h5 class="card-title">Get Breakfast</h5>
				</div>
			</div>
			<div class="card col-lg-3" style="align-items: center;height: 12rem;">
				<span class="fa-stack fa-3x">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fas fa-car fa-stack-1x fa-inverse"></i>
				</span>
				<div class="card-body">
					<h5 class="card-title">Rent a car</h5>
				</div>
			</div>
			<div class="card col-lg-3" style="align-items: center;height: 12rem;">
				<span class="fa-stack fa-3x">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fas fa-swimmer fa-stack-1x fa-inverse"></i>
				</span>
				<div class="card-body">
					<h5 class="card-title">Swimming Pool</h5>
				</div>
			</div>
			<div class="card col-lg-3" style="align-items: center;height: 12rem;">
				<span class="fa-stack fa-3x">
					<i class="fas fa-circle fa-stack-2x"></i>
					<i class="fas fa-dumbbell fa-stack-1x fa-inverse"></i>
				</span>
				<div class="card-body">
					<h5 class="card-title">Gym & Fitness</h5>
				</div>
			</div>
		</div>
	</div>
	<!-- end service -->



	<!-- room types -->

	<div class="container-fluid" id="roomtypes_show">
		<div class="row">
			<div class="col-12 text-center">
				<span>Robander Rooms</span>
				<h2>Hotel's Master Rooms</h2>
			</div>
			@php $c=0; @endphp
			@foreach($roomtypes as $roomtype)
			<div class="col-lg-4 col-md-4 col-sm-12 my-3">
				<div id="carouselExampleInterval{{$c}}" class="carousel slide card" data-ride=" carousel">
					<div class="carousel-inner ">
						@php
							$photo = json_decode($roomtype->photo);
							$i=0;
						@endphp
						@foreach($photo as $r_photo)
						<div class="carousel-item @if($i==0) {{'active'}} @endif" data-interval="10000">
							<img src="{{$r_photo}}" class="d-block w-100" style="height: 20rem;">
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
					<div class="card-body">
						<h4>{{$roomtype->name}}</h4>
						<p class="card-text">34000MMK</p>
					</div>
				</div>
			</div>
			@php $c++; @endphp
			@endforeach
		</div>
	</div>
	<!-- end roomtypes -->











	<!-- recommend -->
	<div id="counter">
		<div class="container p-5">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-caption">
							<h3>We Are</h3>
							<p>The Customers Satistied Hotel</p>
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-caption">
							<h3>We Are</h3>
							<p>The Best Performance Hotel</p>
						</div>
					</div>
					<div class="carousel-item">
						<div class="carousel-caption">
							<h3>We Are</h3>
							<p>The Most Popular Hotel</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- end recommend -->
	<!-- review -->
	<div class="container mb-5">
		<div class="row" id="guest_review">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center my-5">
				<span>Customers Reviews</span>
				<h2>Ours Happy Guests Says</h2>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 text-left">
				<div class="card px-2">
					<div class="card-body col-12">
						<img src="{{asset('business/images/person_1.jpg')}}" class=" col-4 img-fluid rounded-circle">
						<span class="col-6">Jonsan M.Well</span>
					</div>
					<div class="card-title offset-1 col-10 offset-1">
						<p class="text-justify">We had a 3 night stay to enjoy the Prague Christmas Markets, and were very satisfied with every aspect of the hotel.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 text-left">
				<div class="card px-2">
					<div class="card-body col-12">
						<img src="{{asset('business/images/person_2.jpg')}}" class=" col-4 img-fluid rounded-circle">
						<span class="col-6">Tigeral T.Grate</span>
					</div>
					<div class="card-title offset-1 col-10 offset-1">
						<p class="text-justify">Excellent stay, except WIFI is a bit slow in our room, probably due to its position. Otherwise, a good hotel, with good position</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12 text-left">
				<div class="card px-2">
					<div class="card-body col-12">
						<img src="{{asset('business/images/person_3.jpg')}}" class=" col-4 img-fluid rounded-circle">
						<span class="col-6">Franco T.Hooks</span>
					</div>
					<div class="card-title offset-1 col-10 offset-1">
						<p class="text-justify">Lovely hotel. Very comfortable. 10 minute walk to the old town. Breakfast was really good. Would definitely stay again</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end review -->
@endsection
