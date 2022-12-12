@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Products</h1>
</div>

@if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
@endif

    <div class="container">
        <a href="{{ route('promos.create') }}" class="btn btn-success mb-3">Add Promo</a>
        <div class="row">
            @foreach ($promos as $promo)
                    <div class="col-md-4 mb-3">
                        <?php
                            $discount = $promo->price * $promo->discount / 100
                        ?>
                        <div class="card">
                            <div class="position-absolute px-3 py-2 d-flex justify-content-between" style="background-color:rgba(0, 0, 0, 0.7)"><a href="{{ url('view-category/'. $promo->subcategory->slug) }}" class="text-white text-decoration-none">{{ $promo->subcategory->name }}</a></div>
                            @if($promo->image)
                            <div style="max-height: 170px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $promo->image) }}" alt="{{ $promo->subcategory->name }}" class="img-fluid">
                            
                            </div>
                        
                            @else
                                <img src="{{ asset('storage/product-images/no-image.jpg') }}" class="img-fluid" alt="{{ $promo->product->subcategory->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $promo->name }}</h5>
                                <p class="card-text">{{ $promo->description }}</p>
                                <p class="card-text" style="text-decoration: line-through">Rp. {{ $promo->price }},-</p>
                                {{-- <p class="card-text">Discount {{ $promo->product->price * $promo->discount / 100 }},-</p> --}}
                                <p class="card-text" >Rp. {{ $promo->price - $discount }},-</p>
                            <a href="{{ route('promos.edit', $promo->id) }}">
                                <button type="submit" class="btn btn-sm btn-warning mb-2">Edit</button>                      
                            </a>
                            <form action="{{ route('promos.destroy', $promo->id) }}" method="post" class="d-inline">
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