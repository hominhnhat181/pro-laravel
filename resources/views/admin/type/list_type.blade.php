@extends('admin/layouts/adMaster')
@section('content_list_type')
<div class="grid_10">
    <div class="box round first grid">
        <h2>List Types</h2>
        <div class="block">  
			@if (session('update'))
			<div class="alert alert-success" role="alert">
				{{ session('update') }}
			</div>
			@endif
			@if (session('delete'))
				<div class="alert alert-success" role="alert">
					{{ session('delete') }}
				</div>
			@endif
			@if (session('create'))
				<div class="alert alert-success" role="alert">
					{{ session('create') }}
				</div>
			@endif
            <table class="data display datatable" id="example" style="text-align: center">
			<thead>
				<tr>
					<th>ID</th>
					<th>Types Name</th>
					<th>Category Name</th>
					<th>Custom</th>


				</tr>
			</thead>
			<tbody>
				@foreach($data_ad as $key=>$type)
				<tr class="odd gradeX" style="text-align: center">
					<td>{{$type->id}}</td>
					<td>{{$type->typeName}}</td>
					<td>{{$type->catName}}</td>
					<td><a href="{{URL('edit-type/'.$type->id)}}">Edit</a> || <a href="{{URL('delete-type/'.$type->id)}}">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

       </div>
    </div>
</div>
@endsection