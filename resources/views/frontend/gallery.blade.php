@extends('layouts.master')

@section('title')
       <title>Hello, world!</title>
@endsection

@section('page-css')
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    	.image1 {
    	  margin-top: 20px;
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		  width: 70%;
		  
         }
         div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
.gallery-text{
	text-align: center;
	font-family: verdana;
	font-size: bold;
	margin-top:50px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
    padding: 27px 12px;
    float: left;
    width: 45.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

    </style>

@endsection



@section('main-content')
      
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
    <a class="navbar-brand" href="#">Travel Story</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Whatsapp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Make Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Call Now</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="image1" src="{{asset('assets/images/SixSensesFortBarwara.jpg')}}" class="w-40" alt="...">
    </div>
  </div>
</div>


<h2 class="gallery-text">Image Gallery</h2>
 
<div class="container">
	  	<div class="responsive">
		 <div class="gallery">
		    <a target="_blank" href="{{asset('assets/images/gallery/Dubai/dubai_1.jpg')}}">
		      <img src="{{asset('assets/images/gallery/Dubai/dubai_1.jpg')}}" alt="Forest" width="600" height="400">
		    </a>
		    <div class="desc">dubai</div>
		  </div>
		</div>
  
	  	<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="{{asset('assets/images/gallery/Dubai/dubai_2.jpg')}}">
		      <img src="{{asset('assets/images/gallery/Dubai/dubai_2.jpg')}}" alt="Northern Lights" width="600" height="400">
		    </a>
		    <div class="desc">dubai</div>
		  </div>
		</div>

		 <div class="responsive">
		   <div class="gallery">
		    <a target="_blank" href="{{asset('assets/images/gallery/home/cover_5.jpg')}}">
		      <img src="{{asset('assets/images/gallery/home/cover_5.jpg')}}" alt="Forest" width="600" height="400">
		    </a>
		    <div class="desc">home</div>
		  </div>
		</div>

		<div class="responsive">
		   <div class="gallery">
		    <a target="_blank" href="{{asset('assets/images/gallery/home/cover_2.jpg')}}">
		      <img src="{{asset('assets/images/gallery/home/cover_2.jpg')}}" alt="Forest" width="600" height="400">
		    </a>
		    <div class="desc">home</div>
		  </div>
		</div>

		<div class="responsive">
		  <div class="gallery">
		    <a target="_blank" href="{{asset('assets/images/gallery/home/cover_3.jpg')}}">
		      <img src="{{asset('assets/images/gallery/home/cover_3.jpg')}}" alt="Northern Lights" width="600" height="400">
		    </a>
		    <div class="desc">home</div>
		  </div>
		</div>
</div>

@endsection


@section('footer')

@endsection


@section('page-js')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
@endsection