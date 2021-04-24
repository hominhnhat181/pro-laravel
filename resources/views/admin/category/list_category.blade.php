@extends('admin/layouts/adMaster')
@section('content_list_category')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách sản phẩm</h2>
        <div class="block">  
 
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Categories Name</th>
					<th>Tùy Chỉnh</th>


				</tr>
			</thead>
			<tbody>
				@foreach($data as $key=>$cat)
				<tr class="odd gradeX" style="text-align: center">
					<td>{{$cat->id}}</td>
					<td>{{$cat->catName}}</td>
					<td><a href="{{URL('edit-category/'.$cat->id)}}">Edit</a> || <a href="{{URL('delete-category/'.$cat->id)}}">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

       </div>
    </div>
</div>
@endsection