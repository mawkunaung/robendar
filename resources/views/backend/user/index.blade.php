@extends('backendtemplate');
@section('content')

 	<div class="container-fluid">
 		<h1 class="d-inline">User Table</h1>
        <a href="{{route('users.create')}}" class="btn btn-info float-right">Add New</a>
        
 		<div class="row mt-4">                      
          
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                         <th>Email</th>
                                         
                                         <th>Phone</th>
                                         <th>Address</th>
                                         <th>NRC</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                        
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($user as $row)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->email}}</td>
                                            
                                            <td>{{$row->phone}}</td>
                                            <td>{{$row->address}}</td>
                                            <td>{{$row->nrc_no}}</td>
                                            
                                            <td>
                                                <a href="#" class="btn btn-info detail" data-id="{{$row->id}}"><i class="fas fa-info-circle"></i></a>

                                                <a href="{{route('users.edit',$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>

                                            <form action="{{route('users.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are you sure?')" class="d-inline">
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
        <h5 class="modal-title" id="detailModalLabel">User Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="name"></p>
        <p class="email"></p>
        <p class="password"></p>
        <p class="phone"></p>
        <p class="address"></p>
        <p class="nrc_no"></p>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
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
                $.get("/users/"+id,function(res){
                     console.log(res);
                    $('.name').text(res.name);
                    $('.email').text(res.email);
                    $('.password').text(res.password);
                    $('.phone').text(res.phone);
                    $('.address').text(res.address);
                    $('.nrc_no').text(res.nrc_no);
                    
                    $('#detailModal').modal('show');
                })
            })
        })
    </script>
@endsection
