@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update product
                        <a href="{{ url('products') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-product/'.$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Product Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="{{$product->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">product Price</label>
                            <input type="text" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                       
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update product</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection