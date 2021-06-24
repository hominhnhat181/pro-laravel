<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','ADMIN PAGE')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/text.css')}}">
    <link rel="stylesheet" href="{{asset('css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/table/demo_page.css')}}">

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/jquery-1.6.4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.ui.core.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.ui.widget.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.ui.accordion.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.effects.core.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.effects.slide.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.ui.mouse.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-ui/jquery.ui.sortable.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/table/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/table/table.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/setup.js')}}" type="text/javascript"></script>

</head>
<style>
    a:hover{
        text-decoration: none;
    }
</style>
<body>
<div class="x">

{{-- Header --}}

    @include('admin/layouts/headerAdmin')
    @include('admin/layouts/sidebarAdmin')


    @section('content')
    @yield('content')


    @include('admin/layouts/footerAdmin')

{{-- Footer --}}

</div>
</body>
</html>