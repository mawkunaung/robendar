@extends('backendtemplate');
@section('content')

<div class="container-fluid">
 <h1 class="d-inline">CheckIn Table</h1>

 <div class="row mt-4">                      

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable"  cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>room_id</th>
                    <th>booking_id</th>
                    <th>status</th>

                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @php $i=1; @endphp



            </tbody>
        </table>
        <!-- </div>  -->

        <!-- </div> -->
    </div>
</div>

</div>
@endsection