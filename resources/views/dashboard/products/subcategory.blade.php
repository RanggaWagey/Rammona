@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $subcategory->name }}</h1>
</div>

@if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
@endif

    <div class="container">

        <a href="/" class="btn btn-primary mb-3">Back</a>



        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 d-flex justify-content-between" style="background-color:rgba(0, 0, 0, 0.7)"><a href="" class="text-white text-decoration-none">{{ $product->subcategory->name }}</a></div>
                    @if($product->image)
                    <div style="max-height: 170px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->subcategory->name }}" class="img-fluid">
                     
                    </div>
                  
                    @else
                        <img src="{{ asset('storage/product-images/no-image.jpg') }}" class="img-fluid" alt="{{ $product->subcategory->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Rp. {{ $product->price }},-</p>
                    <a href="{{ route('products.edit', $product->id) }}">
                        <button type="submit" class="btn btn-sm btn-warning mb-2">Edit</button>                      
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger mb-2">Hapus</button>                      
                    </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection