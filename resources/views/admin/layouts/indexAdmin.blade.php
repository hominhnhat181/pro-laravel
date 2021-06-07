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
                  <h2>Anh Admin nghe bài nhạc láy tinh thần lào :333</h2>
                 <h1>{{ app\Helpers\Helper::helper() }}</h1> 
                  {{-- <iframe src="https://www.nhaccuatui.com/lh/auto/m3liaiy6vVsF" width="620" height="587" frameborder="0" allowfullscreen allow="autoplay"></iframe> --}}
                </div>
            </div>
        </div>
@endsection
