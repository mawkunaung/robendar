@extends('frontendroom')

@section('content')
<!-- start contant -->

<div class="container-fluid" id="roomtypes_show">
	<div class="row bg-light">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<span>Welcome to Robander Hotel</span>
			<h2 class="mb-4">Hotels Room Types</h2>
		</div>
		<div class="card bg-light" style="width: 100%;">
			<div class="row no-gutters">
				<div class="col-md-5">
					<div class="col-md-12">
						@php $c=0; @endphp
						<div id="carouselExampleInterval{{$c}}" class="carousel slide card" data-ride="carousel">
							<div class="carousel-inner ">
								@php
								$photo = json_decode($roomtype->photo);
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
				</div>
				<div class="offset-1 col-md-4 offset-1">
					<div class="card-body text-left text-sm-center">
						<label style="float: left;"><b>Room Type :</b></label>
						<h5 class="card-title">{{$roomtype->name}}</h5>

						<label style="float: left;"><b>Price:</b></label>
						<h5 class="card-title">{{$roomtype->price}}</h5>

						<hr style="width: 20rem;padding-top: 2rem 0;">
						
					</div>
					<div class="card-body text-left">
						<label><h4><b>Services</b></h4></label><br>
						@foreach($roomtype->services as $row)
						<img src="{{$row->logo}}" width="50px" height="25px" style="float: left;"><h5 class="card-title">{{$row->name}}</h5><br>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- End Contant -->
@endsection