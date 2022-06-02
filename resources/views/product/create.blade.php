@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('add-product') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="mb-6">
                <div class="mb-3">
                    
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    
                </div>
            </div>
            <div>
                <div class="mb-3">
                
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="description"></textarea>
                
            </div>
            </div>
            
            <div class="mb-3">
                
                    <strong>Price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Put the price">
                
            </div>
            <div class="mb-6">
            <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" required class="course form-control">
            </div>
        </div>
        <br>
            <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>

    </form>
@endsection