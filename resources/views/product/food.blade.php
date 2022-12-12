@extends('layouts.main_one')

@section('content')
<!-- Categories Section Begin -->
<section class="categories mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>SALE OF</h2>
                </div>
                <br>
                <div class="categories__slider owl-carousel">
                    @foreach( $promos as $promo)
                       <?php
                            $discount = $promo->price * $promo->discount / 100
                        ?>
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                            <div class="product__discount__item__pic set-bg"
                                data-setbg="{{ asset('storage/' . $promo->image) }}">
                                <div class="product__discount__percent">-{{ $promo->discount }}%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <div class="card-header py-3 bg-transparant">
                                    <h5><a href="#">{{ $promo->name }}</a></h5>
                                    <div class="product__item__price" style="text-decoration: line-through">Rp. {{ $promo->price }}</div>
                                    <div class="product__item__price">Rp. {{ $promo->price - $discount }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li><a href="{{ route('product.food') }}">All</a></li>
                        @foreach($subCategori as $subcat)
                        <li><a href="{{ url('food-category/'. $subcat->slug) }}">{{ $subcat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mix Mineral_Water">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{ asset('storage/' . $product->image) }}">
                        <ul class="featured__item__pic__hover">
                            <li>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{ $product->name }}</a></h6>
                        <h5>Rp. {{ $product->price }}</h5>
                    </div>
                    {{-- <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#">Detail
                            Produk</button></center> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="modal" id="meModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="product_details_pic">
                                <div class="product_detailspic_item">
                                    <img class="product_detailspic_item--large"
                                        src="{{ asset('frontend/img/drink/hot-drink.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product_details_text">
                                <h3>Pancarasa</h3>
                                <ul>
                                    <li><b>Availability</b> <span>In Stock</span></li>
                                    <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span>
                                    </li>
                                    <li><b>Weight</b> <span>0.5 kg</span></li>
                                    <li><b>Share on</b></li>
                                </ul>
                                <div class="product_details_quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">ADD TO CARD</a>
                                <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="mtModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="product_details_pic">
                                    <div class="product_detailspic_item">
                                        <img class="product_detailspic_item--large"
                                            src="{{ asset('frontend/img/drink/tea.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="product_details_text">
                                    <h3>Pancarasa</h3>
                                    <ul>
                                        <li><b>Availability</b> <span>In Stock</span></li>
                                        <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span>
                                        </li>
                                        <li><b>Weight</b> <span>0.5 kg</span></li>
                                        <li><b>Share on</b></li>
                                    </ul>
                                    <div class="product_details_quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="primary-btn">ADD TO CARD</a>
                                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
</section>
<!-- Featured Section End -->

@endsection
