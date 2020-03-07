@extends('frontendregister');
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
	<div class="container btn-light mt-5">
		@if (session('status'))
			<div class="alert alert-succcess">
				{{session('status')}}
			</div>
		@endif
		<div class="col-md-8 pl-5 offset-4 ">
		<h2 class="d-inline text-center" style="font-size: 50px;">Register Form</h2>
		
		</div>
		<div class="row">			
			<div class="col-md-8 mt-4 pl-5 offset-2 ">
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
					    <input type="number" class="form-control" id="phone" name="phone">
					 </div>

					 <div class="form-group">
					    <label for="address">Address</label>
					    <input type="text" class="form-control" id="address" name="address">
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