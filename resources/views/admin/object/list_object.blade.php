@extends('admin/layouts/adMaster')
@section('content_list_object')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách  </h2>
        <div class="block">  
 
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th style="text-align: center">ID</th>
					<th style="text-align: center">Name</th>
					<th style="text-align: center">Type ID</th>
					<th style="text-align: center">Custom</th>
				</tr>
			</thead>
			<tbody>
				@foreach($test1 as $key=>$oj)
				<tr class="odd gradeX" style="text-align: center">
					<td>{{$oj->id}}</td>
					<td>{{$oj->name}}</td>
					<td>{{$oj->typeName}}</td>
						
				
					<td><a href="{{URL('edit-object/'.$oj->id.'/'.$oj->categories_id)}}">Edit</a> || <a href="{{URL('delete-object/'.$oj->id.'/'.$oj->categories_id)}}">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

       </div>
    </div>
</div>
@endsection