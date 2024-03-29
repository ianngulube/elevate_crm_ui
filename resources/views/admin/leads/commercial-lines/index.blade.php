@extends('layouts.elevate')
@section('content')



                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="mic"></i></div>
                                            Member Beneficiaries Admininistration

                                        </h1>
                                        <div class="page-header-subtitle"></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->


    <br>
 
 


    <div class="card mb-4">

        <table id="dt" class="table table-sm">
            <thead>
                <tr>
                <th scope="col">ID</th>
                    <th scope="col">Effective Date</th>
                    <th scope="col">Tenant</th>
                    <th scope="col">Beneficiary 1</th>
                    <th scope="col">Share (%)</th>
                    <th scope="col">Beneficiary 2</th>
                    <th scope="col">Share (%)</th>
                    <th scope="col">Beneficiary 3</th>
                    <th scope="col">Share (%)</th>
                    <th scope="col">Beneficiary 4</th>
                    <th scope="col">Share (%)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $m)
                    <tr>
                    <td>{{ $m->id }}</td>
                        <td>{{ $m->effective_date_appointment }}</td>
                        <td>{{ $m->tenant_id }}</td>
                        <td>{{ $m->name_of_stokfela }}</td>
                        <td>{{ $m->name_of_business }}</td>
                        <td>{{ $m->registration_number }}</td>
                        <td >{{$m->vat_no}}</td>
                        <td>{{ $m->contact_person }}</td>
                        <td>{{ $m->name_of_signatory }}</td>
                        <td>{{ $m->contact_number }}</td>
                        <td>{{ $m->current_insurance }}</td>




                        <td>
                            <div class="btn-group">
                                <a class="zmdi zmdi-account btn btn-md btn-primary text-white" href="{{ route('admin.pdfgen', ['id'=>$m->id,'type'=>'c'] ) }}"
                                    role="button">View Document</a>
                                </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
</div>


    @endsection
