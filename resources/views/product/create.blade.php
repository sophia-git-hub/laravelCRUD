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
            <div class="card-header">Create Product
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('product.index') }}">Product</a>
                </span>
            </div>

            <div class="card-body">
                {!! Form::open(array('route' => 'product.store', 'method'=>'POST')) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::textarea('description', null, array('placeholder' => 'Body','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        {!! Form::number('price', null, array('placeholder' => 'price','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Product Image:</strong>
                        {!! Form::file('image', null, array('placeholder' => 'image','class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection