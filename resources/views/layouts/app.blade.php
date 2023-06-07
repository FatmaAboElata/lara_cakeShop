<!DOCTYPE html>
	<html>
	<head>
		<title>Love Cake</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
        
	    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/icomoon/icomoon.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/slick.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/slick-theme.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/magnific-popup.css') }}"/>
        <link rel="stylesheet" href="{{ asset('asset/css/all.min.css') }}">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

		<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}"/>
	    <link rel="stylesheet" type="text/css" href="{{ asset('asset/style.css') }}">
		
	</head>

<body>

<div id="main-wrapper" class="overflow-hidden">
	<div id="header-wrap">
	<div class="header-top-menu bg-black color-secondary">
		<div class="container">
			<div class="row">
				<div class="wrap flex-container padding-small">
				<div class="contact-block">
                    <div class="d-flex">
                        <p><div class="d-flex"><p><i class="fa-solid fa-phone mr-2"></i></p><p><span class="pr-50">5555-00-444</span></p></div></p>
                        <p><div class="d-flex"><p><span class="color-secondary"><i class="fa-solid fa-envelope icon icon-envelope-o mr-2"></i></p><p><span class="color-secondary"> bakery@gmail.com</span></p></div></p>
                    </div>
				</div>

				<div class="header-top-right">
					<ul class="list-unstyled d-flex color-secondary">
						@auth
						<li class="pr-50"><div class="d-flex"><p><a href="{{ route('carts.index') }}">My Carts</a></p><p><i class="fa-solid fa-cart-shopping icon icon-shopping-cart ml-2"></i></p></div> </li>
						<li class="pr-50"><a href="{{ route('orders.index') }}">My Orders </a></li>	
						<li class="pr-50">
							<div class="searchbar">
								
								<form  action="{{ route('search') }}" method="post">
									@csrf
									<div class="d-flex">
										<p class="mx-3">
											<button type="submit"><i class="fa-solid  fa-magnifying-glass" style="color: rgb(17, 17, 17)"></i></button>
										</p>
										
										<p>
											<input type="text" name="name" placeholder="search , {{Auth::user()->name}}">
										</p>	
									</div>
								</form>
							</div>
							</li>	
						@else
						<li class="pr-50"><a href="{{ route('login') }}">Login</a></li>
						<li class="pr-50"><a href="{{ route('register') }}">Creat Acount</a></li>
						@endauth
						
					</ul>
				</div>
				</div><!--flex-container-->
			</div>
		</div>
	</div><!----top-menu---->

	<header id="header">
		<div class="container">
			<div class="row">

				<nav class="navbar navbar-expand-lg col-md-12">

					

					

					<div class="navbar-collapse collapse" id="slide-navbar-collapse">
                        
						<ul class="navbar-nav list-inline text-uppercase">
							@auth
							<li class="nav-item "><a href="/" class="" data-effect="Home"><img src="{{ asset('asset/images/main-logo.png') }}" class="mt-2" alt="logo"></a></li>
							<li class="nav-item text-hover active"><a href="/" class="nav-link" data-effect="Home">Home</a></li>
			  				<li class="nav-item text-hover"><a href="/about" class="nav-link" data-effect="About Us">About us</a></li>
							<li class="nav-item text-hover"><a href="{{ route('products.index') }}" class="nav-link" data-effect="Blogs">Menu</a></li>
							<li class="nav-item text-hover"><a href="/contact" class="nav-link" data-effect="Contact">Contact us</a></li>
							
							
								<li class="nav-item text-hover">
									<form action="{{ route('logout') }}" method="post">
								      @csrf
								     <button type="submit">Logout</button>
							        </form>
						        </li>
							
							

							

						</ul>
					</div>

					<div class="action-menu">
						
						<div class="shopping-cart">
							<a href="{{ route('carts.index') }}" class="mt-3">
								<i class="fa-solid fa-cart-shopping icon icon-shopping-cart"></i>
							</a>
						</div>
					</div><!--action-menu-->
					@else
					<li class="nav-item "><a href="/" class="" data-effect="Home"><img src="{{ asset('asset/images/main-logo.png') }}" class="mt-2" alt="logo"></a></li>
							<li class="nav-item text-hover active"><a href="/" class="nav-link" data-effect="Home">Home</a></li>
			  				<li class="nav-item text-hover"><a href="/about" class="nav-link" data-effect="About Us">About us</a></li>
							<li class="nav-item text-hover"><a href="{{ route('products.index') }}" class="nav-link" data-effect="Blogs">Menu</a></li>
							<li class="nav-item text-hover"><a href="/contact" class="nav-link" data-effect="Contact">Contact us</a></li>
							
					@endauth

				</nav>

			</div>		
		</div>

	</header>

</div><!--header-wrap-->

@yield('content')

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="wrap flex-container">

			<div class="col-md-3 footer-logo text-center mb-3">
				<img src="{{ asset('asset/images/main-logo.png') }}" class="mb-3">
				<p>Bakery is a Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptate dolorum, ipsa accusantium quibusdam totam.</p>
			</div>		

			<div class="col-md-5 mr-5 mb-3">
				

				<div class="working-schedule my-5">
					<h4 class="widget-title">Our Work Time</h4>
					<div class="time-list d-flex">
						<ul class="list-unstyled mr-5">
							<li>Monday - Friday</li>
							<li>8:00am - 8:30 pm</li>
						</ul>
						<ul class="list-unstyled">
							<li>Saturday - Sunday</li>
							<li>10:00am - 16:00 pm</li>
						</ul>
					</div>
				</div>
			</div><!--col-md-4-->

			<div class="col-md-2">
				<div class="quick-links my-5">
					<h4 class="widget-title">Quick Links</h4>
					<div class="footer-menu">
						<ul class="list-unstyled">
							<li><a href="/">Home</a></li>
							<li><a href="/about">About us</a></li>
							<li><a href="{{ route('products.index') }}">Shop</a></li>
							<li><a href="/contact">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>

			</div><!--flex-container-->

		</div>
	</div>
</footer>

<div class="footer-bottom">
	<div class="container">
		<div class="wrap flex-container padding-small">
			<div class="copyright">
				<p class="mb-0">© 2023 Bakery HTML Template by Fatma Abo El3ta</p>
			</div>
			<div class="payment-card">
                
				<span>We Accept:</span>
				<img src="{{ asset('asset/images/visa.png') }}" class="cardImg">
				<img src="{{ asset('asset/images/american-express.png') }}" class="cardImg">
				<img src="{{ asset('asset/images/master-card.png') }}" class="cardImg">
			</div>
		</div>
	</div>
</div>

</div>   

	<script src="{{ asset('asset/js/jquery-1.11.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('asset/js/script.js') }}"></script>
    <script src="{{ asset('asset/js/all.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
	
	
</body>
</html>	








{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
