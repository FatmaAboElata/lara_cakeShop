@extends('layouts.app')
@section('content')

  <section id="billboard">
	<div class="main-slider">
		
		<div class="slider-item">
			
			<figure>
				<img src="{{ asset('asset/images/banner1.jpg') }} " class="mt-3">
			</figure>
			
			<div class="text-content col-md-8">
				<span>- FRESHLY BAKED EVERY MORNING</span>
				<h2 class="text-uppercase colored padding-xsmall"><a href="#">delicious cupcakes for you</a></h2>
				<p>A gorgeous selection of our favorites for a client to send as a new year’s gift.A gorgeous selection of our favorites for a client to send as a new year’s gift</p>
				<div class="pix_btn">
					<a href="{{ route('products.index') }}" class="btn-hvr-effects mt-3">Shop Now</a>
				</div>
			</div><!--content-box-->


		</div><!--slider-item-->


	</div><!--slider-->

</section> <!-- image -->


<section class="gallery-wrap margin-medium">
	<div class="container my-5">
		<h2 class="section-title my-5 text-center">View Our Gallery</h2>
		<div class="row">
			<div class="d-flex flex-wrap col-md-12">
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="{{ asset('asset/images/blackforest.jpg') }}">
						<img src="{{ asset('asset/images/blackforest.jpg') }}" alt="cake" class="galleryImg">
						<div class="overlay">
                            <i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="{{ asset('asset/images/macarons.jpg') }}">
						<img src="{{ asset('asset/images/macarons.jpg') }}" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="{{ asset('asset/images/blackforest.jpg') }}">
						<img src="{{ asset('asset/images/blackforest.jpg') }}" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="{{ asset('asset/images/blackforest.jpg') }}">
						<img src="{{ asset('asset/images/blackforest.jpg') }}" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="{{ asset('asset/images/macarons.jpg') }}">
						<img src="{{ asset('asset/images/macarons.jpg') }}" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
				<figure class="col-md-4 mb-3 pl-0">
					<a class="magnific-popup" href="{{ asset('asset/images/sprinkleddonuts.jpg') }}">
						<img src="{{ asset('asset/images/sprinkleddonuts.jpg') }}" alt="cake" class="galleryImg">
						<div class="overlay">
							<i class="fa-solid fa-magnifying-glass-plus icon icon-search-plus"></i>
						</div><!--imgOverlay-->
					</a>
				</figure>
			</div><!--content-->
			
		</div>
	</div>
</section> <!-- gallery -->


<section class="association-with bg-prim padding-small">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                
				<ul class="d-flex list-unstyled justify-content-between flex-wrap">
					<li><a href="#"><img src="{{ asset('asset/images/baker.svg') }}" class="brandImg"></a></li>
					<li><a href="#"><img src="{{ asset('asset/images/bakery.svg') }}" class="brandImg"></a></li>
					<li><a href="#"><img src="{{ asset('asset/images/thebakery.svg') }}" class="brandImg"></a></li>
					<li><a href="#"><img src="{{ asset('asset/images/breadcookies.svg') }}" class="brandImg"></a></li>
					<li><a href="#"><img src="{{ asset('asset/images/bakery.svg') }}" class="brandImg"></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>  <!-- icons -->

@endsection





