@extends('layouts.elevate')
@section('content')


<!--Start Dashboard Content-->

                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                                            Dashboard

                                        </h1>
                                        <div class="page-header-subtitle"></div>
                                    </div>
                                    <div class="col-12 col-xl-auto mt-4">
                                        <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body h-100 p-5">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 col-xxl-12">
                                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                                <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle"><p style="color:green">Welcome : {{ Auth::user()->name.' '.Auth::user()->surname  }}</p></div>


                        </div>
                    </div>
                                                    <hr>
                                                    <p class="text-gray-700 mb-0"></p>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="text-primary text-lg "><img src="{{ asset('img/community.JPG') }}" width="100%" height="30%" /></div>
                                            <hr>
                                                                 
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 mb-4">
                                <div class="card card-header-actions h-100">
                                    <div class="card-header">
                                        Membership Definitions
                                    </div>
                                    <div class="card-body">
                                        <div class="timeline timeline-xs">
                                            <!-- Timeline Item 1-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    
                                                    <div class="timeline-item-marker-indicator bg-green"></div>
                                                </div>                                                
                                                <div class="timeline-item-content">
                                                    <div class="text-md fw-bold text-primary">{{  $members}} Total Member Records:</div>
                                                    They regularly participate in events and activities showing consistent involvement and contribution.
                                                </div>
                                                
                                            </div>
                                            <!-- Timeline Item 1-->
                                            <div class="timeline-item">
                                                                                             
                                                <div class="timeline-item-content">
                                                    <div class="text-md fw-bold text-primary">{{ $activeMembers}} Active Members:</div>
                                                    Active members form {{ number_format(($activeMembers / $members) * 100, 2, ',', ' ') }}% of the current membership. 
                                                </div>
                                                <div class="timeline-item-content"> 
                                                    <div class="text-md fw-bold text-primary">{{ $pendingMembers}}  Pending Members:</div>
                                                    There are currently {{ number_format(($pendingMembers / $members) * 100, 2, ',', ' ') }}% of members pending. 
                                                </div>
                                                
                                            </div>
                                            <!-- Timeline Item 2-->
                                            
                                           
                                            <!-- Timeline Item 4-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                        
                                               
                                                </div>
                                                <div class="timeline-item-content">
                                                    <div class="text-md text-primary fw-bold">{{ $suspendedMembers}} Suspended Members</div>
                                                    {{ number_format(($suspendedMembers / $members) * 100, 2, ',', ' ') }}% of members are suspended. 
                                                </div>
                                                <div class="timeline-item-content">
                                                    <div class="text-md text-primary fw-bold">{{ $deactivatedMembers}} Deactivated Members:</div>
                                                    {{ number_format(($deactivatedMembers / $members) * 100, 2, ',', ' ') }}% are currently deactivated. 

                                                </div>
                                            </div>
                                             <!-- Timeline Item 4-->
                                             <div class="timeline-item">
                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 mb-4">
                                <div class="card card-header-actions h-100">
                                    <div class="card-header">
                                        
                                    Contributions Overview (R)
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small">
                                        Total Inflows
                                            <span class="float-end fw-bold">R {{  number_format($contributions, 2, ',', ' ') }}</span>
                                        </h4>
                                        <div class="progress mb-4"><div class="progress-bar bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div></div>
                                        <h4 class="small">
                                        Member Contributions
                                            <span class="float-end fw-bold">R {{ number_format($totContributions, 2, ',', ' ') }}</span>
                                        </h4>
                                        <div class="progress mb-4"><div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div></div>
                                        <h4 class="small">
                                        <div class="timeline-item-content">
                                                    <div class="text-md text-primary fw-bold">{{ $suspendedMembers}} Suspended Members</div>
                                                    {{ number_format(($suspendedMembers / $members) * 100, 2, ',', ' ') }}% of members are suspended. 
                                                </div>

                                     
                                    </div>
                                    <div class="card-footer position-relative">
                                        <div class="d-flex align-items-center justify-content-between small text-body">
                                            <a class="stretched-link text-body" href="{{ route('admin.file-repos.index') }}">Visit Management Center</a>
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Example Colored Cards for Dashboard Demo-->
                        <div class="row">
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Membership</div>
                                                <div class="text-lg">{{ $members }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="users"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('admin.members.index') }}">View Members</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-warning text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Contributions</div>
                                                <div class="text-lg fw-bold">R {{  number_format($contributions, 2, ',', ' ') }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('admin.members.index') }}">View Contributions</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-success text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Tasks</div>
                                                <div class="text-lg fw-bold">{{ $memberTaskss }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="settings"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('admin.member-tasks.index') }}">View Tasks</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 mb-4">
                                <div class="card bg-danger text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 md">Documents</div>
                                                <div class="text-lg fw-bold">{{ $memberDocuments }}</div>
                                            </div>
                                            <i class="feather-xl text-white-50" data-feather="folder"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="{{ route('admin.file-repos.index') }}">View Documents</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Example Charts for Dashboard Demo
                        <div class="row">
                            <div class="col-xl-6 mb-4">
                                <div class="card card-header-actions h-100">
                                    <div class="card-header">
                                        Member Contributions Breakdown 
                                        <div class="dropdown no-caret">
                                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                                                <a class="dropdown-item" href="#!">Last 12 Months</a>
                                                <a class="dropdown-item" href="#!">Last 30 Days</a>
                                                <a class="dropdown-item" href="#!">Last 7 Days</a>
                                                <a class="dropdown-item" href="#!">This Month</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!">Custom Range</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area"><canvas id="myLine" width="200%" height="100"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 mb-4">
                                <div class="card card-header-actions h-100">
                                    <div class="card-header">
                                        New Membership Breakdown
                                        <div class="dropdown no-caret">
                                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                                                <a class="dropdown-item" href="#!">Last 12 Months</a>
                                                <a class="dropdown-item" href="#!">Last 30 Days</a>
                                                <a class="dropdown-item" href="#!">Last 7 Days</a>
                                                <a class="dropdown-item" href="#!">This Month</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!">Custom Range</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-bar"><canvas id="myChart" width="200%" height="100"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                               

                           

 @endsection
