@extends('layouts.admin')

@section('content')
<div class="container mt-3">

  <div class="d-flex flex-row align-items-center justify-content-between">
    <h4 class="p-2">User List</h4>
    <a class="p-2" href="/dashboard/create">
      <button type="submit" class="btn btn-primary">Add New</button>
    </a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row"> {{$user->id}} </th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td style="width: 20%">
          <div class="btn-group">
            <form class="mx-1" style="display: inline-block;" method="GET" action="/products/edit">
              @csrf
              <button type="submit" class="btn btn-success" name="edit">
                <i class="bi bi-pen m-1"></i>Edit
              </button>
            </form>
            <form class="mx-1" style="display: inline-block;" method="POST" action="/user/{{$user->id}}">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger" name="delete">
                <i class="bi bi-trash m-1"></i>Delete
              </button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection