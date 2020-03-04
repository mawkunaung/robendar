@extends('frontendcontact')

@section('content')
<!-- start contant -->
<div class="container" id="contact">

		<div class="row mt-5">
			<div class="col-lg-6 col-md-12 col-sm-12 mt-4">
				
		        <h3 class="my-4" style="font-weight: bold;">Contact Info</h3>
		            <div class="pl-4">
		            	<div class="my-4">		            	
		            	<span style="color: blue;">
	            			<i class="fas fa-business-time"></i>
	            		</span>
	            		<span class="pl-4" style="font-weight: bold;">
	            			24 hour open
	            		</span>
		            </div>

		            <div class="my-4">		            	  
		            	<a href="#">
		            		<span>
		            			<i class="fas fa-phone-alt"></i>
		            		</span>
		            		<span class="pl-4">
		            			+2 392 3929 210
		            		</span>
		            	</a>
		            </div>
		            
		            <div class="my-4">		            	
		            	<a href="#">
		            		<span>
		            			<i class="fas fa-envelope-open-text"></i>
		            		</span>
		            		<span class="pl-4">
		            			robendar@gmail.com
		            		</span>
		            	</a> 		            	
		            </div>

		            <div class="my-4">		            	 
		            	<span style="color: blue">
	            			<i class="fas fa-hotel"></i>
	            		</span>
	            		<span class="pl-4" style="font-weight: bold;">
	            			Bogyoke Road, Lanmadaw Township, Yangon
	            		</span> 
		            </div>
		            
		            <div class="socials my-4">
		            	<div class="float-left pl-1">
		            		<a href="https://www.facebook.com/mg.sai.31392410">		            			
		            			<span class="fa-stack fa-1x">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
								</span>
		            		</a>
		            	</div>

		            	<div class="float-left pl-1">
		            		<a href="#">
		            			<span class="fa-stack fa-1x">
								  <i class="fas fa-circle fa-stack-2x"></i>
								  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
								</span>
		            		</a>
		            	</div>

		            	<div class="float-left pl-1">
		            		<a href="#">
		            			<span class="fa-stack fa-1x">
								  <i class="fas fa-circle fa-stack-2x"></i>
								  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
								</span>
		            		</a>
		            	</div>

		            	<div class="float-left pl-1">
		            		<a href="#">
		            			<span class="fa-stack fa-1x">
								  <i class="fas fa-circle fa-stack-2x"></i>
								  <i class="fab fa-pinterest-p fa-stack-1x fa-inverse"></i>
								</span>
		            		</a>
		            	</div>
                    </div> 
		            </div> 
			</div>

			<div class="col-lg-6 col-md-12 col-sm-12 my-4">
				<form action="/action_page.php" class="">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="name" class="form-control" placeholder="Enter name" id="name">
					</div>
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" placeholder="Enter email" id="email">
					</div>
					<div class="form-group">
						<label for="phone">Phone No:</label>
						<input type="phone" class="form-control" placeholder="Enter Phone No" id="phone">
					</div>
					<div class="form-group">
						<textarea type="phone" class="form-control" placeholder="Message " id="phone"></textarea> 
					</div>
					
					<button type="submit" class="btn btn-primary" style="float: right;">Send Message</button>
				</form>
			</div>			
		</div>

		<div class="">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.9515157893943!2d96.15212644996323!3d16.779087624423877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec821e07a833%3A0xdde741e3cd511209!2sJunction%20City!5e0!3m2!1sen!2smm!4v1583218168007!5m2!1sen!2smm" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
</div>
<!-- End Contant -->
@endsection