<div class="wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-center">
				<p class="mb-0 phone pl-md-2">
					<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 0906 449 581</a> 
					<a href="#"><span class="fa fa-paper-plane mr-1"></span> Bluenight@gmail.com</a>
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
  <a class="navbar-brand" href="{{URL('luis')}}">Luis<span>tore</span></a>
  <div class="order-lg-last btn-group">

  <div class="dropdown-menu dropdown-menu-right">
			<div class="dropdown-item d-flex align-items-start" href="#">
				<div class="img" style="background-image: url(layout/images/prod-1.jpg);"></div>
				<div class="text pl-3">
					<h4>Bacardi 151</h4>
					<p class="mb-0"><a href="#" class="price">$25.99</a><span class="quantity ml-3">Quantity: 01</span></p>
				</div>
			</div>
			<div class="dropdown-item d-flex align-items-start" href="#">
				<div class="img" style="background-image: url(layout/images/prod-2.jpg);"></div>
				<div class="text pl-3">
					<h4>Jim Beam Kentucky Straight</h4>
					<p class="mb-0"><a href="#" class="price">$30.89</a><span class="quantity ml-3">Quantity: 02</span></p>
				</div>
			</div>
			<div class="dropdown-item d-flex align-items-start" href="#">
				<div class="img" style="background-image: url(layout/images/prod-3.jpg);"></div>
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
		
	
	  <li class="nav-item active"><a href="{{URL('luis')}}" class="nav-link">Home</a></li>
	 
	  


	 <li class="nav-item dropdown">
	
		<a class="nav-link dropdown-toggle" href="{{URL('games')}}" id="dropdown04" data-toggle="" aria-haspopup="true" aria-expanded="false">Games</a>
		<div class="dropdown-menu" >
			@foreach ($typeGame as $typ)
			<a class="dropdown-item" href="{{URL('types-'.$typ->id)}}">{{$typ->typeName}}</a>
			@endforeach
		</div>
	  </li>
	  <li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="{{URL('apps')}}" id="dropdown04" data-toggle="" aria-haspopup="true" aria-expanded="false">Apps</a>
		<div class="dropdown-menu" >
			@foreach ($typeApp as $typ2)
			<a class="dropdown-item" href="{{URL('types-'.$typ2->id)}}">{{$typ2->typeName}}</a>
			@endforeach
		</div>
	  </li>

	 
	 
	  <li class="nav-item"><a href="{{URL('contact')}}" class="nav-link">Contact</a></li>
	</ul>

	

  </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('layout/images/game0.jpg');" data-stellar-background-ratio="0.5">
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

