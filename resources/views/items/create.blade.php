@extends('layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Product
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('super.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" name="product_name" />
                </div>
                <div class="form-group">
                    <label for="price">Product Description:</label>
                    <input type="text" class="form-control" name="product_description" />
                </div>
                <div class="form-group">
                    <label for="quantity">Product Price:</label>
                    <input type="text" class="form-control" name="product_price" />
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

@endsection
