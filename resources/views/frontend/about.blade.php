@extends('frontendabout')

@section('content')
<!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="{{asset('another/images/b4.jpg')}}" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">im a ux /ui designer austin based who loves clean, simple & unique design. i also enjoy crafting brand identities, icons, & ilustration work. </p>
            <p class="separator">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family.English person.</p>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->
<div id="group">
  <div class="container">
  	<h1>Our Frendly Staff</h1>
  	<div class="row">
  		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
  			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img src="{{asset('another/images/staff-1.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/staff-2.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/staff-3.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			  </div>
			</div>
  		</div>

  		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
  			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img src="{{asset('another/images/4.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/5.webp')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/6.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			  </div>
			</div>
  		</div>

  		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
  			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img src="{{asset('another/images/person_1.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/person_2.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/person_3.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			  </div>
			</div>
  		</div>

  		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
  			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			        <img src="{{asset('another/images/1.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/2.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="{{asset('another/images/3.jpg')}}" style="width: 300px; height: 360px; border-radius: 20px;" class="d-block" alt="...">
			    </div>
			  </div>
			</div>
  		</div>
  	</div>
  </div>
</div>
@endsection