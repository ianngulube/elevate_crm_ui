@extends('layouts.elevate')
@section('content')
<br>
<div class="row">
<div class="col-12">
    <h3 style="float: left; margin:5px;">Opportunity Category Types Setup</h3>
 
    <a style="float: right; margin:5px;" class="btn btn-sm btn-success" href="{{ route('admin.opportunity-sub-categories.create') }}" role="button">+Add</a>
   
</div>

</div>

<hr>
<br>

<div class="card">
<table id="dt" class="table">
    <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Opportunity Category</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
 <tbody>
     @foreach ($opportunitySubCategories as $opportunitySubCategory )
     <tr>
        <td scope="row">{{$opportunitySubCategory->id }}</td>
        <td>{{$opportunitySubCategory->name }}</td>
        <td>{!! $opportunitySubCategory->description !!}</td>
        <td>{{$opportunitySubCategory->category_name}}</td>
        <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.opportunity-sub-categories.edit',$opportunitySubCategory->id) }}" role="button">Edit</a>
        <button type="button" class="btn btn-sm btn-danger"
         onclick="event.preventDefault();
         if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
  // Save it!
  document.getElementById('delete-form-{{$opportunitySubCategory->id}}').submit()
} else {
  // Do nothing!
  console.log('Record Not deleted');
}"> 
        Delete
    </button>
        <form id ="delete-form-{{ $opportunitySubCategory->id }}" action="{{ route('admin.opportunity-sub-categories.destroy',$opportunitySubCategory->id) }}" method="POST" style="display:none;">
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