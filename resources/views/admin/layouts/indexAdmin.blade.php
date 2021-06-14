@extends('admin/layouts/adMaster')
@section('title', 'Home')

@section('content')
        <div class="grid_10">
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">               
                  @if (session('success'))
                    <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                    </div>
                @endif
                </div>
                <div style="text-align: center">
                  
                 <h1>{{ app\Helpers\Helper::helper() }}</h1> 
                
                </div>
            </div>
        </div>
@endsection
