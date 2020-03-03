
@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="row">
		<form action="{{route('services.update',$service->id)}}" method="post" class="col-8 bg-dark text-white" enctype="multipart/form-data"> <!-- store with Route -->
			<h2>Service Create Form</h2>
			@csrf<!--  for from save -->
			@method('PUT')
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
					<img src="{{asset($service->logo)}}" class="img-fluid" width="100" height="100">
					<input type="hidden" name="oldlogo" value="{{$service->logo}}">
				</div>
				<div class="tab-pane fade show" id="new">
					<input type="file" name="logo" class="form-control-file">
				</div>
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" name="name" value="{{$service->name}}{{ isset($user) ? $user->name : '' }}">
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary mb-3">Update</button>
		</form>
	</div>
</div>


@endsection