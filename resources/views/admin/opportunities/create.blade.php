@extends('layouts.elevate')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Opportunity </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.opportunities.store') }}" enctype="multipart/form-data">
                            @include('admin.opportunities.partials.form',['create'=>true])
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


@endsection
