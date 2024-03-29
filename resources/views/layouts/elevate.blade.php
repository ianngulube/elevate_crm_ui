<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ElevateCRM</title>      
         <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.JPG') }}" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>


    <body class="nav-fixed">
		@auth
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">MAIN MENU</a>
            <div class="text-primary text-lg "><img src="{{ asset('img/logo.JPG	') }}" width="40%" height="30%" /></div>
            
            <!-- Navbar Items-->
            <ul class="navbar-nav align-items-center ms-auto">
                <!-- Documentation Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-md-block me-3">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="fw-500">Quick Links!</div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0 me-sm-n15 me-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3" href="{{ route('admin.members.index') }}" target="{{ route('admin.members.index') }}">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book"></i></div>
                            <div>
                                <div class="small text-gray-500">Member Administration</div>
                                Usage instructions and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="code"></i></div>
                            <div>
                                <div class="small text-gray-500">Components</div>
                                Code snippets and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
                            <div>
                                <div class="small text-gray-500">Changelog</div>
                                Updates and changes
                            </div>
                        </a>
                    </div>
                </li>
                <!-- Navbar Search Dropdown-->
                <!-- * * Note: * * Visible only below the lg breakpoint-->
                <li class="nav-item dropdown no-caret me-3 d-lg-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                    <!-- Dropdown - Search-->
                    <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                        <form class="form-inline me-auto w-100">
                            <div class="input-group input-group-joined input-group-solid">
                                <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-text"><i data-feather="search"></i></div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Alerts Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="bell"></i>
                            Alerts Center
                        </h6>
                        <!-- Example Alert 1-->
                        <a class="dropdown-item dropdown-notifications-item" href="{{ route('admin.members.index') }}">
                            <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">Member Admin</div>
                                <div class="dropdown-notifications-item-content-text">Support</div>
                            </div>
                        </a>
                        <!-- Example Alert 2-->
                        <a class="dropdown-item dropdown-notifications-item" href="{{ route('admin.member-tasks.index') }}">
                            <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">Tasks</div>
                                <div class="dropdown-notifications-item-content-text">Support</div>
                            </div>
                        </a>
                        <!-- Example Alert 3-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">Email</div>
                                <div class="dropdown-notifications-item-content-text">Support</div>
                            </div>
                        </a>
                        <!-- Example Alert 4-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">Tasks</div>
                                <div class="dropdown-notifications-item-content-text">Support</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                    </div>
                </li>
                <!-- Messages Dropdown-->
                <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="me-2" data-feather="mail"></i>
                            Message Center
                        </h6>
                        <!-- Example Message 1  -->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-2.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Thomas Wilcox · 58m</div>
                            </div>
                        </a>
                        <!-- Example Message 2-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-3.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Emily Fowler · 2d</div>
                            </div>
                        </a>
                        <!-- Example Message 3-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="assets/img/illustrations/profiles/profile-4.png" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Marshall Rosencrantz · 3d</div>
                            </div>
                        </a>
                        <!-- Example Message 4-->
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="{{ asset('assets/img/illustrations/profiles/profile-5.png') }}" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Colby Newton · 3d</div>
                            </div>
                        </a>
                        <!-- Footer Link-->
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                    </div>
                </li>
                <!-- User Dropdown-->
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{  asset('img/logo.JPG') }}" /></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="{{ asset('img/logo.JPG') }}"  />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                                <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
								@csrf
								<a class="dropdown-item" href="#!">
									<div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
								<button class="dropdown-item" type="submit">{{__('Logout') }}
								</button>
							</a>
						</div>
							</form>

                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <!-- Sidenav Menu Heading (Account)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <div class="sidenav-menu-heading d-sm-none">Account</div>
                            <!-- Sidenav Link (Alerts)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                Alerts
                                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                            </a>
                            <!-- Sidenav Link (Messages)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                            </a>
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Core</div>
                            <hr>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link collapsed" href="{{route('user.dashboard')}}"  >
                                <div class="nav-link-icon"><i data-feather="home"></i></div>
                                Dashboard
                            </a>
                            <hr>
                            <a class="nav-link collapsed" href="{{ route('admin.members.index') }}"  >
                                <div class="nav-link-icon"><i data-feather="user"></i></div>
                                View Members

                            </a>
                            <hr>
                            <a class="nav-link collapsed" href="{{ route('admin.member-tasks.index') }}"  >
                                <div class="nav-link-icon"><i data-feather="settings"></i></div>
                                View Tasks

                            </a>
                            <hr>
                            <a class="nav-link collapsed" href="{{ route('admin.commercial-leads.index') }}"  >
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                View Leads

                            </a>
                            <hr>
                            <a class="nav-link collapsed" href="{{ route('admin.personal-leads.index') }}"  >
                                <div class="nav-link-icon"><i data-feather="file"></i></div>
                                View Certificates

                            </a>
                            <hr>

                            <!-- Sidenav Heading (App Views)-->
                            <!-- Sidenav Heading (Addons)
                            <div class="sidenav-menu-heading">SYSTEM FEATURES</div>

                            <!-- Sidenav Accordion (Pages)
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePagesPricing" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="user"></i></div>
                                Contact Management
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesPricing" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">

                                    <a class="nav-link" href="{{ route('admin.members.index') }}">View Members</a>
                                    <a class="nav-link" href="{{ route('admin.members.create') }}">Create Member</a>
                                    <a class="nav-link" href="{{ route('admin.member-tasks.index') }}">View Cases</a>
                                    <a class="nav-link" href="{{ route('admin.member-tasks.create') }}">Create Case</a>
                                    
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePagesPricing1" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="users"></i></div>
                                Leads Management
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesPricing1" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">

                                    <a class="nav-link" href="{{ route('admin.commercial-leads.index') }}">View Leads</a>
                                    
                                    
                                    
                                </nav>
                            </div>
                            -->
                            <!-- Sidenav Accordion (Flows)
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                                <div class="nav-link-icon"><i data-feather="mic"></i></div>
                                Communication
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('admin.sms.index') }}">SMS</a>
                                   
                                      <a class="nav-link" href="{{ route('admin.opportunities.index') }}">Community</a>
                                </nav>
                            </div>
                            -->
                                                        <!-- Sidenav Accordion (Queues)-->
                            <!-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows2" aria-expanded="false" aria-controls="collapseFlows2">
                                <div class="nav-link-icon"><i data-feather="edit"></i></div>
                                Queues
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFlows2" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">SMS Requests</a>
                                      <a class="nav-link" href="#">Online Requests</a>
                                      <a class="nav-link" href="#">Email Requests</a>
                                </nav>
                            </div> -->

                            <!-- Sidenav Heading (UI Toolkit)
 <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseManagement" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="file"></i></div>
                                Trust Management
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseManagement" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">

                                    <a class="nav-link" href="{{ route('admin.file-repos.index') }}">Documents</a>
                                    <a class="nav-link" href="{{ route('admin.personal-leads.index') }}">Certificates</a>

                                </nav>
                            </div>
                        -->
                            <!-- Sidenav Accordion (Components)-->

                            <!-- Sidenav Accordion (Utilities)-->

                            <!-- Sidenav Heading (Addons)
                            <div class="sidenav-menu-heading">SYSTEM ADMIN</div>
                            -->
                            <!-- Sidenav Link (Charts)
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="settings"></i></div>
                                Settings
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">

                                    <a class="nav-link" href="{{ route('admin.users.index') }}">Users</a>
                                    <a class="nav-link" href="{{ route('admin.roles.index') }}">Roles</a>
                                    <a class="nav-link" href="{{ route('admin.opportunity-categories.index') }}">Opportunity Categories</a>
                                     <a class="nav-link" href="{{ route('admin.opportunity-sub-categories.index') }}">Opportunity Sub Categories</a>
                                </nav>
                            </div>
                        </div>
                    </div>

