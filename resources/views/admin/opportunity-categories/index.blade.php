@extends('layouts.elevate')
@section('content')
<br>
<div class="row">
<div class="col-12">
    <h3 style="float: left; margin:5px;">Opportunity Category Types Setup</h3>
 
    <a style="float: right; margin:5px;" class="btn btn-bg btn-success" href="{{ route('admin.opportunity-categories.create') }}" role="button">+Add Opportunity Category</a>
   
</div>

</div>
<br>
<hr>

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
     @foreach ($opportunityCategories as $opportunityCategory )
     <tr>
        <td scope="row">{{$opportunityCategory->id }}</td>
        <td>{{$opportunityCategory->name }}</td>
        <td>{!! $opportunityCategory->description !!}</td>
        <td>
        <a class="btn btn-bg btn-primary" href="{{ route('admin.opportunity-categories.edit',$opportunityCategory->id) }}" role="button">Edit Opportunity</a>
        <button type="button" class="btn btn-sm btn-danger"
         onclick="event.preventDefault();
         if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
  // Save it!
  document.getElementById('delete-form-{{$opportunityCategory->id}}').submit()
} else {
  // Do nothing!
  console.log('Record Not deleted');
}"> 
        Delete Opportunity
    </button>
        <form id ="delete-form-{{ $opportunityCategory->id }}" action="{{ route('admin.opportunity-categories.destroy',$opportunityCategory->id) }}" method="POST" style="display:none;">
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