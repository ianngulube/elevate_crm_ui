@extends('layouts.elevate')
@section('content')
    <div class="container-fluid">
      
            <form method="POST" action="{{ route('user.members.update', $member->id) }}">
                @method('PATCH')
                @include('user.members.partials.form',['create'=>false])
            </form>
 
    </div>
@endsection
