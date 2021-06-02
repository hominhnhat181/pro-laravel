@extends('admin/layouts/adMaster')
@section('content_add_type')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New Type</h2>
        <div class="block">     
          
         <form action="{{URL('save-type')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>
                        <label>Tên</label>
                    </td>
                    <td>
                        <input type="text" name="type_name" placeholder="Nhập tên Danh mục mới..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <select  name="categories">
                            <option  value="">Category</option>
                        @foreach ($listCat as $xp)
                            <option  value="{{$xp->catName}} ">{{$xp->catName}}</option>
                        @endforeach  
                        <input style="margin-left:390px " type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
@endsection


