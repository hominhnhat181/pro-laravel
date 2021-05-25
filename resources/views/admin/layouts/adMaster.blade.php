<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','ADMIN PAGE')</title>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  

{{-- bootraps --}}
    

</head>
<body>
<div class="x">

{{-- header --}}

    @include('admin/layouts/headerAdmin')
    @include('admin/layouts/sidebarAdmin')
  


{{-- endHeader -- begin -- content --}}

{{-- admin --}}

    @section('content_add_admin')
    @yield('content_add_admin')

    @section('content_edit_admin')
    @yield('content_edit_admin')

    @section('content_list_admin')
    @yield('content_list_admin')

{{-- category --}}

    @section('content_add_category')
    @yield('content_add_category')
    
    @section('content_edit_category')
    @yield('content_edit_category')

    @section('content_list_category')
    @yield('content_list_category')

{{-- type --}}

    @section('content_add_type')
    @yield('content_add_type')

    @section('content_edit_type')
    @yield('content_edit_type')

    @section('content_list_type')
    @yield('content_list_type')

{{-- object --}}

    @section('content_add_object')   
    @yield('content_add_object')   

    @section('content_edit_object')
    @yield('content_edit_object')   
  
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