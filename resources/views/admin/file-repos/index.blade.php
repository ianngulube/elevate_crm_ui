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
                                            Group Document Admininistration
                                            <a style="float: right; margin:5px;" class="btn btn-md btn-primary text-white" href="{{ route('admin.file-repos.create') }}"
                role="button">+Upload New Document</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->

    <br>
    

    <hr>



    <!-- Example Colored Cards for Dashboard Demo-->
    <div class="row">
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 md">Memoranda</div>
                            <div class="text-lg fw-bold">0</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="folder"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#!">View Report</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-warning text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 md">Business Letters</div>
                            <div class="text-lg fw-bold">2</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="file-text"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#!">View Reports</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 md">Business Reports</div>
                            <div class="text-lg fw-bold">0</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="bar-chart-2"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#!">View Reports</a>
                    <div class="text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 mb-4">
            <div class="card bg-danger text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 md">Financial Reports</div>
                            <div class="text-lg fw-bold">1</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between small">
                    <a class="text-white stretched-link" href="#!">View Reports</a>
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
                    <th scope="col">Document ID</th>
                    <th scope="col">Document Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date Uploaded </th>
                    <th scope="col">Uploaded By</th>
                 

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!--    'type',
        'fileUrl',
        'description',
        'user_id'     -->
                @foreach ($files as $document)
                    <tr>
                        <td scope="row">{{  $document->id}}</td>
                        <td>{{ $document->type }}</td>
                        <td>{!! $document->description !!}</td>
                        <td>{{ $document->created_at }}</td>
                        <td>{{ $document->user->name }}</td>
                  
                        
                        <td>
                            <div class="btn-group">
                                <td><a class="btn btn-primary btn-md text-white"href="{{ asset('repository/'.$document->fileUrl)}}" target="_blank"> View</a>

                                <button type="button" class="btn btn-md btn-danger" onclick="event.preventDefault();
                 if (confirm('Are you sure you want to delete  this record from the system? Click  OK to  confirm or  cancel if you want to cancel delete  action.  to , NB This  is  not reversable.')) {
          // Save it!
          document.getElementById('delete-form-{{ $document->id }}').submit()
        } else {
          // Do nothing!
          console.log('Record Not deleted');
        }">
                                    Delete
                                </button>
                            </div>
                            <form id="delete-form-{{ $document->id }}"
                                action="{{ route('admin.members.destroy', $document->id) }}" method="POST"
                                style="display:none;">
                                @csrf
                                @method('DELETE')

                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>


@endsection
