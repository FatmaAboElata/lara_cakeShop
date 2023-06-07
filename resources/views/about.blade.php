@extends('layouts.app')
@section('content')
<div class="site-banner">
	<div class="banner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="colored">
						<h1>About Us</h1>
						<div class="breadcum-items">
							<span class="item"><a href="index.html">Home /</a></span>
							<span class="item colored">About Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->

<section class="our-team bg-sand padding-large">
	<h2 class="section-title text-center mb-4">Our Team</h2>
	<div class="container">
		<div class="row">

				<div class="col-md-3">

					<div class="team-member text-center">
						
						<figure>
							<a href="#"><img src="{{ asset('asset/images/team.jpg') }}" alt="post" class="member-image"></a>
						</figure>

						<div class="member-details text-center">
							<h4>Mrs. Nocole Sara</h4>
							<div class="designation colored">CEO-Founder</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary ">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div>

					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="{{ asset('asset/images/team1.jpg') }}" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Ms Sienna Jolie</h4>
							<div class="designation colored">General Manager</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="{{ asset('asset/images/team2.jpg') }}" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Ms Jenny Blacksmith</h4>
							<div class="designation colored">Assistant Manager</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

				<div class="col-md-3 text-center">

					<div class="team-member text-center">
						<figure>
							<img src="{{ asset('asset/images/team3.jpg') }}" alt="post" class="member-image">
						</figure>
						<div class="member-details text-center">
							<h4>Mrs Lora Inn</h4>
							<div class="designation colored">Staff</div>
							<p>Jelly topping halvah caramels sweet cake gumni nears gumni coffee.</p>
							<div class="social-links color-primary">
								<a href="#" class="icon icon-facebook pr-10"></a>
								<a href="#" class="icon icon-twitter pr-10"></a>
								<a href="#" class="icon icon-pinterest-p"></a>
							</div>
						</div><!--text-content-->
					</div>

				</div><!--col-md-3-->

		</div>
	</div>
</section><!-- team -->

<section class="our-achivement bg-sand padding-large">
	<div class="container">
			<h2 class="section-title text-center mb-5">Our Best Moments</h2>

		<div class="row">

			<div class="achivement-block text-center col-md-4">
				<img src="{{ asset('asset/images/badge.png') }}" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->
			<div class="achivement-block text-center col-md-4">
				<img src="{{ asset('asset/images/badge1.png') }}" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->
			<div class="achivement-block text-center col-md-4">
				<img src="{{ asset('asset/images/badge2.png') }}" alt="badge">
				<div class="mt-3">
					<h3>Bakery of the Month</h3>
					<span class="date">2018 - 2020</span>
					<p>Bakery is a free HTML CSS Template by Templates Jungle specially crafted for Bakeries.</p>
				</div>
			</div><!--achivement-block-->

		</div>
	</div>
</section>
@endsection