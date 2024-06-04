@extends('layouts.layout')

@section('content')

<x-hero />
<x-products :products="$products" />
@endsection