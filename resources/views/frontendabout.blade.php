<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="{{asset('another/css/bootstrap.min.css')}}">
	<!-- JQ -->
	<script type="text/javascript" src="{{asset('another/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('another/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('another/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('another/style.css')}}">
	<script type="text/javascript" src="{{asset('another/custom.js')}}"></script>
</head>
<body>
	<!--navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="hotel-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">ROBANDER</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto my-2">
					<li class="nav-item px-4"><a href="{{route('main')}}" class="nav-link">Home</a></li>
					
					<li class="nav-item px-4"><a href="#" class="nav-link">Service</a></li>
					<li class="nav-item px-4"><a href="{{route('about')}}" class="nav-link">About</a></li>
					<li class="nav-item px-4"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
					<li class="nav-item px-4 btn btn-success"><a href="{{route('booking')}}" class="nav-link text-light">Booking</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-- header -->
<div id="banner">
	<div class="container" id="navtitle">
		<div class="row justify-content-center text-center">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h1 class="text-white" style="font-size: 80px;">About Us</h1>
			</div>
		</div>
	</div>
</div>

@yield('content')

<!-- start footer -->
	<footer>
      <div class="container-fluid bg-dark py-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="mb-4 social">
              <h2 class="">Robander</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="mt-5">
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Our Blog</a></li>
                <li><a href="#" class="py-2 d-block"> Our Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><p>203 BoSawNaung.st, North Dargon ,Yangon</p></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+959447156128</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">robander@gamil.com.mm</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>All rights reserved | This template is made with by <a href="https://mawkunaung.me" target="_blank">Robander</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end footer -->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-circle-up"></i></button>

<script type="text/javascript">
	//Get the button:
	mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    mybutton.style.display = "block";
	  } else {
	    mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0; // For Safari
	  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
</script>
</body>
</html>