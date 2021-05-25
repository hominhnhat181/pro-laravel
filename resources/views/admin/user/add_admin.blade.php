@extends('admin/layouts/adMaster')
@section('content_add_admin')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New Admin</h2>
        <div class="block">     
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
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


