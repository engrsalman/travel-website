@extends('layouts.master')

@section('title')
       <title>Testimonials</title>
@endsection

@section('page-css')
       <style>
     	.image-main{
     		padding-top: 100px;
     		margin-left: auto;
     		margin-right: auto;
     		width:100%;
     	}
     </style>
@endsection



@section('main-content')
 <div class="gtco-loader"></div>
  <div id="page">
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{route('gallery')}}">Travel Story <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="#">Whatsapp</a></li>
						<li><a href="#">Make Appointment</a></li>
					{{-- 	<li><a href="#">Call Now</a></li> --}}
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<div class="container">
		<img class="image-main" src="{{asset('assets/images/SixSensesFortBarwara.jpg')}}" alt="">
	</div>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Testimonials</h2>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/testimonials/imag_2.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/testimonials/imag_2.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Neha Agarwal & Family</h2>
							 <p>No words to say how good our trip went after a big gap of 2 years. From the starting to the end of the trip everything was taken care so well by Pooja that we couldn’t think of. Wishing you all the best dear Pooja and hoping to do more trips in coming days from you. Thanks a ton for the awesome memorable trip ❤️</p> 
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/testimonials/imag_3.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/testimonials/imag_3.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Prateek Garg & Family</h2>
							<p>The service Pooja have provided goes above and beyond anything we have experienced with other travel agencies and as the one responsible for arranging our travel needs always.Thank you for your recommendation and always putting our trips n needs together.</p>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/testimonials/imag_1.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/testimonials/imag_1.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Praveen Singhvi & family</h2>
							<p>I want to Pooja Shah on behalf of my family for making our trip so special and unique. With glaring headlines every day in the media about covid surge and thousands of cancelled flights, people wondering why we're going.I just want to tell them our trip occurred without a hitch and now we have lifetime memories of our time together. We plan to prepare our next trip with Pooja Shah 😊</p>	
						</div>
					</a>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/testimonials/imag_4.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/testimonials/imag_4.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Raj Kangad & Family</h2>
							<p>We enjoyed every bit of our trip All thanks to Pooja. All the arrangements were done perfectly. Loved the stay and also the food was excellent. It was perfectly curated and planned . We look forward for all our holidays. Thank you</p>	
						</div>
					</a>
				</div>
			</div>

		</div>
	</div>

	
          <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">Travel Story<span>.<span></span></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Address</h3>
						<p>E-503, Indraprastha 7,<br>
                           Opp. Bodakdev Fire Station,<br>
                           Bodakdev, Ahmedabad-380054,<br>
                            Gujarat.</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +91 99252 25292</a></li>
							<li><a href="#"><i class="icon-mail2"></i> abc@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></i> 079 2684 0152</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block"></small> 
						<small class="block">&copy; 2022 Free HTML5. All Rights Reserved. Designed by Finder IT Solution.</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>
</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
  
@endsection


@section('footer')
     
@endsection


@section('page-js')

   
@endsection