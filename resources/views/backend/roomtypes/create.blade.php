
@extends('backendtemplate')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<form action="{{route('roomtypes.store')}}" method="post" class="col-8" enctype="multipart/form-data"> <!-- store with Route -->
			<h2 class="d-inline">Roomtype Create Form</h2>
			<a href="{{route('roomtypes.index')}}" class="btn btn-info float-right">Back to table</a>
			@csrf<!--  for from save -->
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" name="name" value="{{ isset($user) ? $user->name : '' }}">
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label class="col-form-table">Select Services</label>
				<select name="services[]" class="form-control js-example-basic-multiple" id="batch" multiple="">
					@foreach($services as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="price">Price</label>
				<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="priceHelp" name="price" value="{{ isset($user) ? $user->price : '' }}" placeholder="MMK">
				@error('price')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			
			<div class="input-group control-group increment" >
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
			<button type="submit" class="btn btn-primary mb-3">Save</button>
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