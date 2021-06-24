@extends('admin/layouts/adMaster')
@section('title', 'Edit Admin')
@section('content')
<head>
    <link rel="stylesheet" href="{{asset('layout/css/auth.css')}}">
</head>
<style>
    td{
        color: rgb(39, 101, 151);
    }
</style>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Admin</h2>
        <div class="block" style="margin-left: 3%; margin-right: 10%">     
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
                    <td >
                        <image style="max-height: 122.6px" id="profileImage" src={{url('layout/images/'.$key->avatar)}} />
                        <input id="imageUpload" type="file" value="{{$key->avatar}}" name="avatar" placeholder="Photo"  capture>
                    </td>
                    <td >
                    </td>
                </tr>
                <tr>
                    <td style="max-width: 200px !important">
                        <label>Name</label>
                    </td>
                    
                    <td>
                        <input type="text" name="name" value="{{$key->name}}" placeholder="Name..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" name="email" value="{{$key->email}}" placeholder="Email..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Lever Access</label>
                    </td>
                    <td>
                        <input type="text" name="lever" value="{{$key->lever}}" placeholder="Lever..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>
                        <input type="text" name="phone" value="{{$key->phone}}" placeholder="Phone..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Street</label>
                    </td>
                    <td>
                        <input type="text" name="street" value="{{$key->street}}" placeholder="Street..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email Verified</label>
                    </td>
                    <td>
                        <input type="text"  value="{{$key->email_verified_at}}" placeholder="Email Verified At" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password"  placeholder="New Password..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Confirm Password</label>
                    </td>
                    <td>
                        <input type="password" name="password_confirmation"  placeholder="Confirm Password..." class="medium" />
                        <br>
                        @if (session('error'))
                        <h5  style="color:red; padding: 4px;"> {{ session('error') }} </h5>
                        @endif
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
<script src="{{url('layout/js/auth.js')}}" type="text/javascript"></script>

@endsection