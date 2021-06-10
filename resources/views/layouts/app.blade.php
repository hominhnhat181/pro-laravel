@extends('layouts/master')
@section('title', 'Apps')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center" style="text-align: center">
                        {{-- <h2 class="product-select" >APPS</h2> --}}
                        {{-- <select class="selectpicker" multiple>
                            @foreach ($appList as $ap)  <option>{{$ap->typeName}}</option>@endforeach
                  
                        </select> --}}
                    </div>
                </div>
                
                <div class="row">
                    @foreach ($appList as $tp)
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});">
                                
										<a href="{{URL('detail-'.$tp->types_id.'-'.$tp->id)}}" style="width: 100%; height: 100%;"></a>
                            </div>
                            <div class="text text-center">
                                <span class="sale">Hot</span>
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
                <div class="panigate">
                    {{ $appList->links() }}
                </div>
            </div>

            <div class="col-md-3">
                <div class="sidebar-box ftco-animate">
      <div class="categories">
        <h3 style="padding-left: 40px">App Types</h3>
        <ul class="x">
            @foreach ($typeList as $ap)  <li><a href="{{URL('types-'.$ap->categories_id.'-'.$ap->id)}}">{{$ap->typeName}} </a></li>@endforeach

        </ul>
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
    .ftco-navbar-light #Apps2 .nav-link {
        color: #ffffff !important; 
    }
    .ftco-navbar-light #Apps2 .nav-link:hover {
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
    .ftco-navbar-light.scrolled.awake .navbar-nav #Apps2 .nav-link{
        color: #b7472a !important;
    }
    #header__content .p ,.name__content{
        display: none;
    }
    .ftco-navbar-light .navbar-brand .name__change{
        margin-left: -5px !important;
    }
    .ftco-navbar-light .navbar-brand .name__change::before{
        content: "apps";
    }
    
</style>
@endsection