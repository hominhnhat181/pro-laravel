@extends('layouts/master')
@section('title', 'Types')

@section('type')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">  
                <div class="row">
                    @foreach ($allthing as $tp)
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center" style="background-image: url(layout/images/{{$tp->image}});">
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
                                <a class="types" style="color: black" href="{{URL('types-'.$tp->types_id)}}">
                                    @foreach ($typeList as $tp2)
                                    {{$tp2->typeName}}</a>
                                    @endforeach
                                <br>
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
        <h3>Game Types</h3>
        <ul class="p-0">
            @foreach ($alltype as $ap)  <li><a href="{{URL('types-'.$ap->id)}}">{{$ap->typeName}} <span class="fa fa-chevron-right"></span></a></li>@endforeach

        </ul>
      </div>
    </div>

    

</section>
@endsection