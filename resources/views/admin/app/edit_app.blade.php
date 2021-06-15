@extends('admin/layouts/adMaster') 
@section('title', 'Edit Apps')

@section('content')
<div class="grid_10">
    <div class="box round first grid">
        @foreach ($super as $key)  <h2>Edit {{$key->catName}} </h2> @endforeach
        <div class="block">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @foreach ($super as $key)
            
                {!!Form::open(['action' => ['AppController@update', $key->id ], 'method' =>'POST'])!!}
                {{Form::hidden('_method','PUT')}}
              
                <table class="form">
                    <tr>
                        <td>
                            <label>Name {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="name" value="{{$key->name}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label>Title {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="title" value="{{$key->title}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Desc {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="desc" value="{{$key->desc}}" placeholder="Nhập desc Moi..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>New Images {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="file" name="image" value="{{$key->image}}" placeholder="tên image..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label style="position: relative;top: -77px;">Old Images {{$key->catName}} </label>
                        </td>
                        <td>
                          <img style="max-height: 185px; max-width: 300px" src="{{url('layout/images/'.$key->image)}}" class="img-fluid" alt="Colorlib Template">

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Link Download {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="link" value="{{$key->link}}" placeholder="Nhập tên images Moi..." class="medium"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Types {{$key->catName}} </label>
                        </td>
                        <td>
                            <select name="types_id">
                                <option  value="{{$key->types_id}} ">{{$key->typeName}}</option>
                            @foreach ($typeList as $xp)
                                <option  value="{{$xp->id}} ">{{$xp->typeName}}</option>
                            @endforeach  
                   
                            </select>
                            <input style="margin-left: 235px" type="submit"  value="Update" /> 
                        </td>
                    </tr>
                </table>
                {!!Form::close()!!}
            @endforeach
        </div>
    </div>
</div>
@endsection