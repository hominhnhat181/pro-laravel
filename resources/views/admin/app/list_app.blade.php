@extends('admin/layouts/adMaster')
@section('content_list_object')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Danh sách  </h2>
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

					<td style="justify-content: center; display: flex;">
						{{-- edit --}}
						{!!Form::open(['action' => ['AppController@editApp', $ga->id , $ga->categories_id], 'method' =>'POST','class' =>'pull-right'])!!}
							{{Form::hidden('_method','get')}}
							{{Form::submit('Edit',['class' => 'btn btn-success edit-btn'])}}
						{!!Form::close()!!}
						{{-- delete --}}
						{!!Form::open(['action' => ['AppController@delete', $ga->id], 'method' =>'POST','class' =>'pull-right'])!!}
							{{Form::hidden('_method','DELETE')}}
							{{Form::submit('Delete',['class' => 'btn btn-danger delete-btn'])}}
						{!!Form::close()!!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
       </div>
    </div>
</div>
@endsection