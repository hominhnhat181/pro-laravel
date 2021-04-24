@extends('admin/layouts/adMaster')
@section('content_edit_object')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm sản phẩm</h2>
        <div class="block">     
          
        <!-- enctype dùng update and thêm mới something -->
        @foreach ($s as $key)
            
        
         <form action="{{URL('update-object/'.$key->id.'/'.$key->categories_id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>
                        <label>CHỉnh Tên Danh Muc Moi</label>
                    </td>
                    <td>
                        <input type="text" name="object_name" value="{{$key->name}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
