@extends('admin/layouts/adMaster')
@section('content_add_admin')
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
         <form action="{{URL('save-admin')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>
                     
                    </td>
                    <td>
                        <label>New Admin</label>
                        <br>
                        <input style="margin-top:15px " type="text" name="email" placeholder="Tên quản trị viên mới..." class="medium" />
                        <input style="margin-top:15px " type="text" name="password" placeholder="Nhập mật khẩu..." class="medium" />
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
            </form>
        </div>
    </div>
</div>
@endsection


