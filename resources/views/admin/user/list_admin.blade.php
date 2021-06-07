@extends('admin/layouts/adMaster')
@section('content_list_admin')
<div class="grid_10">
    <div class="box round first grid">
        <h2>List Admin</h2>
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
					<th>Admin name</th>
					<th>Custom</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data_ad as $admin)
				<tr class="odd gradeX" style="text-align: center">
					<td>{{$admin->id}}</td>
					<td>{{$admin->email}}</td>
					<td style="justify-content: center; display: flex;">
						{{-- edit --}}
						{!!Form::open(['action' => ['adminController@get', $admin->id], 'method' =>'POST','class' =>'pull-right'])!!}
							{{Form::hidden('_method','get')}}
							{{Form::submit('Edit',['class' => 'btn btn-success edit-btn'])}}
						{!!Form::close()!!}
						{{-- delete --}}
						{!!Form::open(['action' => ['adminController@delete', $admin->id], 'method' =>'POST','class' =>'pull-right'])!!}
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