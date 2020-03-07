@extends('frontendtemplate')
@section('content')  

<div class="container-fluid my-3">
  <div class="row">
  <div class="col-md-4 offset-4 card shadow" style="background-color: #FAD7E5;">
      
      <div class="row">
        <div class="col-12 my-5">
          <h2>User Detail</h2>
          <h5 class="mx-4 my-3">Name:   {{$users->name}}</h5>
          <h5 class="mx-4 my-3">Email:  {{$users->email}}</h5>
          <h5 class="mx-4 my-3">Phone:  {{users->phone}}</h5>
          <h5 class="mx-4 my-3">NRC:    {{$users->nrc}}</h5>
          <h5 class="mx-4 my-3">Address:{{users->address}}</h5>
          
        </div>
      </div>
    </div>    
  </div>
</div>
@endsection