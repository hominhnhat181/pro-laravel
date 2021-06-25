@extends('layouts/master')
@section('title', 'Home')

@section('content')
<section class="ftco-section ftco-no-pb" id="sec-view">
			<div class="container">
				@foreach ($bestGame as $best)
				<div class="row">
					<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(layout/images/{{$best->image}}); background-size: cover; max-width: 100%;">
						<a href="{{URL('detail-'.$best->types_id.'-'.$best->id)}}" style="width: 100% ; height: 100%;" ></a>
					</div>
					<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
	          <div class="heading-section">
				
	          	<span class="subheading">{{__('Best Game of Day')}}</span>
				 
				  <a href="{{URL('detail-'.$best->types_id.'-'.$best->id)}}"> <h2 class="mb-4">{{$best->name}}	</h2></a>
				
	            <p>{{__($best->desc)}}</p>
	            
	            <p class="year">
	            	<strong class="number" data-number="118">0</strong>
		            <span>{{__('Hours of Experience In Story')}}</span>
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
							<a href="{{URL('detail-'.$ring->types_id.'-'.$ring->id)}}"><div class="img" style="background-image: url(layout/images/{{$ring->image}});">
								
							</div>	</a>					
						</div>
					</div>
					@endforeach
{{-- foreach --}}
				</div>
			</div>
		</section>
		
		<section class="ftco-section" id="list-start">
			<div class="container">
				<div id="software-box" class="row justify-content-center pb-5">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<h2 id="lion" >{{ __('Daily Games') }}</h2>
						<a style="all: unset !important" href="{{URL('games-1')}}"><span class="subheading" id="wolf">{{ __('Games collection') }}</span></a>
					</div>
				</div>
				<div class="row">
{{-- foreach --}}
					@foreach ($gameList as $tp)
					<div class="col-md-3 d-flex">
						<div class="product ftco-animate">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});  max-width: 100%; background-size: cover">
								<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}" style="width: 100%; height: 100%;"></a>
							</div>
							<div class="text text-center">
								<a href="{{URL('types-'.$tp->categories_id.'-'.$tp->types_id)}}"><span class="sale">{{__($tp->typeName)}}</span></a>
								<div class="top__name">
									<a class="link-oj" href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}"><span class="category">{{$tp->name}}</a>
								</div>
								<a class="mb-0" href="{{$tp->link}}"> <span class="price">{{ __('DOWNLOAD') }}</span></a>
							</div>
						</div>
					</div>
					@endforeach
{{-- foreach --}}
					
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<a href="{{URL('games-1')}}" class="btn btn-primary d-block">{{ __('View All Games') }}<span class="fa fa-long-arrow-right"></span></a>
					</div>
				</div>
			</div>
		</section>
  
    <section class="ftco-section testimony-section img" style="background-image: url(layout/images/game02.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">{{ __('Summer Spirits') }}</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

{{-- foreach --}}

@foreach ($gameslider as $tp)

              <div class="item">
                <div class="testimony-wrap py-4" style="background: url(layout/images/{{$tp->image}}) no-repeat center center ; ">
                	<div class="icon d-flex align-items-center justify-content-center">{{$tp->title}}</div>
                  <div class="text">
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center">
                    	<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}">	</a>
                    	<div class="pl-3">
							<button class="slier">
									<a class="slier_route" href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}">{{ __('View Now') }}</a>
							  </button>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
@endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
		<div class="container">
			<div id="software-box" class="row justify-content-center pb-5">
	  <div class="col-md-7 heading-section text-center ftco-animate">		
	
		<h2 id="lion">{{ __('Daily Apps') }}</h2>
		<a style="all: unset !important" href="{{URL('apps-2')}}"><span class="subheading" id="wolf">{{ __('Apps collection') }}</span></a>
	  </div>
	</div>
			<div class="row">
				{{-- foreach --}}
				@foreach ($appList as $tp)
				<div class="col-md-3 d-flex">
					<div class="product ftco-animate">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});     max-width: 100%; background-size: cover">
							
							<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}" style="width: 100%; height: 100%;"></a>
						</div>
						<div class="text text-center">
							<a href="{{URL('types-'.$tp->categories_id.'-'.$tp->types_id)}}"><span class="sale">{{__($tp->typeName)}}</span></a>
							<div class="top__name">
								<a class="link-oj" href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}"><span class="category">{{$tp->name}}</a>
							</div>
							<a class="mb-0" href="{{$tp->link}}"> <span class="price">{{ __('DOWNLOAD') }}</span></a>
						</div>
					</div>
				</div>
				@endforeach
				{{-- foreach --}}
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<a href="{{ url('apps-2') }}" class="btn btn-primary d-block">{{__('View All Apps ') }} <span class="fa fa-long-arrow-right"></span></a>
				</div>
			</div>
		</div>
	</section>
@endsection

