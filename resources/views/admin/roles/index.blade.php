@extends('layouts.elevate')
@section('content')
<br>
<div class="row">
<div class="col-12">
    <h3 style="float: left; margin:5px;">User Roles Management</h3>
 
    <a style="float: right; margin:5px;" class="btn btn-bg btn-success" href="{{ route('admin.roles.create') }}" role="button">+Add User Role</a>
   
</div>

</div>
<hr>
<div class="card">
<table id="dt" class="table">
    <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>          
            <th scope="col">Actions</th>
        </tr>
    </thead>
 <tbody>
     @foreach ($roles as $role )
     <tr>
        <td scope="row">{{$role->id }}</td>
        <td>{{$role->name }}</td>
      
        <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.roles.edit',$role->id) }}" role="button">Edit</a>
        <button type="button" class="btn btn-sm btn-danger"
         onclick="event.preventDefault();
         if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
  // Save it!
  document.getElementById('delete-form-{{$role->id}}').submit()
} else {
  // Do nothing!
  console.log('Record Not deleted');
}"> 
        Delete
    </button>
        <form id ="delete-form-{{ $role->id }}" action="{{ route('admin.roles.destroy',$role->id) }}" method="POST" style="display:none;">
            @csrf
            @method('DELETE')

        </form>
    </td>
    </tr>
     @endforeach
    
 </tbody>
</table>
</div>
@endsection