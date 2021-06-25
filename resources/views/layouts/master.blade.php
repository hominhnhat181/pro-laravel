<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dark & Light</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('layout/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('layout/css/style.css')}}">

  </head>
  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=495127995056192&autoLogAppEvents=1" nonce="mgnraTKs"></script>

  {{-- header --}}

    @include('layouts/header')

{{-- Content --}}

    @section('content')
    @yield('content')

    @include('layouts/footer')

{{-- endFotter --}}

  </body>
</html>