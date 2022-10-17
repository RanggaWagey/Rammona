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
                    <div class="col-lg-3">
                        <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                     data-setbg="{{ asset('frontend/img/product/mineral.jpeg') }}">
                                    <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                </div>
                                <div class="product__discount__item__text">
                                <div class="card-header py-3 bg-warning">
                                    <h5><a href="#">Mineral Water</a></h5>
                                    <div class="product__item__price">Rp 5.000</div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                     data-setbg="{{ asset('frontend/img/product/yakin.jpg') }}">
                                    <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                </div>
                                <div class="product__discount__item__text">
                                <div class="card-header py-3 bg-warning">
                                    <h5><a href="#">Brown Sugar</a></h5>
                                    <div class="product__item__price">Rp 20.000</div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                     data-setbg="{{ asset('frontend/img/product/milk.jpeg') }}">
                                    <div class="product__discount__percent">-30%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                </div>
                                <div class="product__discount__item__text">
                                <div class="card-header py-3 bg-warning">
                                    <h5><a href="#">Brown Sugar Milk</a></h5>
                                    <div class="product__item__price">Rp 25.000</div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                     data-setbg="{{ asset('frontend/img/product/drink.jpg') }}">
                                    <div class="product__discount__percent">-30%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                </div>
                                <div class="product__discount__item__text">
                                <div class="card-header py-3 bg-warning">
                                    <h5><a href="#">Milk Thea</a></h5>
                                    <div class="product__item__price">Rp 15.000</div>
                                </div>
                                </div>
                            </div>
                        </div>
                       
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section Begin -->

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
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".Mineral_Water">Mineral Water</li>
                                <li data-filter=".Cold_Drink">Cold Drink</li>
                                <li data-filter=".Hot_Drink">Hot drink</li>
                                <!-- <li data-filter=".Roti_Manis">Roti Manis</li>
                                <li data-filter=".Bagelen">Bagelen</li>
                                <li data-filter=".Bolu">Bolu</li>
                                <li data-filter=".Donat">Donat</li>
                                <li data-filter=".Pastry">Pastry</li> -->
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row featured__filter">
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Mineral_Water">
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/mineral.jpeg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Mineral Water</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#myModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Cold_Drink"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/yakin.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Brown Sugar Boba</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#myModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Mineral_Water"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/aqua.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Mineral Water Aqua</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#myModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Hot_Drink"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/drink.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Milk Tea</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#myModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Hot_Drink"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/kopi.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Kopi Hitam</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#myModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Cold_Drink"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/dalgona.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Dalgona</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#mtModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Cold_Drink"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/tea.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Thai Tea</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#meModal">Detail Produk</button></center>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-6 mix Hot_drink"
                    >
                        <div class="featured__item">
                            <div
                                class="featured__item__pic set-bg"
                                data-setbg="{{ asset('frontend/img/drink/hot-drink.jpg') }}"
                            >
                                <ul class="featured__item__pic__hover">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-heart"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-shopping-cart"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Coffe</a></h6>
                                <h5>$30.00</h5>
                            </div>
                            <center><button type="button" class="btn primary-btn" data-toggle="modal" data-target="#meModal">Detail Produk</button></center>
                        </div>
                    </div>
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
                                <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
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
                                <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
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