@extends('admin/layouts/adMaster')
@section('content_list_type')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">  
 
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên Danh Mục</th>
					<th>Tùy Chỉnh</th>


				</tr>
			</thead>
			<tbody>
				@foreach($data1 as $key=>$type)
				<tr class="odd gradeX" style="text-align: center">
					<td>{{$type->id}}</td>
					<td>{{$type->typeName}}</td>
					<td><a href="{{URL('edit-type/'.$type->id)}}">Edit</a> || <a href="{{URL('delete-type/'.$type->id)}}">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

       </div>
    </div>
</div>
@endsection