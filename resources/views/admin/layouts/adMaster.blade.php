<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','ADMIN PAGE')</title>
    
    {{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
    <link rel="stylesheet" href="{{url('css/reset.css')}}">
    <link rel="stylesheet" href="{{url('css/text.css')}}">
    <link rel="stylesheet" href="{{url('css/grid.css')}}">
    <link rel="stylesheet" href="{{url('css/layout.css')}}">
    <link rel="stylesheet" href="{{url('css/nav.css')}}">
    <link rel="stylesheet" href="{{url('css/table/demo_page.css')}}">
    {{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
    <script src="{{url('js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui/jquery.ui.core.min.js')}}" type="text/javascript"></script>

    <script src="{{url('js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/jquery-ui/jquery.ui.sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/table/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{url('js/table/table.js')}}" type="text/javascript"></script>
    <script src="{{url('js/setup.js')}}" type="text/javascript"></script>

    
</head>
<body>
<div class="container">

{{-- header --}}

    @include('admin/layouts/headerAdmin')
    @include('admin/layouts/sidebarAdmin')
    


{{-- endHeader -- begin -- content --}}
    @section('content_add_category')
    @yield('content_add_category')
    
    @section('content_edit_category')
    @yield('content_edit_category')

    @section('content_list_category')
    @yield('content_list_category')

    @section('content_list_object')
    @yield('content_list_object')
    
    
    @section('content')
    @yield('content')

{{-- endContent -- begin -- footer  --}}

    @include('admin/layouts/footerAdmin')

{{-- endFotter --}}

</div>

    
</body>
</html>