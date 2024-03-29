@extends('layouts.elevate')
@section('content')
<br/>

<div class="row">
  <div class="col-12">
      <h3 style="float: left; margin:5px;">Welcome to Community</h3>
      <br/>
      <a style="float: right; margin:5px;" class="btn btn-md btn-success" href="{{ route('admin.opportunities.create') }}" role="button">+Add new advert</a>
  </div>
</div>

<hr>

<div class ="row col-lg-12">
  <div class="row col-lg-4">
    <canvas id="myChart" height="350" ></canvas>
  </div>
  <div class="row col-lg-4">
    <canvas id="myChart2"  height="350"></canvas>
  </div>
  <div class="row col-lg-4">
    <canvas id="myChart3"  height="350"></canvas>
  </div>
</div>

<hr>
<br>

<div class="row col-12">
@foreach ($categories as $category)

  <div class="row col-4">
    <div class="card">
    
      <div class="card-body">
        <h5 class="card-title">{{ $category->name }}</h5>
        <p class="card-text">{!!$category->description!!}</p>
        <p><a class="btn btn-bg btn-success" href="{{ url('comunity')}}"> View Opportunities In Category</a></p>
      </div>
    </div>
  </div>
@endforeach
</div>

    @endsection
