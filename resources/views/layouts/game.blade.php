@extends('layouts/master')
@section('title', 'Games')
@section('game')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                   
                        
                    </div>
                </div>
                
                <div class="row">
                    @foreach ($gameList as $tp)
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});">
								<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}" style="width: 100%; height: 100%;"></a>
                            </div>
                            <div class="text text-center">
                               
                                <a href="{{URL('types-'.$tp->categories_id.'-'.$tp->types_id)}}"><span class="sale">{{$tp->typeName}}</span></a>
								<div class="top__name">
									<a class="link-oj" href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}"><span class="category">{{$tp->name}}</a>
								</div>
								<a class="mb-0" href="{{$tp->link}}"> <span class="price">DOWNLOAD</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
            </div>

            <div class="col-md-3">
                <div class="sidebar-box ftco-animate">
      <div class="categories">
        <h3 style="padding-left: 40px">Game Types</h3>
        <ul class="xx">
            @foreach ($typeList as $ap)  <li><a href="{{URL('types-'.$ap->categories_id.'-'.$ap->id)}}">{{$ap->typeName}}</a></li>@endforeach
           

        </ul>
        <img  src="layout/images/diablo.png" alt="" style="width: 180px; height: auto; margin: 0 auto; padding-left:40px" >

      </div>
    </div>
</section>
<style>
    .ftco-navbar-light .nav-item .nav-link{
         color: rgba(255, 255, 255, 0.5) !important;
    }
    .ftco-navbar-light .nav-item .nav-link:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light .nav-item .dropdown-menu .dropdown-item:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light #Games1 .nav-link {
        color: #ffffff !important; 
    }
    .ftco-navbar-light #Games1 .nav-link:hover {
        color: #b7472a !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav .nav-item .nav-link{
        color: #000000 !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav .nav-item .nav-link:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover{
        color: #b7472a !important;
    }
    .ftco-navbar-light.scrolled.awake .navbar-nav #Games1 .nav-link{
        color: #b7472a !important;
    }
    #header__content .p ,.name__content{
        display: none;
    }
    .ftco-navbar-light .navbar-brand .name__change{
        margin-left: -5px !important;
    }
    .ftco-navbar-light .navbar-brand .name__change::before{
        content: "games";
    }
</style>
@endsection