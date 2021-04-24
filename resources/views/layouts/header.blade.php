<div class="wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-center">
				<p class="mb-0 phone pl-md-2">
					<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 0906 449 581</a> 
					<a href="#"><span class="fa fa-paper-plane mr-1"></span> hominhnhat181@email.com</a>
				</p>
			</div>
			<div class="col-md-6 d-flex justify-content-md-end">
				<div class="social-media mr-4">
				<p class="mb-0 d-flex">
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				</p>
		</div>
		<div class="reg">
			<p class="mb-0"><a href="#" class="mr-2">Sign Up</a> <a href="{{url('login')}}">Log In</a></p>
		</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
  <a class="navbar-brand" href="index.html">Luis<span>tore</span></a>
  <div class="order-lg-last btn-group">
  {{-- <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  <span class="flaticon-shopping-bag"></span>
	  <div class="d-flex justify-content-center align-items-center"><small>3</small></div>
  </a> --}}
  <div class="dropdown-menu dropdown-menu-right">
			<div class="dropdown-item d-flex align-items-start" href="#">
				<div class="img" style="background-image: url(nhat/images/prod-1.jpg);"></div>
				<div class="text pl-3">
					<h4>Bacardi 151</h4>
					<p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
				</div>
			</div>
			<div class="dropdown-item d-flex align-items-start" href="#">
				<div class="img" style="background-image: url(nhat/images/prod-2.jpg);"></div>
				<div class="text pl-3">
					<h4>Jim Beam Kentucky Straight</h4>
					<p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
				</div>
			</div>
			<div class="dropdown-item d-flex align-items-start" href="#">
				<div class="img" style="background-image: url(nhat/images/prod-3.jpg);"></div>
				<div class="text pl-3">
					<h4>Citadelle</h4>
					<p class="mb-0"><a href="#" class="price">$22.50</a><span class="quantity ml-3">Quantity: 01</span></p>
				</div>
			</div>
			<a class="dropdown-item text-center btn-link d-block w-100" href="cart.html">
				View All
				<span class="ion-ios-arrow-round-forward"></span>
			</a>
		  </div>
</div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="oi oi-menu"></span> Menu
  </button>

  <div class="collapse navbar-collapse" id="ftco-nav">
	<ul class="navbar-nav ml-auto">
		
	
	  <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	  @foreach ($data as $key)
	  <li class="nav-item"><a href="" class="nav-link">{{$key->catName}}</a></li>
	 

	  @endforeach
	  <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Types</a>
		<div class="dropdown-menu" aria-labelledby="dropdown04">
			@foreach ($data1 as $key1)
			<a class="dropdown-item" href="product.html">{{$key1->typeName}}</a>
			@endforeach
		</div>
	  </li>
	  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	</ul>

	

  </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('nhat/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
  <div class="col-md-8 ftco-animate d-flex align-items-end">
	  <div class="text w-100 text-center">
		<h1 class="mb-4">Good <span>Games</span> for Good <span>Moments</span>.</h1>
		<p><a href="#" class="btn btn-primary py-2 px-4">View Now</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
	</div>
  </div>
</div>
</div>
</div>

<section class="ftco-intro">
<div class="container">
	<div class="row no-gutters">
		<div class="col-md-4 d-flex">
			<div class="intro d-lg-flex w-100 ftco-animate">
				<div class="icon">
					<span class="flaticon-support"></span>
				</div>
				<div class="text">
					<h2>Games Online</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="intro color-1 d-lg-flex w-100 ftco-animate">
				<div class="icon">
					<span class="flaticon-cashback"></span>
				</div>
				<div class="text">
					<h2>Games Offline</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="intro color-2 d-lg-flex w-100 ftco-animate">
				<div class="icon">
					<span class="flaticon-free-delivery"></span>
				</div>
				<div class="text">
					<h2>Many Amazing Apps </h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>