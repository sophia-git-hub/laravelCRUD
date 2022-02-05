@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Edit Product
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('product.index') }}">Product</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($product, ['route' => ['product.update', $product->id], 'method'=>'PATCH']) !!}
                    <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Image:</strong>
                        {!! Form::file('image', null, array('placeholder' => 'Image','class' => 'form-control')) !!}
                        <img src="{{$product->image}}" alt="Product Image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection