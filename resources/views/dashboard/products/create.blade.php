@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Product</h1>
</div>

<div class="col-lg-8">
    <form action="{{ route('products.store') }}" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="sub_category_id" class="form-label">Category</label>
            <select class="form-select" name="sub_category_id">
                @foreach($subcategories as $subcategory)
                    @if( old('sub_category_id') == $subcategory->id)
                    <option value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                    @else
                    <option value="{{ $subcategory->id }}" >{{ $subcategory->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <img class="img-fluid mb-3 col-sm-5" id="preview">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage(event)">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input id="description" type="text" name="description" value="{{ old('description') }}">
            <trix-editor input="description"></trix-editor>
            @error('description')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="number" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{ old('discount') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>

<script>
    const name=document.querySelector('#name');

    document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
    });

    var previewImage = function(event) {
        var preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
        preview.onload = function() {
        URL.revokeObjectURL(preview.src) // free memory
        }
    };

</script>

@endsection