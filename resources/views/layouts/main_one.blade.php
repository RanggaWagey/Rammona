<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Ogani Template" />
        <meta name="keywords" content="Ogani, unica, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Project Rammona Bakery</title>
        <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('frontend/img/logo1.png') }}">
        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
            rel="stylesheet"
        />

        <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
 
       

        <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="#"><img src="{{ asset('frontend/img/Rammona-Bakery.png') }}" alt="" /></a>
      </div>
      
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
        <li class="nav-item"><a class="nav-link" href="/home">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="food">FOOD</a></li>
        <li class="nav-item"><a class="nav-link" href="#">DRINK</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
      </div>
    </div>


        <!-- Header Section Begin -->
        <header class="header">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="/"
                                ><img src="{{ asset('frontend/img/Rammona-Bakery.png') }}" alt=""
                            /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu text-center">
                            <ul>
                            <li class="nav-item"><a class="nav-link" href="/home">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="food">FOOD</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">DRINK</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                </div>
                <div>
                <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
                    
                
            </div>
        </header>
        <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="./index.html"
                                    ><img src="img/logo.png" alt=""
                                /></a>
                            </div>
                            <ul>
                            <li><b>Email:</b> Rammonapurwokerto88@gmail.com </li>
                                <li><b>Address:</b> Jl. Komisaris Bambang Suprapto No. 88 (Kombas)</li>
                                <li><b>Phone:</b> ☏ 0281-634857</li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Company</h6>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Promo</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Contact</a></li>
                                
                            </ul>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Follow Us :</h6>
                            <div class="mb-4">
                        <img src="{{ asset('frontend/img/Rammona-Bakery.png') }}" alt="" height="70">
                    </div>
                          
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(
                                            new Date().getFullYear()
                                        );
                                    </script>
                                     Rammon-Bakery
                                    <i
                                        class="fa fa-heart"
                                        aria-hidden="true"
                                    ></i>
                                    by
                                    <a
                                        href="https://colorlib.com"
                                        target="_blank"
                                        >Drt</a
                                    >
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                            <div class="footer__copyright__payment">
                                <img src="img/payment-item.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        
        <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
