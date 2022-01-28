@extends('layouts.master')

@section('title')
       <title>Testimonials</title>
@endsection

@section('page-css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
	.image-main{
		padding-top: 100px;
		margin-left: auto;
		margin-right: auto;
		width:100%;
	}
	body {
    min-height: 100vh;
    font-family: 'Cormorant', serif;
    color:black;
    background: linear-gradient(140deg, #fff, 50%, #74a0ff);
    background-repeat: no-repeat
}

.container-fluid {
    margin-top: 80px !important
}

p {
    font-size: 17px;
    margin-bottom: 7px
}

.card-header img {
    border: 5px solid white !important;
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.outside {
    position: inherit;
    top: -50%
}

.card {
    border-radius: 20px !important;
    box-shadow: 2px 2px 5px 0px rgb(100, 108, 170);
    transition: 0.8s;
    height: 599px;
}

.card-header {
    border-radius: 20px !important
}

.card-footer {
    border-radius: 20px !important
}

hr {
    background-color: rgb(146, 154, 236);
    border: 1px solid;
    border-radius: 20px;
    color: rgb(146, 154, 236);
    height: 5px;
    width: 70px !important
}

.bold {
    font-weight: 500
}

.profile-pic {
    margin-bottom: -5px !important
}

.quotes {
    position: relative;
    top: -10px
}

.quotes-down {
    position: relative;
    top: -4 px
}

.fa {
    color: rgb(174, 178, 219);
    cursor: pointer
}

.card-footer .fa {
    font-size: 20px !important
}

.name {
    margin-top: -50px !important
}

.container-fluid:hover .card:not(:hover) {
    transform: scale(0.9)
}

@media (max-width: 1000px) {
    .container-fluid:hover .card:not(:hover) {
        transform: scale(1)
    }
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
						<li><a href="https://wa.me/+919925225292">Whatsapp</a></li>
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
	

    <div class="row mt-5">
		<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
			<h2>Testimonials</h2>
		</div>
	</div>
  
   <div class="container-fluid my-5 justify-content-center">
     <div class=" row justify-content-center ">

        <div class="col-lg-4 mt-5 col-12 ">
            <div class="card mt-3">
                <div class="card-header bg-white text-center border-0 ">
                    <div class="row justify-content-center ">
                        <div class="col"> <img class="align-self-center text-center  outside img-fluid" src="{{asset('assets/images/testimonials/imag_2.jpeg')}}" width="110" height="110"> </div>
                    </div>
                    <div class="row text-center name">
                        <div class="col">
                            <h5 style="line-height: 2.2;font-size: 2.25rem;" class="mb-0 profile-pic">Neha Agarwal & Family</h5>
                            <p><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 text-center pb-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col">
                            <p class="bold">No words to say how good our trip went after a big gap of 2 years. From the starting to the end of the trip everything was taken care so well by Pooja that we couldn’t think of. Wishing you all the best dear Pooja and hoping to do more trips in coming days from you. Thanks a ton for the awesome memorable trip ❤️</p>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

        <div class="col-lg-4 mt-5 col-12 ">
            <div class="card mt-3">
                <div class="card-header bg-white text-center border-0 ">
                    <div class="row justify-content-center ">
                        <div class="col"> <img class="align-self-center text-center  outside img-fluid" src="{{asset('assets/images/testimonials/imag_3.jpeg')}}" width="110" height="110"> </div>
                    </div>
                    <div class="row text-center name">
                        <div class="col">
                            <h5 style="line-height: 2.2;font-size: 2.25rem;" class="mb-0 profile-pic">Prateek Garg & Family</h5>
                            <p><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 text-center pb-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col">
                            <p class="bold">The service Pooja have provided goes above and beyond anything we have experienced with other travel agencies and as the one responsible for arranging our travel needs always.Thank you for your recommendation and always putting our trips n needs together.</p>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

        <div class="col-lg-4 mt-5 col-12 ">
            <div class="card mt-3">
                <div class="card-header bg-white text-center border-0 ">
                    <div class="row justify-content-center ">
                        <div class="col"> <img class="align-self-center text-center  outside img-fluid" src="{{asset('assets/images/testimonials/imag_1.jpeg')}}" width="110" height="110"> </div>
                    </div>
                    <div class="row text-center name">
                        <div class="col">
                            <h5  style="line-height: 2.2;font-size: 2.25rem;" class="mb-0 profile-pic">Praveen Singhvi & family</h5>
                            <p><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 text-center pb-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col">
                            <p class="bold">I want to Pooja Shah on behalf of my family for making our trip so special and unique. With glaring headlines every day in the media about covid surge and thousands of cancelled flights, people wondering why we're going.I just want to tell them our trip occurred without a hitch and now we have lifetime memories of our time together. We plan to prepare our next trip with Pooja Shah 😊</p>
                        </div>
                    </div>
                </div>
             
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
							<li><a href="#"><i class="icon-mail2"></i> info@trawellstory.in</a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></i> 079 2684 0152</a></li>
						</ul>
					</div>
				</div>
 			</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block"></small> 
						<small style="margin-top: -16px;margin-left: 16px;font-size:100%;" class="block">&copy; 2022 Free HTML5. All Rights Reserved. Designed by Finder IT Solution.</small>
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