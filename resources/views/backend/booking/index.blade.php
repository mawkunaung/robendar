@extends('backendtemplate');
@section('content')

 	<div class="container-fluid">
 		<h1 class="d-inline">Booking Table</h1>
        
 		<div class="row mt-4">                      
          
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>user_id</th>
                                         <th>room_id</th>
                                         <th>checkin_date</th>
                                         <th>checkout_date</th>
                                         <th>message</th>                                         
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