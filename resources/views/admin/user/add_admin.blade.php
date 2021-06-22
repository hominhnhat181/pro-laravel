@extends('admin/layouts/adMaster')
@section('title', 'New Admin')
@section('content')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New Admin</h2>
        <div class="block">     
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert" style="list-style-type: none; margin-left:0" >{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {!!Form::open(['action' => ['adminController@store'], 'method' =>'POST' ,'enctype' => 'multipart/form-data'])!!}

            <table class="form">
                <tr>
                    <td>
                     
                    </td>
                    <td>
                        <label>New User</label>
                        <br>
                        <input style="margin-top:15px " type="text" name="name" placeholder="Tên quản trị viên mới..." class="medium" />
                        <input style="margin-top:15px " type="text" name="email" placeholder="Email..." class="medium" />
                        <input style="margin-top:15px " type="password" name="password" placeholder="Nhập mật khẩu..." class="medium" />
                        <input style="margin-top:15px " type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu..." class="medium" />
                    </td>
                    <td>
                        <input type="hidden"  name="lever" value="1">
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


