@extends('admin/layouts/adMaster')
@section('content_edit_admin')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Admin</h2>
        <div class="block">     
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        <!-- enctype dùng update and thêm mới something -->
        @foreach ($data_ed as $key)
            
        
         <form action="{{URL('update-admin/'.$key->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <table class="form">
                <tr>
                    <td>
                        <label>Tên ADMIN</label>
                    </td>
                    <td>
                        <input type="text" name="email" value="{{$key->email}}" placeholder="New Name..." class="medium" />
                        <input type="password" name="password" value="" placeholder="New Password..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Update" />
                    </td>
                </tr>
            </table>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
