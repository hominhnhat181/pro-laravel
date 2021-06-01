@extends('admin/layouts/adMaster')
@section('content_add_object')
<div class="grid_10">
    <div class="box round first grid">
        <h2>New Game</h2>
        <div class="block">     

            @foreach ($data as $key)

         <form action="{{URL('save-games/'.$key->id)}}" method="post" enctype="multipart/form-data">

            @endforeach
            {{ csrf_field() }}
            <table class="form">
                <tr>
                   
                    <td class="add-game">
                        <input type="text" name="game_name" placeholder="Nhập tên Game mới..." class="medium" />
                        <input type="text" name="game_title" placeholder="Nhập tiêu đề..." class="medium" />
                        <input type="text" name="game_desc" placeholder="Nhập chi tiết..." class="medium" />
                        <input type="text" name="game_image" placeholder="tên image..." class="medium" />
                        <input type="text" name="game_link" placeholder="link download..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <select style="margin-left: 20px" name="app_types">
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
    .add-game input{
        margin:5px 0 5px 20px;
    }
</style>
@endsection


