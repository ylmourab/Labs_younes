@extends('template.main')

@section('content')
    <!-- Page Preloder -->



	


	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($service->random(3) as $item)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
						<h2>{{$item->titre}}</h2>
						<p>{{$item->text}}</p>
						</div>
					</div>
						
					@endforeach
					
					<!-- single card -->
					{{-- <div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div> --}}
					<!-- single card -->
					{{-- <div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>Get in <span>the Lab</span> and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
					<p>{{$discover[0]->text1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$discover[0]->text2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						@foreach ($testimonial as $item)
						<!-- single testimonial -->
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
						<p>{{$item->quote}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="img/avatar/01.jpg" alt="">
								</div>
								<div class="client-name">
									<h2>{{$item->name}}</h2>
									<p>{{$item->role}}</p>
								</div>
							</div>
						</div>
							
						@endforeach
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				@foreach ($service->random(9) as $item)
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-023-flask"></i>
						</div>
						<div class="service-text">
						<h2>{{$item->titre}}</h2>
						<p>{{$item->text}}</p>
						</div>
					</div>
				</div>
					
				@endforeach
				
				
			</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				@foreach ($team as $item)
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>{{$item->nom}}</h2>
						<h3>{{$item->role}}</h3>
					</div>
				</div>
					
				@endforeach
				
				
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>{{$contact[0]->text}}</p>
					<h3 class="mt60">{{$contact[0]->subtitle}}</h3>
					<p class="con-item">{{$contact[0]->adresse}}</p>
					<p class="con-item">{{$contact[0]->numero}}</p>
					<p class="con-item">{{$contact[0]->mail}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form">
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->





@endsection