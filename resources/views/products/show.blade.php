@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>

        <div class="card">
            <div class="card-header">
                {{ $product->name }}
            </div>
            <div class="card-body">
                <p><strong>Product ID:</strong> {{ $product->product_id }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Price:</strong> ${{ $product->price }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>

                @if ($product->image)
                    <p><strong>Image:</strong></p>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 300px;">
                @endif
            </div>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
    </div>
@endsection

