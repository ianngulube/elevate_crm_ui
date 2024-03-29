@extends('layouts.elevate')
@section('content')


<!--Start Dashboard Content-->

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="users"></i></div>
                                            Task Management Overview
                                            <a style="float: right; margin:5px;" class="btn btn-md btn-primary text-white" href="{{ route('admin.member-tasks.create') }}" role="button">+Create New Case</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->

<!--Start Dashboard Content-->


<hr>


  <!-- Example Colored Cards for Dashboard Demo-->
  <div class="row">
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Total Tasks</div>
                        <div class="text-lg fw-bold">{{ $totalMemberTasks }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="users"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#">View Tasks</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">New</div>
                        <div class="text-lg fw-bold"> {{ $totalMemberTasksNew }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="alert-triangle"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#">View Tasks</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">In Progress</div>
                        <div class="text-lg fw-bold">{{ $totalMemberTasksInProgress }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="settings"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#">View Tasks</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Closed</div>
                        <div class="text-lg fw-bold">{{ $totalMemberTasksClosed }}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="thumbs-up"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Tasks</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<!-- Example Charts for Dashboard Demo-->




<div class="card">
  <table id="dt" class="table">
    <thead>
        <tr>
            <th scope="col">Task No.</th>
            <th scope="col">Member Name</th>
            <th scope="col">Status</th>
            <th scope="col">Related to</th>
            <th scope="col">Assigned to</th>
            <th scope="col">Channel</th>

            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($memberTasks as $memberTask )
      <tr>
          <td scope="row">{{$memberTask->id }}</td>
          <td>
              <a  href="{{ route('admin.members.show', $memberTask->member->id) }}"
                role="button">{{$memberTask->member->firstname.' '. $memberTask->member->surname }}</a>
           </td>
          <td>{{$memberTask->status }}</td>
          <td>{{$memberTask->type }}</td>
          <td>{!! $memberTask->user->name !!}</td>
          <td>{!! $memberTask->priority !!}</td>

          <td>
            <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#ex{{$memberTask->id }}">
                More..
               </button>

               <!-- Modal -->
               <div class="modal fade" id="ex{{$memberTask->id  }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">


                     </div>
                     <div class="card-body" >
                       <p>  {!! $memberTask->description!!}</p>
                     </div>
                     <div class="modal-footer">

                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                     </div>
                   </div>
                 </div>
               </div>
          <a class="btn btn-md btn-success" href="{{ route('admin.member-tasks.edit',$memberTask->id) }}" role="button">Edit</a>
          <button type="button" class="btn btn-md btn-danger"
          onclick="event.preventDefault();
          if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
    // Save it!
    document.getElementById('delete-form-{{$memberTask->id}}').submit()
    } else {
    // Do nothing!
    console.log('Record Not deleted');
    }">
          Delete
      </button>
          <form id ="delete-form-{{ $memberTask->id }}" action="{{ route('admin.member-tasks.destroy',$memberTask->id) }}" method="POST" style="display:none;">
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
