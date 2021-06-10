@extends('admin/layouts/adMaster')
@section('title', 'Edit Admin')
@section('content')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Admin</h2>
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
            
        {!!Form::open(['action' => ['adminController@update', $key->id ], 'method' =>'POST'])!!}
        {{Form::hidden('_method','PUT')}}

            <table class="form">
                <tr>
                    <td>
                        <label>Tên ADMIN</label>
                    </td>
                    <td>
                        <input type="text" name="name" value="{{$key->name}}" placeholder="New Name..." class="medium" />

                        <input type="text" name="email" value="{{$key->email}}" placeholder="New Email..." class="medium" />
                        <input type="password" name="password" value="" placeholder="New Password..." class="medium" />
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
