@extends('layouts.elevate')
@section('content')
<style>
.modal-body p {
    word-wrap: break-word;
}

</style>
<br>
<div class="row">
<div class="col-12">
    <h3 style="float: left; margin:5px;">Outbound SMS Campaigns</h3>


</div>

</div>
<hr>
<br>
   <!-- Example Colored Cards for Dashboard Demo-->
   <div class="row">
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Campaign Total</div>
                        <div class="text-lg fw-bold">183</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="users"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Delivered</div>
                        <div class="text-lg fw-bold">175</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="thumbs-up"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 md">Failed</div>
                        <div class="text-lg fw-bold">5</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="thumbs-down"></i>
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
                        <div class="text-white-75 md">Sent</div>
                        <div class="text-lg fw-bold">3</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="alert-triangle"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
<!-- Example Charts for Dashboard Demo-->
<div class="card">
<table id="dt" class="table">
    <thead>
        <tr>

            <th scope="row">Name</th>
            <th scope="row">SMS ID</th>
            <th scope="row">MSISDN</th>
            <th scope="row">Date Sent</th>
            <th scope="row">Satus</th>
            <th scope="row">Direcction</th>
            <th scope="row"> Actions</th>


        </tr>
    </thead>
 <tbody>
     @foreach ($cs as $c )
     <tr>
        <td scope="row">{{$c->campaign }}</td>
        <td scope="row">{{$c->messageId }}</td>
        <td scope="row">{{$c->toNumber }}</td>
        <td scope="row">{{date_format(date_create($c->dateTimeSent),"d/m/Y H:i:s") }}</td>
        <td scope="row">{{$c->messageStatus }}</td>
        <td scope="row">{{$c->messageType }}</td>
        <td scope="row"><!-- Button trigger modal -->
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#ex{{$c->messageId }}">
   View More
  </button>

  <!-- Modal -->
  <div class="modal fade" id="ex{{$c->messageId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">


        </div>
        <div class="card-body" >
          <p>  {{$c->message }}</p>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


  <!-- delete here   -->

</td>



    </tr>
     @endforeach

 </tbody>
</table>
</div>
@endsection
