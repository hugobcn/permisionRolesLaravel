views/admin/users


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   @if($users)
                   @foreach($users as $user)
                        {{$user->name}} - {{$user->email }}
                   @endforeach
                   @else
                   <span class='btn btn-sm btn-danger'>No entran datos</span>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
