@extends('layouts.layout')

@section('content')
<div class="mx-auto x-div">
    <div class="card m-sm-2 m-lg-5 p-4 px-5">
        <h1 class="mt-2 text-center">Sign Up</h1>

        <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="email" aria-describedby="emailHelp">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

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
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary px-5 mx-auto" style="width:100%">Login</button>
            <div class="mt-3">
                <p class="text-center">Already have an account? <a href="/login">Login</a></p>
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