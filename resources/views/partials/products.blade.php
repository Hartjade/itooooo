@extends('layouts.layout')

@section('content')
<div>

    <x-products :products="$products" />
</div>

@endsection