-->
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle"><p style="color:green">Logged as User:</p></div>
                            <div class="sidenav-footer-title">{{ Auth::user()->name.' '.Auth::user()->surname  }}</div>
                        </div>
                    </div>
                </nav>
            </div>
            
			@endauth
            <div id="layoutSidenav_content">
                <main>
					@include('partials.alerts')
                    @yield('content')
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Elevate CRM {{ date('Y') }}</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables/datatables-simple-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js') }}" crossorigin="anonymous"></script>


        <script>
            // setup
            var memberStats = {!! json_encode($memberStats) !!}
            var totalContribution = {!! json_encode($totalContribution) !!}
            const data = {
            labels: memberStats.Mo,
            datasets: [{
            label: 'Monthly Member Records',
            label: "Members",
            backgroundColor: "rgba(0, 97, 242, 1)",
            hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
            borderColor: "#4e73df",
            data: memberStats.No,
            maxBarThickness: 25
              }]
            };

            const dataOther = {
            labels: totalContribution.Mo,
            datasets: [{
            label: 'Monthly Total Contributions',
            label: "Contributions",
            backgroundColor: "rgba(0, 97, 242, 1)",
            hoverBackgroundColor: "rgba(0, 97, 242, 0.9)",
            borderColor: "#4e73df",
            data: totalContribution.No,
            maxBarThickness: 25
              }]
            };
            // config
            const memberStatsConfig = {
              type: 'bar',
              data:data,
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  },
                  yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        min: 0,
                        max: Math.max.apply(null, memberStats.No)
                    }
                  }]
                }
              }
            };

            const contributionsConfig = {
              type: 'line',
              data:dataOther,
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  },
                  yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        min: 0,
                        max: Math.max.apply(null, totalContribution.No)
                    }
                  }]

                }
              }
            };

            // render init block
            const myChart = new Chart(
              document.getElementById('myChart'),
              memberStatsConfig
            );

            const myLine = new Chart(
              document.getElementById('myLine'),
              contributionsConfig
            );
            </script>



      <script type="text/javascript">
        $("#opportunityCategory").change(function(){
            $.ajax({
                url: "{{ url('/getSubCategoriesByCategoryID/')}}" + "/"+$(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#opportunity_sub_category_id').html(data.html);
                }
            });
        });
    </script>
