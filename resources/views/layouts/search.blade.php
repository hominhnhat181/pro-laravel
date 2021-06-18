@extends('layouts/master')
@section('title', 'search')

@section('content')

<div class="container">
    <div class="row">
        <h3 style="padding: 20px 10px">Kết quả tìm kiếm:</h3>
        <div class="search__container">
        </div>
    </div>
@foreach ($allResult as $ap)
    <div class="result" >
        <div class="result__block">
            <div class="result__img--item" style=" max-width: 100%; background-size: cover">
                <a href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}" style="width: 100%; height: 100%;">
                <img href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}" src="../public/layout/images/{{$ap->image}}" alt=""></a>
            </div>
            <div class="result__content">
                <div>
                <a class="result__content--title" href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}"><h3 class="category">{{$ap->name}}</a>
                </div>
                <div>
                    <a href="{{URL('types-'.$ap->types_id)}}"><span class="sale">{{__($ap->typeName)}}</span></a>
                </div>
                <div>
                    <p>{{ Str::limit($ap->desc, 250) }}</p>
                </div>
                <a class="mb-0" href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}"> <span class="price">{{ __('DETAIL') }}</span></a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="panigate">
        {{ $allResult->links() }}
    </div>
</div>
</section>
<style>
    .panigate{
        position: relative;
       padding-bottom: 100px;
    }
    .pagination{
        position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    }
    .pagination .page-link{
        margin: 0 3px !important;
        color: black !important;
       
    }
    .pagination .page-link:hover{
        color: #b7472a !important;
    }
    .page-item.active .page-link {
        background: #b7472a !important;
        outline: none !important;
        border: none !important;
        color: #ffffff !important
    }
    .result{
       margin: 50px 0;
    }
    .result a:hover{
        color: #cc1c16 !important;
    transition-duration: 0.3s !important;
    }
    .result__block{
      display: flex !important;
    }
    .result__content{
      margin-left:20px
    }
    .result__img--item img{
        height: 200px;
        width: 300px !important;
    }
    .block-27 ul{
        margin-bottom:50px
    }
    #header__content{
        max-height: 400px !important;
    }
    
    .hero-wrap{
        background-attachment: initial !important;
        max-height: 400px;
        background-size: cover;
    }
    #header__content  .mb-4, .p  ,.name__content{
        display: none;
    }
    .ftco-navbar-light .navbar-brand .name__change{
        margin-left: -5px !important;
    }
    .ftco-navbar-light .navbar-brand .name__change::before{
        content: "earch";
    }
   

  </style>

@endsection