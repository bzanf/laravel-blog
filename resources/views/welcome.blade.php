@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex">
            <h2 class="col text-end">Default admin user</h2>
            <h2 class="px-2">:</h2>
            <h2 class="col">admin</h2>
        </div>
        <div class="d-flex">
            <h2 class="col text-end">Password</h2>
            <h2 class="px-2">:</span>
            <h2 class="col">admin</h2>
        </div>
        <div class="d-flex gap-2">
            <a class="btn btn-primary btn-lg col" href="{{ route('post.index') }}">Home</a>
            <a class="btn btn-secondary btn-lg col" href="{{ route('login') }}">Login</a>
            <a class="btn btn-secondary btn-lg col" href="{{ route('register') }}">Register</a>
        </div>
    </div>
@endsection