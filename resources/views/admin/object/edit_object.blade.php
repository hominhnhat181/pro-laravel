@extends('admin/layouts/adMaster') @section('content_edit_object')
<div class="grid_10">
    <div class="box round first grid">
        @foreach ($super as $key)  <h2>Edit {{$key->catName}} </h2> @endforeach
        <div class="block">
            @foreach ($super as $key)
            <form action="{{URL('update-object/'.$key->id.'/'.$key->categories_id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <table class="form">
                    <tr>
                        <td>
                            <label>Name {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="object_name" value="{{$key->name}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label>Status {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="object_status" value="{{$key->title}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Desc {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="object_desc" value="{{$key->desc}}" placeholder="Nhập desc Moi..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Images {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="object_image" value="{{$key->image}}" placeholder="Nhập tên images Moi..." class="medium"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Link Download {{$key->catName}} </label>
                        </td>
                        <td>
                            <input type="text" name="object_link" value="{{$key->link}}" placeholder="Nhập tên images Moi..." class="medium"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Types {{$key->catName}} </label>
                        </td>
                        <td>
                            <select name="object_type">
                                <option  value="{{$key->typeName}} ">{{$key->typeName}}</option>
                            @foreach ($typeList as $xp)
                                <option  value="{{$xp->typeName}} ">{{$xp->typeName}}</option>
                            @endforeach  
                   
                            </select>
                            <input style="margin-left: 262px" type="submit" name="submit" value="Update" /> {{-- <input type="text" name="object_type" value="{{$key->typeName}}" placeholder="Nhập tên Danh mục Moi..." class="medium" /> --}}
                        </td>
                        
                    </tr>
                </table>
            </form>
            @endforeach
        </div>
        
    </div>
</div>
@endsection