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
			 @if (Auth::guest())

				<p class="mb-0"><a style="margin-right: 10px" class="master" href="{{url('sign-up')}}" class="mr-2">Sign Up</a> <a class="master" href="{{url('login')}}">Log In</a></p>

            @else

				<p class="mb-0">
					@if((Auth::user()->lever) < 1)
						
						<a class="master" style="margin-right: 10px" href=""> ADMIN {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a> 
						<a class="master" style="margin-right: 10px" href="{{ url('admin') }}">ADMIN</a>
					@else
						<a class="master" style="margin-right: 10px" href="{{ url('luis') }}">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a> 

					@endif
					<a class="master" href="{{ url('logoutpage') }}">Logout  <i style="margin-left: 5px" class="fa fa-btn fa-sign-out"></i></a>
				</p>
                   
            @endif
		
		</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
  <a class="navbar-brand" href="{{URL('luis')}}">Luis<span>tore</span></a>
  <div class="order-lg-last btn-group">

  
</div>



  <div class="collapse navbar-collapse" id="ftco-nav">
	<ul class="navbar-nav ml-auto">
		
	<li style="margin-right: 4px"> 
		<form class="form-search" action="{{URL('search')}}">
			<input type="search" placeholder="Search?" name="search" required>
			<i class="fa fa-search"></i>
		</form>
	</li>
	  <li class="nav-item active" id="menu__home"><a class="nav-link" href="{{URL('luis')}}" class="nav-link">Home</a></li>
	 
	  


	 <li class="nav-item dropdown" id="menu__game">
	
		<a class="nav-link dropdown-toggle"  href="{{URL('games')}}" id="dropdown04" data-toggle="" aria-haspopup="true" aria-expanded="false">Games</a>
		<div class="dropdown-menu" >
			@foreach ($typeGame as $typ)
			<a class="dropdown-item" href="{{URL('types-'.$typ->id)}}">{{$typ->typeName}}</a>
			@endforeach
		</div>
	  </li>
	  <li class="nav-item dropdown" id="menu__app">
		<a class="nav-link dropdown-toggle" href="{{URL('apps')}}" id="dropdown04" data-toggle="" aria-haspopup="true" aria-expanded="false">Apps</a>
		<div class="dropdown-menu" >
			@foreach ($typeApp as $typ2)
			<a class="dropdown-item" href="{{URL('types-'.$typ2->id)}}">{{$typ2->typeName}}</a>
			@endforeach
		</div>
	  </li>

	 
	 
	  <li class="nav-item" id="menu__contact"><a class="nav-link" href="{{URL('contact')}}" class="nav-link">Contact</a></li>
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

<style>
        .form-search{
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            transition: all 1s;
            width: 31px;
            height: 30px;
            background: white;
            box-sizing: border-box;
            border-radius: 25px;
            border: 4px solid white;
            padding: 5px;
        }
        
        input{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 25px;
            line-height: 30px;
            outline: 0;
            border: 0;
            display: none;
            font-size: 1em;
            border-radius: 20px;
            padding: 0 ;
        }
        
        .form-search .fa{
            box-sizing: border-box;
            padding: 10px;
            width: 32.5px;
			height: 33px;
            position: absolute;
            top: -30%;
            right: -15%;
            border-radius: 20px;
            color: #07051a;
            text-align: center;
            font-size: 1em;
            transition: all 1s;
        }
        
        .form-search:hover{
            width: 200px;
            cursor: pointer;
        }
        
        .form-search:hover input{
            display: block;
            height: 25px;
        }
        
        .form-search:hover .fa{
            background: #07051a;
            color: white;
            position: absolute;
            widows: 25px;
            height: 33px;
            right: -5%;
            
        }
</style>

