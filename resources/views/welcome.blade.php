@extends('layouts.elevate')
@section('content')
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

          <div class="card-body"> 
            <ul class="list-unstyled mt-4 mb-4">
              <div class="text-primary text-lg "><img src="{{ asset('img/banner.JPG') }}" width="100%" height="100%" /></div>
            </ul>

            <a href="{{url('/login')}}" class="w-100 btn btn-lg btn-warning text-danger">LOG IN TO ELEVATE CRM</a>
          </div>
        </div>
        <!--
        <div class="col">
          <div class="card border-primary mb-4 text-dark">
          <div class="card-header">
            <h5 class="my-0 fw-normal">MEMBER PORTAL</h5>
          </div>
          <div class="card-body">
           
            <ul class="list-unstyled mt-4 mb-4">
              <div class="text-primary text-lg "><img src="{{ asset('img/insimu_logo.jpg') }}" width="50%" height="50%" /></div>
            </ul>
            <hr>
            <a href="{{url('/login')}}" class="w-100 btn btn-lg btn-secondary text-white">Recruiter Login</a>
          </div>
        </div>
      
        </div>
      </div>
        
  </div
  
@endsection
