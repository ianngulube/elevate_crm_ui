@extends('layouts.elevate')
@section('content')

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="users"></i></div>
                                            Member Statements
                                        </h1>
                                      
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
                <th scope="col">#</th>
                    <th scope="col">Effective Date</th>
                    <th scope="col">Fullnames</th>
                    
                    <th scope="col">Member no.</th>
                   
                    <th scope="col">Contributions</th>
                    <th scope="col">Prop Name</th> 
                    <th scope="col">Prop Value</th>   
                 
          
 
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $m)
                    <tr>
                    <td>{{ $m->id }}</td>
                        <td>{{ $m->effective_date_appointment }}</td>
                        <td>{{ $m->contact_person_1 }}</td>
                  
                        <td >{{  $m->current_insurance}}</td>
                       
                        <td >{{  $m->total_contributions}}</td>
                        <td>{{ $m->property_name }}</td>  
                        <td>{{ $m->property_value }}</td> 
                  
                             
        
                        <td>
                            <div class="btn-group">
                                <a class="zmdi zmdi-account btn btn-md btn-primary text-white" href="{{ route('admin.pdfgen', ['id'=>$m->id,'type'=>'p']) }}"
                                    role="button">View Statement</a>
                                </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
</div>


    @endsection
