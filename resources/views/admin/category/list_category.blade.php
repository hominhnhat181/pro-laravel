@extends('admin/layouts/adMaster')
@section('title', 'List Categories')

@section('content')
<div class="grid_10">
    <div class="box round first grid">
        <h2>List Category</h2>
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
				<tr style="text-align: center">
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

					<td style="justify-content: center; display: flex;">
						{{-- edit --}}
						{!!Form::open(['action' => ['CategoryController@get', $cat->id], 'method' =>'POST','class' =>'pull-right'])!!}
						{{Form::hidden('_method','get')}}
						{{Form::submit('Edit',['class' => 'btn btn-success edit-btn'])}}
						{!!Form::close()!!}
						{{-- delete --}}
						{!!Form::open(['action' => ['CategoryController@delete', $cat->id], 'method' =>'POST','class' =>'pull-right'])!!}
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