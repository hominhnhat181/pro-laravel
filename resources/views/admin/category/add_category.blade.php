@extends('admin/layouts/adMaster')
@section('content_add_category')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New category</h2>
        <div class="block">     
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            {!!Form::open(['action' => ['CategoryController@store'], 'method' =>'POST'])!!}
            <table class="form">
                <tr>
                    <td>                     
                    </td>
                    <td>
                        <input type="text" name="catName" placeholder="Nhập Danh mục mới..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
              
            </table>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection


