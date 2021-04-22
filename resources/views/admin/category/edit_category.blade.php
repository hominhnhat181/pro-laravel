@extends('admin/layouts/adMaster')
@section('content_edit_category')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm sản phẩm</h2>
        <div class="block">     
          
        <!-- enctype dùng update and thêm mới something -->
        @foreach ($data as $key)
            
        
         <form action="{{URL('update-category/'.$key->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>
                        <label>CHỉnh Tên Danh Muc Moi</label>
                    </td>
                    <td>
                        <input type="text" name="category_name" value="{{$key->catName}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
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
