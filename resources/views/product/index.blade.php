@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products Edit and Update
                        <a href="{{ url('add-product') }}" class="btn btn-primary float-end">Add Product</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Edit</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->price }}</td>

                                <td><img style="height: 40px; max-width: 40px;" src="{{ asset('uploads/products/' . $item->image) }}"></td>
                                <td>
                                    <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <!-- <td>
                                    <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection