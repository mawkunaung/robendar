@extends('backendtemplate')

@section('content')
<div class="container">
	<h2 class="d-inline-block">Service Table</h2>
	<a href="{{route('services.create')}}" class="btn btn-info float-right">Add New</a>

	<div class="row">
		<table class="table table-dark" border="2px solid white">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Name</th>
					<!-- <th scope="col">Logo</th> -->
					<th scope="col">Action</th>

				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($services as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->name}}</td>
					<!-- <td>{{$row->logo}}</td> -->
					<td>
						<a href="#" class="btn btn-info detail" data-id="{{$row->id}}"><i class="fas fa-info-circle"></i></a>
						<a href="{{route('services.edit',$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
						<form method="post" action="{{route('services.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline">
							@csrf
							@method('DELETE')
							<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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
			<div class="modal-body">
				<img src="" class="modalimg" width="150px" height="150px">
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
				$.get("/services/"+id,function(res){
					$('#detailModalLabel').text(res.name);
					$('.modalimg').attr('src',res.logo);
					$('.detailModal').modal('show');
					})
			})
		})
	</script>
@endsection