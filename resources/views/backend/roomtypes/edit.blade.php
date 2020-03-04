
@extends('backendtemplate')

@section('content')
<div class="container">
	<div class="row">
		<h2>Roomtype Create Form</h2>

		<div class="offset-2 col-8 card shadow">
			<form action="{{route('roomtypes.update',$roomtype->id)}}" method="post" enctype="multipart/form-data"> <!-- store with Route -->
			@csrf<!--  for from save -->
			@method('PUT')
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" name="name" value="{{$roomtype->name}}{{ isset($user) ? $user->name : '' }}">
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="form-group">
				<label for="price">Price</label>
				<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="priceHelp" name="price" value="{{$roomtype->price}}{{ isset($user) ? $user->price : '' }}">
				@error('price')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="form-group">
				<label class="col-form-table">Select Services</label>
				<select name="services[]" class="form-control js-example-basic-multiple" multiple="">
					@foreach($services as $row)
					<option value="{{$row->id}}"  @foreach($roomtype->services as $roomtype_service) <?php if($roomtype_service->id==$row->id) { ?> selected <?php }; ?>  @endforeach>{{$row->name}}</option>
					@endforeach
				</select>
			</div>

			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#old" data-toggle="tab">Old</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#new" data-toggle="tab">New</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="old">
					@php 
					$photo = json_decode($roomtype->photo);
					@endphp
					@foreach($photo as $rt_photo)
					<img src="{{asset($rt_photo)}}" class="img-fluid" width="100" height="100">
					@endforeach
					<input type="hidden" name="oldphoto" value="{{$roomtype->photo}}">
				</div>
				<div class="tab-pane fade show" id="new">
					<div class=" input-group control-group increment">
						<input type="file" name="photo[]" class="form-control">
						<div class="input-group-btn"> 
							<button class="btn btn-success" type="button"><i class="fas fa-plus"></i></button>
						</div>
					</div>
					<div class="clone hide">
						<div class="control-group input-group" style="margin-top:10px">
							<input type="file" name="photo[]" class="form-control">
							<div class="input-group-btn"> 
								<button class="btn btn-danger" type="button"><i class="fas fa-eraser"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary mb-3">Update</button>
		</form>
		</div>
	</div>
</div>


@endsection

@section('script')
<script type="text/javascript">

	$(document).ready(function() {

		$(".btn-success").click(function(){ 
			var html = $(".clone").html();
			$(".increment").after(html);
		});

		$("body").on("click",".btn-danger",function(){ 
			$(this).parents(".control-group").remove();
		});

	});

</script>
@endsection