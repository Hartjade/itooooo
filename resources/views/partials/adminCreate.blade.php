@extends('layouts.admin')

@section('content')
<div class="x-div">
  <h1 class="m-2 mx-5 text-start">Create Product</h1>

  <div class="mx-auto x-div">
    <div class="card m-sm-2 m-lg-5 p-4 px-5">
      <form method="POST" action="/user">
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
        <div class="mb-3 d-flex gap-2">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="admin" name="userType">Admin
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" value="user" name="userType">User
            </label>
          </div>

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
        <button type="submit" class="btn btn-primary px-5 mx-auto" style="width:100%">Create</button>

      </form>

    </div>

  </div>

</div>

@endsection