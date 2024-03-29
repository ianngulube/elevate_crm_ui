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
                                            Capture Contribution For {{ $member->firstname.' '. $member->surname.' : [ '.$member->membership_number.' ]' }}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg">
                    <div class="card-header">
                       
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.contributions.store') }}">
                            @include('admin.contributions.partials.form',['create'=>true])
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


@endsection
