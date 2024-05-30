<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="manifest" href="manifest.json">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" ></head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="EL ARABI PARFUMS">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="EL ARABI PARFUMS">
    <meta name="keywords" content="EL ARABI PARFUMS">
    <meta name="author" content="EL ARABI PARFUMS">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>EL ARABI PARFUMS</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick/slick-theme.css')}}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo4.css')}}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    @stack('styles')

</head>

<body class="theme-color4 light ltr" >
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #d3a121;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
 
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">

                                     <a  href="{{route('app.index')}}" class="h-logo img-fluid blur-up lazyload" >                                    
                                        <img src="images/logo.jpg" class="f-logo img-fluid blur-up lazyload" alt="logo">
                                     </a>

                                   
                                </div>

                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i></span>
                                                </div>
                                            </li>
                                            <li><a href="{{route('app.index')}}" class="nav-link menu-title">Home</a></li>
                                            {{-- <li><a href="{{route('shop.index')}}" class="nav-link menu-title">Shop</a></li> --}}
                                            {{-- <li><a href="cart/list.html" class="nav-link menu-title">Cart</a></li> --}}
                                            <li><a href="about" class="nav-link menu-title">About Us</a></li>
                                            <li><a href="contact" class="nav-link menu-title">Contact Us</a></li>
                                            
                                            <li >
                                                <a href="femme" class="dropbtn nav-link menu-title">Women</a>
                                            </li>
                            
                                            <li >
                                                <a href="homme" class="dropbtn nav-link menu-title">Man</a>
                                                
                                            </li>
                            
                                            <li >
                                                <a href="niche" class="dropbtn nav-link menu-title">Niche-Unisex-Oud</a>
                                               
                                            </li>
                                            <li>
                                                <a href="{{route('shopping.cart')}}" class="btn btn-outline-white">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>cart <span class="badge bg-dark">{{count((array)session('cart'))}}</span>
                                                </a>
                                            </li>
                                            
                                    </div>
                                </div>
                            </nav>
                            
                            
                            {{-- <i id="theme-toggle" class="icon-{{ $theme == 'dark' ? 'sun' : 'moon' }}"></i> --}}

                            <div class="menu-right">
                               
                                <li class="onhover-dropdown">
                                    <div class="cart-media name-usr">
                                     @auth  <span>{{Auth::user()->name}}</span> @endauth   <i data-feather="user"></i>                                                               
                                    </div>
                                    <div class="onhover-div profile-dropdown">
                                        <ul>
                                            @if (Route::has('login'))
                                                @auth
                                                    {{-- @if (Auth::user()->utype === 'ADM')                
                                                        <li>
                                                            <a href="{{route('admin.index')}}" class="d-block">Dashboard</a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="{{route('user.index')}}" class="d-block">My Account</a>
                                                        </li>
                                                    @endif    --}}
                                                    <li>
                                                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('frmlogout').submit();" class="d-block">Logout</a>
                                                    <form id="frmlogout" action="{{route('logout')}} " method="POST">
                                                            @csrf
                                                    </form>
                                                    </li>
                                                 @else
                                                    <li>
                                                        <a href="{{route('login')}}" class="d-block">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('register')}}" class="d-block">Register</a>
                                                    </li>
                                                 @endauth
                                            @endif
                                           
                                          
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            
        @endif
    </div>
    @yield('scripts')
  
    {{-- <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="demo3.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div> --}}
@yield('content')
    <div id="qvmodal"></div>

   <style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.footer-sm-space {
    padding: 2rem 0;
}

.main-footer {
    background-color: #d3a121;
    color: #fff;
    padding: 4rem 0;
}

.main-footer .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.footer-contact .brand-logo h5 {
    color: #0e0d0d;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.footer-contact .footer-logo img {
    max-width: 150px;
    margin-bottom: 1rem;
    transition: transform 0.3s, opacity 0.3s;
}

.footer-contact .footer-logo img:hover {
    transform: scale(1.05);
    opacity: 0.8;
}

.contact-lists {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-lists li {
    margin-bottom: 0.75rem;
    line-height: 1.5;
}

.contact-lists li span b {
    font-weight: bold;
}

.contact-lists .social-links {
    display: flex;
    gap: 10px;
}

.contact-lists a img {
    width: 30px;
    height: 30px;
    transition: transform 0.3s;
}

.contact-lists a img:hover {
    transform: scale(1.2);
}

.footer-links .footer-title h3,
.footer-business-hours .footer-title h3,
.footer-newsletter .footer-title h3,
.footer-about .footer-title h3 {
    color: #0c0b0b;
    font-size: 1.25rem;
    margin-bottom: 1rem;
    border-bottom: 2px solid #0c0b0b;
    display: inline-block;
    padding-bottom: 5px;
}

.footer-links .footer-content ul,
.footer-business-hours .footer-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links .footer-content ul li,
.footer-business-hours .footer-content ul li {
    margin-bottom: 0.5rem;
}

.footer-links .footer-content ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-links .footer-content ul li a:hover {
    color: #0c0b0b;
}

.footer-business-hours .footer-content ul li {
    color: #fff;
}

.footer-newsletter input[type="email"] {
    width: 70%;
    padding: 0.5rem;
    margin-right: 0.5rem;
    border: none;
    border-radius: 5px;
}

.footer-newsletter button {
    padding: 0.5rem 1rem;
    border: none;
    background-color: #161614;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.footer-newsletter button:hover {
    background-color: #b88c1a;
}

.footer-about .footer-content {
    color: #fff;
    line-height: 1.5;
    text-align: justify;
}

   </style>

<footer class="footer-sm-space mt-5">
    <div class="main-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-contact">
                        <div class="brand-logo">
                            <a href="" class="footer-logo">
                                <img src="images/logo.jpg" class="f-logo img-fluid blur-up lazyload" alt="logo">
                            </a>
                            <h5>EL ARABI PARFUMS</h5>
                        </div>
                        <ul class="contact-lists">
                            <li>
                                <span><b>Phone:</b> <span class="font-light">+212 602-293534</span></span>
                            </li>
                            <li>
                                <span><b>Address:</b> <span class="font-light">2 Mars, Casablanca, Maroc</span></span>
                            </li>
                            <li>
                                <span><b>Email:</b> <span class="font-light">arabiparfum@gmail.com</span></span>
                            </li>
                            <li class="social-links">
                                <a href="https://www.instagram.com/el_arabi_parfums/" style="  color: #0c0b0b  ">
                                    <img src="assets/images/instagram.png" alt="Instagram">
                                </a>
                                <a href="https://web.facebook.com/Elarabi.parfums/" style=" color: #0c0b0b  ">
                                    <img src="assets/images/facebook.png" alt="Facebook">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li><a href="contact">Contact Us</a></li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="femme">Women</a></li>
                                <li><a href="homme">Man</a></li>
                                <li><a href="niche">Niche-Unisex-Oud</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-business-hours">
                        <div class="footer-title">
                            <h3>Business Hours</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>Monday - Friday: 9am - 6pm</li>
                                <li>Saturday: 10am - 4pm</li>
                                <li>Sunday: Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-newsletter">
                        <div class="footer-title">
                            <h3>Subscribe to Our Newsletter</h3>
                        </div>
                        <div class="footer-content">
                            <form action="/subscribe" method="post">
                                <input type="email" name="email" placeholder="Enter your email" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-about">
                        <div class="footer-title">
                            <h3>About Us</h3>
                        </div>
                        <div class="footer-content">
                            <p>Welcome to EL ARABI PARFUMS, where fragrances whisk you away on unforgettable journeys. Our curated selection of scents, crafted by renowned artisans, promises an olfactory adventure like no other. Whether it's a signature scent for you or a gift for a loved one, let EL ARABI PARFUMS take you on a timeless voyage of scent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
 
    <div class="bg-overlay"></div>
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/feather/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/js/slick/custom_slick.js')}}"></script>
    <script src="{{asset('assets/js/price-filter.js')}}"></script>
    <script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/filter.js')}}"></script>
    <script src="{{asset('assets/js/newsletter.js')}}"></script>
    <script src="{{asset('assets/js/cart_modal_resize.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/theme-setting.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>

</body>

</html>