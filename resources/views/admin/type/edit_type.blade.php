@extends('admin/layouts/adMaster')
@section('content_edit_type')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Type</h2>
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        <!-- enctype dùng update and thêm mới something -->
        @foreach ($data_ed as $key)

        {!!Form::open(['action' => ['TypeController@update', $key->id ], 'method' =>'POST'])!!}
        {{Form::hidden('_method','PUT')}}
        
            <table class="form">
                <tr>
                    <td>
                        <label>Tên</label>
                    </td>
                    <td>
                        <input type="text" name="typeName" value="{{$key->typeName}}" placeholder="Nhập tên Danh mục mới..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <select  name="categories_id">
                            <option value="{{$key->categories_id}}" >Select Category</option>
                        @foreach ($listCat as $xp)
                            <option  value="{{$xp->id}} ">{{$xp->catName}}</option>
                        @endforeach  
                        <input style="margin-left:390px " type="submit"  Value="Save" />
                    </td>
                </tr>
            </table>
            {!!Form::close()!!}
            @endforeach
        </div>
    </div>
</div>
@endsection
