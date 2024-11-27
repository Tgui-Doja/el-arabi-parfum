
@extends('layouts.base')
@section('content')
<section class="pt-0 poster-section">
    <div class="poster-image slider-for custome-arrow classic-arrow">
        <div>
            <img src="assets/images/431195706_914452024021660_4982702270400364108_n.jpg" class="img-fluid blur-up lazyload" alt="" style="margin-right: 10px">
            <img src="assets/images/black.jpeg" class="img-fluid blur-up lazyload" alt="" style="margin-lift: 10px">

        </div>
        <div>
            <img src="assets/images/428636185_914451804021682_1011118108888253275_n(4).jpg" class="img-fluid blur-up lazyload" alt="" style="margin-right: 10px">
        </div>
        <div>
            <img src="assets/images/348850122_1891115174600577_1267246073586883885_n - Copy.jpg" class="img-fluid blur-up lazyload" alt="" style="margin-right: 10px">
        </div>
    </div>
    <div class="slider-nav image-show">
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t2.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>

        </div>
        <div>
            <div class="poster-img">
                <img src="assets/images/furniture-images/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                <div class="overlay-color">
                    <i class="fas fa-plus theme-color"></i>
                </div>
            </div>
        </div>
    </div>
    <style>
  

        .animated-title {
            font-size: 3em;
            color: rgb(255, 255, 255);
            background-color: rgb(193, 167, 17); /* Add your desired background color */
            position: absolute;
            top: 0;
            width: 100%;
            text-align: center;
            animation: fadeIn 3s ease-in-out infinite;
        }
        
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        
        </style>
    <div class="animated-title">Free Delivery to all cities in Morocco</div>

    <div class="left-side-contain" style="background-color: #d3a121; padding: 200px; margin:65px; border-radius: 10px; width: 400px">
        <div class="banner-left">
            <h1>EL ARABI PARFUMS</h1>
            <h4>THE BEST EXPERIENCE</h4>
            <h6>100DH</h6>
            
        </div>
    </div>
    
    
    
 
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/parfum.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/photo2.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('assets/images/photo7.jpg')}}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="right-side-contain">
        <div class="social-image">
            <h6><a href="https://web.facebook.com/Elarabi.parfums/" style="color: black"><b >Facebook</b></a></h6>
        </div>

        <div class="social-image">
            <h6><a href="https://www.instagram.com/el_arabi_parfums/" style="color: black"><b>Instagram</b> </a></h6>
        </div>

        
    </div>
</section>


<section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Best Sellers Women</h2>
                </div>
            </div>
        </div>
        <style>
            .r-price {
                display: flex;
                flex-direction: row;
                gap: 20px;
            }

            .r-price .main-price {
                width: 100%;
            }

            .r-price .rating {
                padding-left: auto;
            }

            .product-style-3.product-style-chair .product-title {
                text-align: left;
                width: 100%;
            }

            @media (max-width:600px) {

                .product-box p,
                .product-box a {
                    text-align: left;
                }

                .product-style-3.product-style-chair .main-price {
                    text-align: right !important;
                }
            }
        </style>
        <div class="row g-sm-4 g-3">

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/dior.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">parfum</span>
                       
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="reservation" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>                               
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">100DH</div>
                                
                            </div>
                            <a href="product/details.html" class="font-default">
                                <h5>DIOR</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/chanel.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">parfum</span>
                       
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="reservation" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">100DH</div>
                                
                            </div>
                            <a href="product/details.html" class="font-default">
                                <h5>CHANEL</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/hugo_boss.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">parfum</span>
                      
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="reservation" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">100DH</div>
                            </div>
                            <a href="product/details.html" class="font-default">
                                <h5>HUGO BOSS</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/michael_kors.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">parfum</span>
                     
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="reservation" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">100DH</div>
                              
                            </div>
                            <a href="product/details.html" class="font-default">
                                <h5>MICHAEL KORS</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/marly.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">parfum</span>
                       
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="reservation" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">100DH</div>
                            
                            </div>
                            <a href="product/details.html" class="font-default">
                                <h5>MARLY</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="product/details.html">
                            <img src="assets/images/guerlain.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">parfum</span>
                      
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="reservation" class="addtocart-btn">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">100DH</div>
                               
                            </div>
                            <a href="product/details.html" class="font-default">
                                <h5>GUERLAIN</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</section>


<style>
    .products-c .bg-size {
        background-position: center 0 !important;
    }
</style>

<section class="ratio_asos overflow-hidden pb-5">
    <div class="px-0 container-fluid p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Best Sellers Man</h2>
                </div>
            </div>

            <div class="our-product products-c">
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/dior1.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Parfum</span>
                            
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                                    <div class="main-price">
                                       
                                    </div>
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>DIOR</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/chanel1.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Parfum</span>
                           
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                                  
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>CHANEL</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/hugo_boss1.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Parfum</span>
                          
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                                    <div class="main-price">
                                      
                                    </div>
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>HUGO BOSS</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/azzaro.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Parfum</span>
                          
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                                   
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>AZZARO</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/carron.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Parfum</span>
                           
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                                   
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>CARRON</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/lalique.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Parfum</span>
                          
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                               
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>LALIQUE</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="assets/images/nikos.jpg"
                                class="w-100 bg-img blur-up lazyload" alt="">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">parfum</span>
                          
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="reservation" class="addtocart-btn" >
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">100DH</div>
                                    <div class="main-price">
                                       
                                    </div>
                                </div>
                                <a href="product/details.html" class="font-default">
                                    <h5>NIKOS</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                 
                </div>

            </div>
        </div>
    </div>
</section>

@endsection