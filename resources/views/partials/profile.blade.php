@extends('layouts.admin')

@section('content')


<div class="row">
    <h1 class="mt-2 mx-3">Profile</h1>
    <div class="col-auto">
        <!-- Content for your inline block goes here -->

        <div class="card m-sm-2 m-lg-5 p-4 px-5">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif



            <form method="POST" action="/profile">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input value="{{ $user->email }}" type="email" name="email" class="form-control" id="email">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input value="{{ $user->name }}" type="text" name="name" class="form-control" id="text">
                </div>

                <button type="submit" class="btn btn-success px-5 mx-auto" style="width:100%">Update</button>
            </form>
        </div>
        <!-- <div class="x-div">

        </div> -->
    </div>
    <div class="col-auto">
        <!-- Content for your inline block goes here -->
        <div class="card m-sm-2 m-lg-5 p-4 px-5">
            <form class="d-flex flex-column" action="/profile" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-3">
                    <label for="name" class="form-label">Current Password</label>
                    <input type="password" name="password" class="form-control" id="text">
                </div>
                <button type="submit" class="btn btn-danger">Delete Account</button>
            </form>
        </div>
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