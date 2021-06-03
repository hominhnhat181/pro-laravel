@extends('admin/layouts/adMaster')
@section('content_add_object')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New app</h2>
        <div class="block">     
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @foreach ($typeList as $key)

            <form action="{{URL('save-apps/'.$key->id)}}" method="post" enctype="multipart/form-data">

            @endforeach
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td class="add-app">
                        <input type="text" name="name" placeholder="Nhập tên app mới..." class="medium" />
                        <input type="text" name="title" placeholder="Nhập tiêu đề..." class="medium" />
                        <input type="text" name="desc" placeholder="Nhập chi tiết..." class="medium" />
                        <input type="text" name="image" placeholder="tên image..." class="medium" />
                        <input type="text" name="link" placeholder="link download..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <select style="margin-left: 20px" name="types_id">
                            <option  value="">Chọn thể loại</option>
                        @foreach ($typeList as $xp)
                            <option  value="{{$xp->typeName}} ">{{$xp->typeName}}</option>
                        @endforeach  
                        <input style="margin-left:415px " type="submit" name="submit" Value="Save" />
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<style>
    .add-app input{
        margin:5px 0 5px 20px;
    }
</style>
@endsection


