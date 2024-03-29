@extends('layouts.elevate')
@section('content')
<br/>

<div class="row">
<div class="col-12">
    <h3 style="float: left; margin:5px;">Welcome to Settings / Admin Console</h3>
    <br/> 
</div>



</div>
<hr>

<div class="row col-12">
 

  <div class="row col-3">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Users</h5>
        <p class="card-text">User Management</p>
        <p><a class="btn btn-warning text-dark" href="{{ route('admin.users.index')}}"> Manage Users</a></p>
      </div>
    </div>
  </div>

  <div class="row col-3">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Roles</h5>
        <p class="card-text">Role Management</p>
        <p><a class="btn btn-warning text-dark" href="{{ route('admin.roles.index')}}"> Manage Roles</a></p>
      </div>
    </div>
  </div>

  <div class="row col-3">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Category Management</p>
        <p><a class="btn btn-warning text-dark" href="{{ route('admin.opportunity-categories.index')}}"> Manage Categories</a></p>
      </div>
    </div>
  </div>

  <div class="row col-3">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">Sub Category</h5>
        <p class="card-text">Sub Category</p>
        <p><a class="btn btn-warning text-dark" href="{{ route('admin.opportunity-sub-categories.index')}}"> Manage Sub categories</a></p>
      </div>
    </div>
  </div>

 
</div>

    @endsection
