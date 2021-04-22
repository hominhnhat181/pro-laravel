@extends('admin/layouts/adMaster')
@section('content_add_category')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm Danh Mục</h2>
        <div class="block">     
          
         <form action="{{URL('save-category')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>
                        <label>Tên</label>
                    </td>
                    <td>
                        <input type="text" name="category_name" placeholder="Nhập tên Danh mục mới..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
@endsection


