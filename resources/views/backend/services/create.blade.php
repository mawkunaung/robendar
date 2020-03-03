
@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="row">
		<form action="{{route('services.store')}}" method="post" class="col-8 bg-dark text-white" enctype="multipart/form-data"> <!-- store with Route -->
			<h2>Service Create Form</h2>
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
				<label for="logo">Logo</label>
				<input type="file" class="form-control-file @error('logo') is-invalid @enderror" id="logo" name="logo" value="{{isset($user)? $user->logo : ''}}">
				@error('logo')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary mb-3">Save</button>
		</form>
	</div>
</div>


@endsection