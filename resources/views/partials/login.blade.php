@extends('layouts.layout')

@section('content')
<div class="mx-auto x-div">
    <div class="card m-sm-2 m-lg-5 p-4 px-5">
        <h1 class="mt-2 text-center">Login</h1>

        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary px-5 mx-auto" style="width:100%">Login</button>
            <div class="mt-3">
                <p class="text-center">Don't have an account? <a href="/register">Sign Up</a></p>
            </div>
        </form>

    </div>

</div>

@endsection

<style>
    .x-div {
        width: 40%;
    }

    @media (max-width: 575.98px) {
        .x-div {
            width: 100%;
        }
    }
</style>