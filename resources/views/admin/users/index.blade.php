@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @foreach($users as $users)
                        {{$users->name}} - {{$users->email}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
