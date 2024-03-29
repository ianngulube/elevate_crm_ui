@extends('layouts.elevate')
@section('content')
    <div class="container-fluid">
        <br>
      <h1>Apply for membership</h1>
            <form method="POST" action="{{ route('user.members.store') }}">
            
                @include('user.members.partials.form',['create'=>true])
            </form>
 
    </div>
@endsection
