@extends('admin/layouts/adMaster')
@section('title', 'New Games')

@section('content')


<div class="grid_10">
    <div class="box round first grid">
        <h2>New Game</h2>
        <div class="block">     
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        @foreach ($typeList as $key)
        {!!Form::open(['action' => ['GameController@saveGame',$key->id], 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}
        @endforeach
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td class="add-game">
                        <input type="text" name="name" placeholder="Nhập tên Game mới..." class="medium" />
                        <input type="text" name="title" placeholder="Nhập tiêu đề..." class="medium" />
                        <input type="text" name="desc" placeholder="Nhập chi tiết..." class="medium" />
                        
                        <input type="text" name="link" placeholder="link download..." class="medium" />
                        <input class="medium"  id="imageUpload" type="file" value="{{$key->avatar}}" name="image" placeholder="Photo"  capture>

                    </td>
                </tr>
                <tr>
                    <td >
                        <img  style="max-height: 150px; max-width: 300px;margin-left: 20px" id="profileImage" src="{{url('layout/images/'.$key->image)}}" class="img-fluid" alt="Colorlib Template">
                    </td>
                </tr>
				<tr>
                    <td>
                        <select style="margin-left: 20px" name="types_id">
                            <option  value="">Chọn thể loại</option>
                        @foreach ($typeList as $xp)
                            <option  value="{{$xp->id}} ">{{$xp->typeName}}</option>
                        @endforeach  
                        <input style="margin-left:415px " type="submit" name="submit" Value="Save" />
                    </td>
                    <td>
                        <input type="hidden"  name="categories_id" value="1">

                    </td>
                </tr>
            </table>
            {!!Form::close()!!}
        </div>
    </div>
</div>
<style>
    .add-game input, img{
        margin:5px 0 5px 20px;
    }
</style>
<script src="{{url('layout/js/auth.js')}}" type="text/javascript"></script>

@endsection


