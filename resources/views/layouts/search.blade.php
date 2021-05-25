@extends('layouts/master')
@section('title', 'search')

@section('search')

<div class="container">
    <div class="row">
        <h3 style="padding: 20px 0">Kết quả tìm kiếm:</h3>
        <div class="search__container">

        </div>
    </div>



    @foreach ($resultGame as $gm)
    <div class="result" >
        <div class="result__block">
            <div class="result__img--item" style=" max-width: 100%; background-size: cover">
                <a href="{{URL('detail-'.$gm->types_id.'-'.$gm->id)}}" style="width: 100%; height: 100%;"></a>
                <img src="../public/layout/images/{{$gm->image}}" alt="">
            </div>
            <div class="result__content">
                <div>
                <a class="result__content--title" href="{{URL('detail-'.$gm->types_id.'-'.$gm->id)}}"><h3 class="category">{{$gm->name}}</a>
                </div>
                <div>
                    <a href="{{URL('types-'.$gm->types_id)}}"><span class="sale">{{$gm->typeName}}</span></a>
                </div>
                <div>
                    <p> {{ Str::limit($gm->desc, 200) }}</p>
                </div>
                <a class="mb-0" href="{{URL('detail-'.$gm->types_id.'-'.$gm->id)}}"> <span class="price">DETAIL</span></a>
            </div>
        </div>
    </div>
    @endforeach



@foreach ($resultApp as $ap)
    <div class="result" >
        <div class="result__block">
            <div class="result__img--item" style=" max-width: 100%; background-size: cover">
                <a href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}" style="width: 100%; height: 100%;"></a>
                <img src="../public/layout/images/{{$ap->image}}" alt="">
            </div>
            <div class="result__content">
                <div>
                <a class="result__content--title" href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}"><h3 class="category">{{$ap->name}}</a>
                </div>
                <div>
                    <a href="{{URL('types-'.$ap->types_id)}}"><span class="sale">{{$ap->typeName}}</span></a>
                </div>
                <div>
                    <p>{{$ap->desc}}</p>
                </div>
                <a class="mb-0" href="{{URL('detail-'.$ap->types_id.'-'.$ap->id)}}"> <span class="price">DETAIL</span></a>
            </div>
        </div>
    </div>
    @endforeach
   
    <div class="panigate">
        {{ $resultGame->links() }}
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
  </style>

@endsection