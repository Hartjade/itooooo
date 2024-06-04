@extends('layouts.admin')

@section('content')

<div class="container mt-3">

    <div class="d-flex flex-row align-items-center justify-content-between">
        <h4 class="p-2">Product List</h4>
        <a class="p-2" href="/dashboard/create">
            <button type="submit" class="btn btn-primary">Add New</button>
        </a>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $prod)
            <tr>
                <th style="width: 10%" scope="row">{{ $prod->id }}</th>
                <td>{{ $prod->name }}</td>
                <td>{{ $prod->price }}</td>
                <td>{{ $prod->quantity }}</td>
                <td>{{ $prod->description }}</td>
                <td style="width: 20%">
                    <div class="btn-group">
                        <form class="mx-1" style="display: inline-block;" method="GET" action="/products/{{ $prod->id }}/edit">
                            @csrf
                            <button type="submit" class="btn btn-success" name="edit">
                                <i class="bi bi-pen m-1"></i>Edit
                            </button>
                        </form>
                        <form class="mx-1" style="display: inline-block;" method="POST" action="/products/{{ $prod->id }}">
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