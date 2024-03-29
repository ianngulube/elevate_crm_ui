@extends('layouts.elevate')
@section('content')
<br>
<div class="row">
<div class="col-12">
    <h1 style="float: left; margin:5px;">Business Units</h1>
 
    <a style="float: right; margin:5px;" class="btn btn-sm btn-success" href="{{ route('admin.business-units.create') }}" role="button">+Add</a>
   
</div>

</div>
<div class="card">
<table id="dt" class="table">
    <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
 <tbody>
     @foreach ($businessUnits as $businessUnit )
     <tr>
        <td scope="row">{{$businessUnit->id }}</td>
        <td>{{$businessUnit->name }}</td>
        <td>{{$businessUnit->description }}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.business-units.edit',$businessUnit->id) }}" role="button">Edit</a>
        <button type="button" class="btn btn-sm btn-danger"
         onclick="event.preventDefault();
         if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
  // Save it!
  document.getElementById('delete-form-{{$businessUnit->id}}').submit()
} else {
  // Do nothing!
  console.log('Record Not deleted');
}"> 
        Delete
    </button>
        <form id ="delete-form-{{ $businessUnit->id }}" action="{{ route('admin.business-units.destroy',$businessUnit->id) }}" method="POST" style="display:none;">
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