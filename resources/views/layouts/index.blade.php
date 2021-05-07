@extends('layouts/master')
@section('title', 'Home')

@section('content')
<section class="ftco-section ftco-no-pb">
			<div class="container">
				@foreach ($bestGame as $best)
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(layout/images/{{$best->image}}); background-size: cover; max-width: 100%;">
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
	          <div class="heading-section">
				
	          	<span class="subheading">Best Game of Day</span>
				 
	            <h2 class="mb-4">{{$best->name}}</h2>

	            <p>{{$best->desc}}</p>
	            
	            <p class="year">
	            	<strong class="number" data-number="118">0</strong>
		            <span>Hours of Experience In Story</span>
	            </p>
	          </div>
			  
					</div>
				</div>
				@endforeach
			</div>
		</section>

		<section class="ftco-section ftco-no-pb">
			<div class="container">
				<div class="row">
{{-- foreach --}}
					@foreach ($gameRing as $ring)
					<div class="col-lg-2 col-md-4 ">
						<div class="sort w-100 text-center ftco-animate">
							<div class="img" style="background-image: url(layout/images/{{$ring->image}});"></div>
							<h3>{{$ring->name}}</h3>
						</div>
					</div>
					@endforeach
{{-- foreach --}}
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Games collection</span>
            <h2>Daily Games</h2>
          </div>
        </div>
				<div class="row">
{{-- foreach --}}
					@foreach ($gameList as $tp)
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});  max-width: 100%; background-size: cover">
								<div class="desc">
									<p class="meta-prod d-flex">
								
										<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
									</p>
								</div>
							</div>
							<div class="text text-center">
								<span class="sale">Hot</span>
								<a class="link-oj" href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}"><span class="category">{{$tp->name}}</a>
							<br>
								<a class="types" style="color: black" href="{{URL('types-'.$tp->types_id)}}">{{$tp->typeName}}</a>
							<br>
								<a class="mb-0" href="{{$tp->link}}"> <span class="price">DOWNLOAD</span></a>
							</div>
						</div>
					</div>
					@endforeach
{{-- foreach --}}
					
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<a href="{{URL('games')}}" class="btn btn-primary d-block">View All Games <span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
  
    <section class="ftco-section testimony-section img" style="background-image: url(layout/images/game02.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">ACE</span>
            <h2 class="mb-3">League of Legends</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
				
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(layout/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(layout/images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(layout/images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(layout/images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(layout/images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
	  <div class="col-md-7 heading-section text-center ftco-animate">
		  <span class="subheading">Apps collection</span>
		<h2>Daily Apps</h2>
	  </div>
	</div>
			<div class="row">
				{{-- foreach --}}
				@foreach ($appList as $tp)
				<div class="col-md-3 d-flex">
					<div class="product ftco-animate">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});     max-width: 100%; background-size: cover">
							<div class="desc">
								<p class="meta-prod d-flex">
									<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
								</p>
							</div>
						</div>
						<div class="text text-center">
							<span class="sale">Hot</span>
							<a class="link-oj" href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}"><span class="category">{{$tp->name}}</span></a>
							<br>
							<a class="types" style="color: black" href="{{URL('types-'.$tp->types_id)}}" >{{$tp->typeName}}</a>
							<br>
							<a class="mb-0" href="{{$tp->link}}"> <span class="price">DOWNLOAD</span></a>
						</div>
					</div>
				</div>
				@endforeach
				{{-- foreach --}}
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="product.html" class="btn btn-primary d-block">View All Games <span class="fa fa-long-arrow-right"></span></a>
				</div>
			</div>
		</div>
	</section>




@endsection
