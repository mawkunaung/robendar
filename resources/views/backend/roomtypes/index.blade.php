@extends('backendtemplate')

@section('content')
<div class="container">
	<h2 class="d-inline">RoomType Table</h2>
	<a href="{{route('roomtypes.create')}}" class="btn btn-info float-right">Add New</a>

	<div class="row">
		<table class="table table-bordered text-center" cellspacing="0" >
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Name</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>

				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($roomtypes as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->price}}</td>
					<td>
						<a href="#" class="btn btn-info detail" data-id="{{$row->id}}"><i class="fas fa-info-circle"></i></a>
						<a href="{{route('roomtypes.edit',$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
						<form method="post" action="{{route('roomtypes.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="detailModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body photo">
				<!-- image from jq -->
			</div>
			<hr>
			<div class="modal-body">
				<h5 class="modal-title" id="priceModalLabel"></h5>
			</div>
			<div class="modal-body service">
				<h5 class="modal-title" id="detailModalLabel"></h5>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.detail').click(function(){
				var id = $(this).data('id');
				
				$.get("/roomtypes/"+id,function(res){
					$('#detailModalLabel').text(res.name);
					var photo = JSON.parse(res[0].photo);
					var html="";
					for (var i = 0; i < photo.length; i++) {
						html+=`<img src="${photo[i]}" class="modal-img mx-1 my-1" width="150px" height="150px">`;
					}
					var service="";
					$.each(res[0].services,function(i,v){
						service += `<h5><img src="${v.logo}" width="20px" height="20px">${v.name}</h5>`;
					});
					$('.service').html(service);
					$('.photo').html(html);
					$('#priceModalLabel').text(res.price);
					
					$('.detailModal').modal('show');
					 })
			})
		})
	</script>
@endsection