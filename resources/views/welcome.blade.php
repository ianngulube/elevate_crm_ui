@extends('layouts.elevate')
@section('content')
<br>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome to Elevate</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning py-3">
                <div class="container px-5">                  
                    <div class="text-primary text-lg "><img src="{{ asset('img/logo.JPG') }}" width="64%" height="64%" /></div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder"> 
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/onboarding/commercial')}}">Beneficiaries</a> 
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/onboarding/personal')}}">Certificates</a> 
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/register')}}">Request Demo</a> 
                        <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/login')}}">Login</a> 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                            <div class="fs-3 fw-light text-primary">All-in-one Membership Administration Platform </div>
                            <br>                        
                            <div class="text-primary centered-image text-lg "><img src="{{ asset('img/banner5.JPG') }}" width="100%" height="100%" /></div>                               
                            </div>
                        </div>                        
                    </div>
                </div>
            </header>
        </main>

        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <div class="fs-3 fw-light text-warning">All-in-One Software to Grow your Community</div>
                            <hr>
                            <p class="lead mb-0">Automatically store all data for each contact in one place, creating a unified, holistic record for each constituent. Registrations, membership management are automatically recorded on each member record!</p>
                        </div>
                    
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <div class="fs-3 fw-light text-warning">Don't just manage your members, Engage them</div>
                            <hr>
                            <p class="lead mb-0">Process and track contributions, send SMS acknowledgements, and report on your data in an elegant workflow process. You can collect and record contributions made via cash, online and channels and tie them directly to member records.!</p>
                        </div>
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <div class="fs-3 fw-light text-warning">Increase productivity and simplify operations</div>
                            <hr>
                            <p class="lead mb-0">The platform enables your community to share, track, store and organise documents more effectively. In one click you can upload a document, or to share a link to a document in Elevate's document library.!</p>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <br>
        
        <!-- Icons Grid-->
<!-- Header text content-->
<div class="text-center text-xxl-start">
                            <div class="fs-3 fw-light text-warning">KEY BENEFITS FOR YOUR MEMBERS </div>
                            <br>
                            <br>
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-primary centered-image text-lg "><img src="{{ asset('img/funeral.JPG') }}" width="100%" height="100%" /></div>
                        <br>
                            <div class="fs-3 fw-light text-warning">Funeral Cover</div>
                            <hr>
                            <p class="lead mb-0">Automatically store all data for each contact in one place, creating a unified, holistic record for each constituent. Registrations, membership management are automatically recorded on each member record!</p>
                        </div>
                        <br>
                        <a class="btn btn-warning btn-sm px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/login')}}">Get Funeral Cover</a> 
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-primary centered-image text-lg "><img src="{{ asset('img/insurance.JPG') }}" width="100%" height="100%" /></div>
                        <br>        
                
                            <div class="fs-3 fw-light text-warning">Short Term Insurance</div>
                            <hr>
                            <p class="lead mb-0">Process and track contributions, send SMS acknowledgements, and report on your data in an elegant workflow process. You can collect and record contributions made via cash, online and channels and tie them directly to member records.!</p>
                        </div>
                        <br>
                        <a class="btn btn-warning btn-sm px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/login')}}">Get Short Term Insurance</a> 
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="text-primary centered-image text-lg "><img src="{{ asset('img/black.JPG') }}" width="100%" height="100%" /></div>
                        <br>
              
                            <div class="fs-3 fw-light text-warning">Marketing and Growth</div>
                            <hr>
                            <p class="lead mb-0">The platform enables your community to share, track, store and organise documents more effectively. In one click you can upload a document, or to share a link to a document in Elevate's document library.!</p>
                        </div>
                        <br>
                        <a class="btn btn-warning btn-sm px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{url('/login')}}">Merket Your Community</a> 
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<br>

@endsection


