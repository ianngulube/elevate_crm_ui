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
                                            Membership Admininistration
                                        </h1>
                                      
                                    </div>

                                   
                                
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->


    <br>


    <br>
  <div class="row">
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Total Deactivated</div>
                                                <div class="text-lg fw-bold">{{ $totalMembersDeactivated }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="user-check"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">Members</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-success text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Total  Active</div>
                                                <div class="text-lg fw-bold">{{ $totalMembersActive }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="user-plus"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">Members</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-warning text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Total  Pending</div>
                                                <div class="text-lg fw-bold">{{ $totalMembersPending }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="user-minus"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">Members</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-danger text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Total Suspended</div>
                                                <div class="text-lg fw-bold">{{ $totalMembersSuspended }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="user-x"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="#!">Members</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                     

    <div class="card mb-4">

        <table id="dt" class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mem No.</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Group Name</th>
                    <th scope="col">Contact</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td scope="row">{{  $m->membership_number}}</td>
                        <td>{{ $m->firstname }}</td>
                        <td>{{ $m->surname }}</td>
                        <td>{{ $m->website }}</td>
                        <td>{{ $m->home_number }}</td>

                        <td>
                            <div class="btn-group">
                                <a class="zmdi zmdi-account btn btn-md btn-primary text-white" href="{{ route('admin.members.show', $m->id) }}"
                                    role="button">View</a>
                                <a class="zmdi zmdi-edit btn btn-md btn-info text-dark " href="{{ route('admin.members.edit', $m->id) }}"
                                    role="button">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger text-white" onclick="event.preventDefault();
                 if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
          // Save it!
          document.getElementById('delete-form-{{ $m->id }}').submit()
        } else {
          // Do nothing!
          console.log('Record Not deleted');
        }">
                                    Delete
                                </button>
                            </div>
                             <!-- Main page content-->
                            <form id="delete-form-{{ $m->id }}"
                                action="{{ route('admin.members.destroy', $m->id) }}" method="POST"
                                style="display:none;">
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
