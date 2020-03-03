@extends('backendtemplate')

@section('content')
<div class="container">
	<h2 class="d-inline-block">RoomType Table</h2>
	<a href="{{route('roomtypes.create')}}" class="btn btn-info float-right">Add New</a>

	<div class="row">
		<table class="table table-dark" border="2px solid white">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Name</th>
					<th scope="col">Action</th>

				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($roomtypes as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->name}}</td>
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
				<h5 class="modal-title" id="detailModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body photo">
				
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
				//alert(id);
				//ajex method $.get()
				$.get("/roomtypes/"+id,function(res){
					console.log(res);
					$('#detailModalLabel').text(res.name);
					var photo = JSON.parse(res.photo);
					//console.log(photo.length);
					var html="";
					for (var i = 0; i < photo.length; i++) {
						html+=`<img src="${photo[i]}" class="modal-img" width="150px" height="150px">`;
					}
					$('.photo').html(html);
					$('.detailModal').modal('show');
					})
			})
		})
	</script>
@endsection