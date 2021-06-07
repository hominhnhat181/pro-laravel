@extends('admin/layouts/adMaster')
@section('content_add_type')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New Type</h2>
        <div class="block">     
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            
            {!!Form::open(['action' => ['TypeController@store'], 'method' =>'POST' ])!!}

            <table class="form">
                <tr>
                    <td>
                        <label>Tên</label>
                    </td>
                    <td>
                        <input type="text" name="typeName" placeholder="Nhập tên Danh mục mới..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <select  name="categories_id">
                            <option  value="">Category</option>
                        @foreach ($listCat as $xp)
                            <option  value="{{$xp->id}} ">{{$xp->catName}}</option>
                        @endforeach  
                        <input style="margin-left:390px " type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection


