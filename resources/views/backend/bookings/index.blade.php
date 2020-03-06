@extends('backendtemplate')
@section('content')


<div class="container">
    <h2 class="d-inline">Booking Table</h2>
    <a href="{{route('bookings.create')}}" class="btn btn-info float-right">Add New</a>

    <div class="row">
        <table class="table table-bordered text-center" cellspacing="0" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>checkin_date</th>
                    <th>checkout_date</th>
                    <th>User Name</th>
                    <th>Room Type</th>                                        
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach($bookings as $row)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->checkin_date}}</td>
                    <td>{{$row->checkout_date}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>{{$row->roomtype->name}}</td>
                    <td>
                        <a href="{{route('confirm',$row->id)}}" class="btn btn-warning"><i class="fas fa-calendar-check"></i></a>
                        <a href="{{route('bookings.show',$row->id)}}" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                        <form method="post" action="{{route('bookings.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline">
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
@endsection