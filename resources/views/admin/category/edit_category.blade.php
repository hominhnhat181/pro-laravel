@extends('admin/layouts/adMaster')
@section('content_edit_category')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Category</h2>
        <div class="block">     
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <!-- enctype dùng update and thêm mới something -->
            @foreach ($data_ed as $key)
                
            
            {!!Form::open(['action' => ['CategoryController@update', $key->id ], 'method' =>'POST'])!!}
            {{Form::hidden('_method','PUT')}}
            <table class="form">
                <tr>
                    <td>
                        <label>Tên Danh Muc Moi</label>
                    </td>
                    <td>
                        <input type="text" name="catName" value="{{$key->catName}}" placeholder="Nhập tên Danh mục Moi..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit"  value="Update" />
                    </td>
                </tr>
            </table>
            {!!Form::close()!!}
            @endforeach
        </div>
    </div>
</div>
@endsection
