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
				@foreach($app as $key=>$ga)
				<tr class="odd gradeX" style="text-align: center">
					<td>{{$ga->id}}</td>
					<td>{{$ga->name}}</td>
					<td>{{$ga->typeName}}</td>
						
				
					<td><a href="{{URL('edit-apps/'.$ga->id.'/'.$ga->categories_id)}}">Edit</a> || <a href="{{URL('delete-apps/'.$ga->id)}}">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

       </div>
    </div>
</div>
@endsection