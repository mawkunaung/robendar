@extends('backendtemplate');
@section('content')

 	<div class="container">
 		<h1 class="d-inline">Room Table</h1>
        <a href="{{route('rooms.create')}}" class="btn btn-info float-right">Add New</a>
        
 		<div class="row mt-4">                      
           <!--  <div class="card mb-4"> -->
                <!-- <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div> -->
                   <!--  <div class="card-body"> -->
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable"  cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>room_no</th>
                                         <th>roomtype_id</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                        
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($rooms as $row)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$row->room_no}}</td>
                                            <td>{{$row->roomtype->name}}</td>
                                            <!-- roomtype -> relationsgip from room -->
                                            
                                            <td>
                                            <a href="#" class="btn btn-info detail" data-id="{{$row->id}}"><i class="fas fa-info-circle"></i></a>
                                            <a href="{{route('rooms.edit',$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                            <form method="post" action="{{route('rooms.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                     </tbody>
                            </table>
                         <!-- </div>  -->

                    <!-- </div> -->
               	</div>
             </div>

     </div>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Room Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="room_no"></p>
        <p class="roomtype_id"></p>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.detail').click(function(){
                var id=$(this).data('id');
                //alert(id);
                $.get("/rooms/"+id,function(res){
                     console.log(res);
                    $('.room_no').text(res.room_no);
                    $('.roomtype_id').text(res.roomtype.name);
                    
                    $('#detailModal').modal('show');
                })
            })
        })
    </script>
@endsection

