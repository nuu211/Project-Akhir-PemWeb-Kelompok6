<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Draw4U</title>
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        
        <link href="assets/css/all.min.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="assets/js/upload.js" type="text/javascript"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
<header class="section-header">
<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    
  </ul> <!-- list-inline //  -->
  
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->
<section class="header-main border-bottom">
  <div class="container">
<div class="row align-items-center">
  <div class="col-lg-2 col-6">
    <a href="#" class="brand-wrap">
      Draw4U
    </a> <!-- brand-wrap.// -->
  </div>
  <div class="col-lg-6 col-12 col-sm-12">
    <form action="#" class="search">
      <div class="input-group w-100">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
    </form> <!-- search-wrap .end// -->
  </div> <!-- col.// -->
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
        <span class="badge badge-pill badge-danger notify">0</span>
      </div>
      <div class="widget-header icontext">
        <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
        <div class="text">
          <span class="text-muted">Welcome!</span>
        </div>
        
      </div>
      <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
    </div> <!-- widgets-wrap.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header> <!-- section-header.// -->
<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
<div class="container">
<div class="intro-banner-wrap">
  <img src="assets/images/1.jpg" class="img-fluid rounded">
</div>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
<div class="container">
<article class="card card-body">
<div class="row">
  
</div>
<div>
<label for="formFile" class="form-label">Have any image? Submit it!</label>
          </div>
<div class="mb-3">
  <input type='file' onchange="readURL(this);" />
<img id="blah" src="http://placehold.it/300" alt="your image" />
</div>
<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>
</article>
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Popular products</h3>
</header><!-- sect-heading -->
  
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="shoppingcart.html" class="title">nuu211's Commissions [OPEN]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 21 reviews</span>
        </div>
        <div class="price mt-1">From $10.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">YuzuDraws [OPEN FOR COMMS]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 30 reviews</span>
        </div>
        <div class="price mt-1">From $20.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">TuukiYohka [LAST SLOT]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 17 reviews</span>
        </div>
        <div class="price mt-1">From $16.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">AlexRch07 [COMMS OPEN]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 19 reviews</span>
        </div>
        <div class="price mt-1">From $20.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
<div class="container">
<header class="section-heading">
  <h3 class="section-title">Recently opened</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/5.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">C.Lo_Draws [OPEN]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 4 reviews</span>
        </div>
        <div class="price mt-1">From $6.90</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/6.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">BoeJidun69's Draws [OPEN]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 6 reviews</span>
        </div>
        <div class="price mt-1">From $4.20</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/7.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">NabweelCXR [Open for Comms]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 20 reviews</span>
        </div>
        <div class="price mt-1">From $25.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/9.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">MaikWild [Open for Comms]</a>
        
        <div class="rating-wrap">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </li>
            <li>
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
            </li>
          </ul>
          <span class="label-rating text-muted"> 2 reviews</span>
        </div>
        <div class="price mt-1">$2.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-bottom-sm">
<div class="container">
<header class="section-heading">
  <a href="#" class="btn btn-outline-primary float-right">See all</a>
  <h3 class="section-title">Recommended</h3>
</header><!-- sect-heading -->
<div class="row">
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">nuu211's Commissions [OPEN]</a>
        <div class="price mt-1">From $10.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">YuzuDraws [OPEN FOR COMMS]</a>
        <div class="price mt-1">From $20.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">TuukiYohka [LAST SLOT]</a>
        <div class="price mt-1">From $16.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
  <div class="col-md-3">
    <div href="#" class="card card-product-grid">
      <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
      <figcaption class="info-wrap">
        <a href="#" class="title">AlexRch07 [COMMS OPEN]</a>
        <div class="price mt-1">From $20.00</div> <!-- price-wrap.// -->
      </figcaption>
    </div>
  </div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========================= SECTION  ========================= -->

<!-- ========================= SECTION  END// ========================= -->
<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y">

</section>
<!-- ========================= SECTION  END// ======================= -->
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top bg">
  <div class="container">
    <section class="footer-top  padding-y">
      <div class="row">
        
        <aside class="col-md col-6">
          <h6 class="title">Company</h6>
          <ul class="list-unstyled">
            <li> <a href="#">About us</a></li>
            <li> <a href="#">Career</a></li>
            <li> <a href="#">Find a store</a></li>
            <li> <a href="#">Rules and terms</a></li>
            <li> <a href="#">Sitemap</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Help</h6>
          <ul class="list-unstyled">
            <li> <a href="#">Contact us</a></li>
            <li> <a href="#">Money refund</a></li>
            <li> <a href="#">Order status</a></li>
            <li> <a href="#">Shipping info</a></li>
            <li> <a href="#">Open dispute</a></li>
          </ul>
        </aside>
        <aside class="col-md col-6">
          <h6 class="title">Account</h6>
          <ul class="list-unstyled">
            <li> <a href="#"> Account Settings </a></li>
            <li> <a href="#"> My Orders </a></li>
          </ul>
        </aside>
        <aside class="col-md">
          <h6 class="title">Social</h6>
          <ul class="list-unstyled">
            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
          </ul>
        </aside>
      </div> <!-- row.// -->
    </section>  <!-- footer-top.// -->
    <section class="footer-bottom row">
      <div class="col-md-2">
        <p class="text-muted">   2022 Draw4U </p>
      </div>
      
      <div class="col-md-2 text-md-right text-muted">
        <i class="fab fa-lg fa-cc-visa"></i> 
        <i class="fab fa-lg fa-cc-paypal"></i> 
        <i class="fab fa-lg fa-cc-mastercard"></i>
      </div>
    </section>
  </div><!-- //container -->
</footer>
        </div>
    </body>
</x-app-layout>
