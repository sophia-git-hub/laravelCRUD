@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Product
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('product.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $product->name }}
                </div>
                <div class="lead">
                    <strong>Description:</strong>
                    {{ $product->description }}
                </div>
                <div class="lead">
                    <strong>Price:</strong>
                    ${{ $product->price }}
                </div>
                <div class="lead">
                    <strong>Image:</strong>
                    <img src="{{ $product->image }}" alt="Product Image">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection