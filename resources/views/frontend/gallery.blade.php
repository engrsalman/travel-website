@extends('layouts.master')

@section('title')
       <title>Gallery</title>
@endsection

@section('page-css')
     
@endsection



@section('main-content')
      <div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Travel Story <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="#">Whatsapp</a></li>
						<li><a href="#">Make A Call</a></li>
						<li class="btn-cta"><a href="#"><span>Make Appointment</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(assets/vendor/images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to travel Story</span>
							<h1>Build website using this template.</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Gallery Images</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<h2>Dubai</h2>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Dubai/dubai_1.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Dubai/dubai_1.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dubai Visit</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Dubai/dubai_3.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Dubai/dubai_3.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Dubai/dubai_4.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Dubai/dubai_4.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>
			</div>

            <h2>Maldives</h2>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Maldives/maldives_5.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Maldives/maldives_5.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Maldives/maldives_2.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Maldives/maldives_2.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Maldives/maldives_4.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Maldives/maldives_4.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>
			</div>

			<h2>Sri Lanka</h2>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/SriLanka/srilanka_2.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/SriLanka/srilanka_2.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/SriLanka/srilanka_2.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/SriLanka/srilanka_3.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/SriLanka/srilanka_4.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/SriLanka/srilanka_4.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>
			</div>

			<h2>Turkey</h2>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Maldives/maldives_5.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Maldives/maldives_5.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Maldives/maldives_2.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Maldives/maldives_2.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Maldives/maldives_4.jpeg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Maldives/maldives_4.jpeg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Constructive heading</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
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
						<h3>About <span class="footer-logo">Splash<span>.<span></span></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Knowledge Base</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@FreeHTML5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://FreeHTML5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
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