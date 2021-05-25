@extends('admin/layouts/adMaster')
@section('content_add_category')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New category</h2>
        <div class="block">     
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
         @endif
         <form action="{{URL('save-category')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>                     
                    </td>
                    <td>
                        <input type="text" name="category_name" placeholder="Nhập Danh mục mới..." class="medium" />
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


