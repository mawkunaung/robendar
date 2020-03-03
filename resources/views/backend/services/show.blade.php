<!-- 
@extends('backendtemplate')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<h2>Service Show</h2>
			<a href="{{route('services.index')}}" class="btn btn-info float-right">Back Menu</a>
		</div>

		<div class="offset 3 col-6 offset-3 card mb-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="{{asset($service->logo)}}" class="card-img" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h3 class="card-title"><b>{{$service->name}}</b></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection -->