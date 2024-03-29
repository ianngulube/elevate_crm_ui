@extends('layouts.elevate')
@section('content')
<br>
<div class="row">
<div class="col-12">
    <h4 style="float: left; margin:5px;">Available Opportunities</h4>
    <br/>

    <a style="float: right; margin:5px;" class="btn btn-bg btn-primary text-white" href="{{ route('admin.opportunities.create') }}" role="button">+Post Opportunity</a>
</div>
</div>

<hr>

 <!-- Example Colored Cards for Dashboard Demo-->
 <div class="row">
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Total Opportunities</div>
                        <div class="text-lg fw-bold">3</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="globe"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Opportunities</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Services Needed</div>
                        <div class="text-lg fw-bold">2</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="arrow-up-circle"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Opportunities</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Services Available</div>
                        <div class="text-lg fw-bold">1</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="arrow-up-circle"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Opportunities</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Expired Opportunities</div>
                        <div class="text-lg fw-bold">0</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="trash-2"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Opportunities</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<!-- Example Charts for Dashboard Demo-->
<hr>

<div class="card">
<table id="dt" class="table">
    <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            <th scope="col">User</th>
            <th scope="col">Sub Cat ID</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
 <tbody>
     @foreach ($opportunities as $opportunity )
     <tr>
        <td scope="row">{{$opportunity->id }}</td>
        <td>{!! $opportunity->description !!}</td>
        <td>{{$opportunity->type }}</td>
        <td>{{$opportunity->user_id }}</td>
        <td>{{$opportunity->opportunity_sub_category_id }}</td>
        <td>{{$opportunity->start_date }}</td>
        <td>{{$opportunity->end_date }}</td>
        <td>
            <a class ="btn btn-primary btn-bg text-white" href="{{ asset('opportunities/'.$opportunity->imageUrl)}}" target="_blank"> View Advert</a>
        <button type="button" class="btn btn-sm btn-danger"
         onclick="event.preventDefault();
         if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
  // Save it!
  document.getElementById('delete-form-{{$opportunity->id}}').submit()
} else {
  // Do nothing!
  console.log('Record Not deleted');
}">
        Get it Touch
    </button>
        <form id ="delete-form-{{ $opportunity->id }}" action="{{ route('admin.opportunities.destroy',$opportunity->id) }}" method="POST" style="display:none;">
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
