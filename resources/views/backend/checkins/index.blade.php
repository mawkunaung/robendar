@extends('backendtemplate')
@section('content')


<div class="container">
    <h2 class="d-inline">CheckIn Table</h2>
    

    <div class="row">
        <table class="table table-bordered text-center" cellspacing="0" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Room No</th>
                    <th>Customer</th>
                    <th>NRC</th>                                       
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach($checkins as $row)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->room->room_no}}</td>
                    <td>{{$row->booking->user->name}}</td>
                    <td>{{$row->booking->user->nrc_no}}</td>
                    <td>
                        <a href="{{route('checkout',$row->id)}}" class="btn btn-warning"><i class="fas fa-calendar-check"></i></a>
                        <a href="#" class="btn btn-info detail" data-id="{{$row->id}}"><i class="fas fa-info-circle"></i></a>
                        <form method="post" action="{{route('checkins.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline">
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
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">CheckIn Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="room_no"></p>
        <p class="customer"></p>
        

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
                $.get("/checkins/"+id,function(res){
                     console.log(res);
                    $('.room_no').text(res.rooms);
                    $('.customer').text(res.bookings);
                    
                    $('#detailModal').modal('show');
                })
            })
        })
    </script>
@endsection