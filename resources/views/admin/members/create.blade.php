@extends('layouts.elevate')
@section('content')
    <div class="container-fluid">
        <br>
      <h1>Add new member</h1>
            <form method="POST" action="{{ route('admin.members.store') }}">
            
                @include('admin.members.partials.form',['create'=>true])
            </form>
 
    </div>
@endsection
