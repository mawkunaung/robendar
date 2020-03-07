@extends('frontendbooking')

@section('content')

<div class="container btn-light mt-3">
	<div class="col-md-8  pl-5 offset-2">
	<h2 class="text-center" style="font-size: 50px;">Booking Form</h2>
	</div>
	<div class="row ">			
		<div class="col-md-8 my-5 pl-5 offset-2 ">
			<form action="" method="post">
				 <div class="form-group">
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
				 <button type="submit" class="btn btn-success mt-2">Booking</button>
			</form>
		</div>
	</div>
</div>
@endsection