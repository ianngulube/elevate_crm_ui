@extends('layouts.elevate')
@section('content')
    <div class="container-fluid">
      
            <form method="POST" action="{{ route('admin.members.update', $member->id) }}">
                @method('PATCH')
                @include('admin.members.partials.form',['create'=>false])
            </form>
 
    </div>
@endsection
