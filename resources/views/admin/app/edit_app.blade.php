@extends('admin/layouts/adMaster') @section('content_edit_object')
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
            <form action="{{URL('update-apps/'.$key->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
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
                            <label>Images {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="input" name="image" value="{{$key->image}}" placeholder="tên image..." class="medium" />
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
                            <input style="margin-left: 235px" type="submit"  value="Update" /> {{-- <input type="text" name="object_type" value="{{$key->typeName}}" placeholder="Nhập tên Danh mục Moi..." class="medium" /> --}}
                        </td>
                    </tr>
                </table>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection