@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Promo</h1>
</div>



<div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="position-absolute px-3 py-2 d-flex justify-content-between"
                style="background-color:rgba(0, 0, 0, 0.7)"><a
                    href="{{ url('view-category/'. $product->subcategory->slug) }}"
                    class="text-white text-decoration-none">{{ $product->subcategory->name }}</a></div>
            @if($product->image)
            <div style="max-height: 170px; overflow:hidden;">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->subcategory->name }}"
                    class="img-fluid">

            </div>

            @else
            <img src="{{ asset('storage/product-images/no-image.jpg') }}" class="img-fluid"
                alt="{{ $product->subcategory->name }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">Rp. {{ $product->price }},-</p>
                <a href="{{ route('promos.add', $product->id) }}">
                    <button type="submit" class="btn btn-sm btn-success mb-2">Add Discount</button>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection
