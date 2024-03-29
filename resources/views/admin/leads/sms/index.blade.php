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
                                            SMS notifications
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->

    <br>

<hr>
    <br>
 
 


    <div class="card m-2">

        <table id="dt" class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>

                    <th scope="col">MSISDN</th>
                    <th scope="col">Message ID</th>

                    
                    <th scope="col">Sent Time</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($smses as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                      
                        <td>{{ $m->msisdn }}</td>
                        <td >{{  $m->message_id}}</td>

                      
                        <td>{{ $m->created_at }}</td>
                      




                       
                    </tr>
                @endforeach

            </tbody>
        </table>
</div>


    @endsection