<script type="text/javascript">
var statuses = [];
var memberCount;

$.get("/getMemberData", function(data){
  var data2  =  $.parseJSON(data);

 memberCount =[];

  for (var i in data2) {

    memberCount.push(data2[i].number_count);
    statuses.push(data2[i].status);

  }
 console.log(statuses);
 console.log(memberCount);

 var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:statuses,
        datasets: [{
            label: 'Membership by Status',
            data:memberCount,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontColor: 'white'
                },
                gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
            }],
            xAxes: [{
                    ticks: {
                        fontColor: "white",
                        fontSize: 14,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }]
        }
    }
});

});


console.log(statuses);
 console.log(memberCount);


</script>

<script type="text/javascript">
    var categories = [];
    var cnts =[];

    $.get("/getMemberDataCategory", function(data){
      var countByCategoryData  =  $.parseJSON(data);

     cnts =[];

      for (var i in countByCategoryData) {

        cnts.push(countByCategoryData[i].cnt);
        categories.push(countByCategoryData[i].category);

      }
     console.log(cnts);
     console.log(categories);

     var ctx2 = document.getElementById('myChart2').getContext('2d');

    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels:categories,
            datasets: [{
                label: 'Membership by Category',
                data:cnts,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontColor: 'white'
                },
                gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
            }],
            xAxes: [{
                    ticks: {
                        fontColor: "white",
                        fontSize: 14,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    });


    console.log(statuses);
     console.log(memberCount);


    </script>


    <script>
        CKEDITOR.replace( 'description' );
</script>

<script type="text/javascript">
    var provinces = [];
    var  cntProvince;

    $.get("/getMemberDatabyProvince", function(data){
      var countByProvince  =  $.parseJSON(data);

      cntProvince =[];

      for (var i in countByProvince) {

        cntProvince.push(countByProvince[i].cntProvince);
        provinces.push(countByProvince[i].province);

      }
     console.log(cnts);
     console.log(categories);

     var ctx3 = document.getElementById('myChart3').getContext('2d');

    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels:provinces,
            datasets: [{
                label: 'Membership by Location',
                data:cntProvince,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                ticks: {
                    beginAtZero: true,
                    fontColor: 'white'
                },
                gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
            }],
            xAxes: [{
                    ticks: {
                        fontColor: "white",
                        fontSize: 14,
                        stepSize: 1,
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    });


    console.log(statuses);
     console.log(memberCount);


    </script>


    <script>
        CKEDITOR.replace( 'description' );
</script>


    <script>
        $(document).ready(function() {
            $('#dtUsers').DataTable();
        });
        $(document).ready(function() {
            $('#dt').DataTable();
        });
        $(document).ready(function() {
            $('#dt2').DataTable();
        });
        $(document).ready(function() {
            $('#dt3').DataTable();
        });
        $(document).ready(function() {
            $('#dtBeneficiaries').DataTable();
        });
        $(document).ready(function() {
            $('#dtBanking').DataTable();
        });

        $(document).ready(function() {
            $('#dtCashflows').DataTable();
        });






    </script>

    <script>
        $(document).ready(function(){
      $('.alert-success').fadeIn().delay(5000).fadeOut();
        });

        $(document).ready(function(){
      $('.alert-danger').fadeIn().delay(5000).fadeOut();
        });
    </script>

<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        $("myDropdown").submit(function(e){
        e.preventDefault();
    });
      document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
    </script>
      <script>
        $("#textMessage").keyup(function(){
      $("#count").text("Characters left: " + (161 - $(this).val().length));
    });
    </script>
    </body>
</html>
