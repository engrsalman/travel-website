@extends('layouts.master')

@section('title')
       <title>Gallery</title>
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
						{{-- <li><a href="#">Call Now</a></li> --}}
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
					<h2>Gallery Section</h2>
					<p>“ Traveling – it leaves you speechless, then turns you into a story teller ” – Ibn Battuta.</p>
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
							<h2>Dubai ocean</h2>
							{{-- <p>Far far away, behind the word mountains, far from the countries Vokalia..</p> --}}
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
							<h2>Night View</h2>
							
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
							<h2>Day View</h2>
							
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
							<h2>Night View</h2>
							
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
							<h2>Morning View</h2>
							
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
							<h2>Maldives Beach</h2>
							
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
							<h2>Morning View</h2>
							
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
							<h2>Srilankan Elephants</h2>
							
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
							<h2>Greenery View</h2>
							
						</div>
					</a>
				</div>
			</div>

			<h2>Turkey</h2>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Turkey/turkey_4.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Turkey/turkey_4.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Istanbul</h2>
							
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Turkey/turkey_6.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Turkey/turkey_6.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Morning in Turkey</h2>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/Turkey/turkey_3.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/Turkey/turkey_3.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Aya Sofia Mosque</h2>
						</div>
					</a>
				</div>
			</div>

			<h2>USA</h2>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/USA/usa_1.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/USA/usa_1.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2> Main City</h2>
							
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/USA/usa_2.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/USA/usa_2.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bridge View</h2>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="{{asset('assets/images/gallery/USA/usa_4.jpg')}}" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="{{asset('assets/images/gallery/USA/usa_4.jpg')}}" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Night View</h2>
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