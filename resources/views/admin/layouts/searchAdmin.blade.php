@extends('admin/layouts/adMaster')
@section('title', 'Home')

@section('content')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Search</h2>
        <div class="block">     
            <div class="row">
                @foreach ($allResult as $search)
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    @if ($search->categories_id == 1)
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                           <img class="img-search" src="layout/images/{{$search->image}}" alt="">
                                        </div>
                                        
                                        <div>
                                            <a href="{{ url('edit-games/'.$search->types_id.'/'.$search->categories_id) }}"><h4>{{ $search->name }}</h4></a>
                                            <a href="{{ url('list-type') }}"> <p class="mb-0">{{ $search->typeName }}</p></a>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="{{ url('list-games') }}"> <h2  class="h1 mb-0">{{ $search->catName }}</h2></a>
                                    </div>
                                    @else
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <img class="img-search" src="layout/images/{{$search->image}}" alt="">
                                        </div>
                                        
                                        <div>
                                            <a href="{{ url('edit-games/'.$search->types_id.'/'.$search->categories_id) }}"><h4>{{ $search->name }}</h4></a>
                                            <a href="{{ url('list-type') }}"> <p class="mb-0">{{ $search->typeName }}</p></a>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="{{ url('list-apps') }}"> <h2  class="h1 mb-0">{{ $search->catName }}</h2></a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
       
    </div>
    <div class="panigate">
        {{ $allResult->links() }}
    </div>
</div>
<style>
    .align-self-center h2{
        text-align: center;
        min-width: 81.22px;
    }
    .pagination{
        justify-content: center;
    }
    .pagination .page-link{
        background: whitesmoke;
    }
    .page-item.active .page-link {
        background: royalblue;
    }
    .pagination .page-link:hover{
        background: royalblue;
        color: aliceblue
    }
    .pagination .page-item{
        margin-left: 10px;
    }
    .img-search{
        max-height: 80px;
        max-width: 80px;
        margin-right: 30px;
    }
    .mb-0{
        margin-top: 20px;
    }
</style>
@endsection