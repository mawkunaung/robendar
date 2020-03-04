@extends('backendtemplate');
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="container">
		<div class="col-md-8">
		<h2 class="d-inline">User Create Form</h2>
		<a href="{{route('users.index')}}" class="btn btn-info float-right">Back to table</a>
		</div>
		<div class="row">			
			<div class="col-md-8 mt-4 pl-5">
				<form action="{{route('users.store')}}" method="post">
					@csrf
					<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name">
					</div>

					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
					</div>

					<div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" id="password" name="password">
					</div>

					<div class="form-group">
					    <label for="phone">Phone</label>
					    <input type="password" class="form-control" id="phone" name="phone">
					 </div>

					 <div class="form-group">
					    <label for="address">Address</label>
					    <input type="password" class="form-control" id="address" name="address">
					 </div>

					 <div class="form-group">
					    <label for="nrc">NRC</label>
					    <input type="text" class="form-control" id="nrc" name="nrc">
					 </div>

					 <button type="submit" class="btn btn-primary mt-2">Create</button>
				</form>
			</div>
		</div>
	</div>
@endsection