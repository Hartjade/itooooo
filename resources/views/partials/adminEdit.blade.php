@extends('layouts.admin')

@section('content')
<div class="x-div">
    <h1 class="m-2 mx-5 text-start">Edit Product</h1>

    <div class="card m-sm-2 m-lg-5 p-4 px-5">
        @if(isset($success))
        <h1 class="text-red">{{ $success }}</h1>
        @endif

        <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">

            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="email" class="form-label">Product Name</label>
                <input type="name" name="productName" value="{{$product->name}}" class="form-control" id="email" aria-describedby="emailHelp">

            </div>
            <div class="form-floating">
                <textarea name="productDescription" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">{{$product->description}}
                </textarea>
                <label for="floatingTextarea">Description</label>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input type="number" name="productPrice" value="{{$product->price}}" class="form-control" id="price">

            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Product Quantity</label>
                <input type="number" name="productQuantity" value="{{$product->quantity}}" class="form-control" id="quantity">

            </div>

            <div class="mb-3">

                <img src="{{asset('images/'.$product->image_url)}}" class="mt-2" width="20%">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Product Image</label>
                <input name="productImage" class="form-control" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-primary px-5 mx-auto" style="width:100%">Create</button>

        </form>

    </div>

</div>
@endsection