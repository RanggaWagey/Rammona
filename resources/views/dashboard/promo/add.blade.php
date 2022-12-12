@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add promo</h1>
</div>

<div class="col-lg-8">
    <form action="{{ route('promos.update', $product->id) }}" method="post" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
       

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" readonly>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="image" class="form-label">product Image</label>
            <input type="hidden" name="oldImage" value="{{ $product->image }}">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid mb-3 col-sm-5 d-block" id="preview">
            @else
                <img class="img-fluid mb-3 col-sm-5 d-block" id="preview">
            @endif
            
            {{-- <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage(event)">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror --}}
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}" readonly>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" max="100" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{ old('discount', $product->discount) }}">
            @error('discount')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Update</button>
    </form>
</div>

@endsection