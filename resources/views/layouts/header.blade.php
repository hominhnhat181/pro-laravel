
<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 0906 449 581</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> Bluenight@gmail.com</a>

                    <a style="margin: 10px"> {{ __('Welcome') }}</a>

                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media mr-4">
                    <p class="mb-0 d-flex">
                        <a style=" font-size: 12px; line-height: 32px;" href="{{ route('app.setLocale', ['locale' => 'en']) }}" class="flex-c-m trans-04 p-lr-25">EN</a>
                        <a style=" font-size: 12px; line-height: 32px; margin-right:40px " href="{{ route('app.setLocale', ['locale' => 'vi']) }}" class="flex-c-m trans-04 p-lr-25">VI</a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
                <div class="reg">
                    @if (Auth::guest())
                    <p class="mb-0"><a style="margin-right: 10px" class="master" href="{{url('sign-up')}}" class="mr-2">{{ __('sign') }}</a> <a class="master" href="{{url('login')}}">{{ __('login') }}</a></p>
                    @else 
                        @if((Auth::user()->lever)< 1) 

                    <a data-toggle="modal" data-target="#exampleModal" class="master" style="margin-right: 10px; color: rgba(255, 255, 255, 0.6)"  href="">administrator-{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>
                   
                        @else

                    <a data-toggle="modal" data-target="#exampleModal1" class="master" style="margin-right: 10px; color: rgba(255, 255, 255, 0.6)"  href="">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>

                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{URL('luis')}}">Luis<span class="name__content">tore</span> <span class="name__change"></span></a>
        <div class="order-lg-last btn-group">
        </div>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

                <li style="margin-right: 4px">
                    <form class="form-search" action="{{URL('search')}}">
                        <input class="search" type="search" placeholder="Search?" name="search" required>
                        <i class="fa fa-search"></i>
                    </form>
                </li>
                <li class="nav-item active" id="menu__home"><a class="nav-link" href="{{URL('luis')}}" class="nav-link">{{__('home')}}</a></li>

                @foreach ($cat as $cat)

                <li class="nav-item dropdown" id="{{$cat->catName.$cat->id}}">
                    <a class="nav-link dropdown-toggle" href="{{URL(strtolower($cat->catName))}}" id="dropdown04" data-toggle="" aria-haspopup="true" aria-expanded="false">{{$cat->catName}}</a>
                    <div class="dropdown-menu">
                        
                        @foreach ($typ as $ty)

                            @if ($cat->id == $ty->categories_id)

                                <a class="dropdown-item" href="{{URL('types-'.$ty->id)}}">{{$ty->typeName}}</a> 

                            @endif

                        @endforeach

                    </div>
                </li>

                @endforeach

                <li class="nav-item" id="menu__contact"><a class="nav-link" href="{{URL('contact')}}" class="nav-link">{{__('contact')}}</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('layout/images/game0.jpg'); " data-stellar-background-ratio="0.5">
    <div class="container">
        <div id="header__content" class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-8 ftco-animate d-flex align-items-end">
                <div class="text w-100 text-center">
                    <h1 class="mb-4">Good <span>Games</span> for Good <span>Moments</span>.</h1>
                    <p class="p"><button id="view" onclick="view()" class="btn btn-primary py-2 px-4">View Now</button> <a href="#list-start" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- MODAL --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <a class="dropdown-item" href="">{{__('account')}}</a>

        <a class="dropdown-item" style="margin-right: 10px" href="{{ url('admin') }}">{{ __('admin') }}</a>
        <a class="dropdown-item" href="{{ url('logoutpage') }}">{{ __('logout') }}  <i style="margin-left: 5px" class="fa fa-btn fa-sign-out"></i></a>
      </div>
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" id="modal2" role="document">
      <div class="modal-content">
       <a class="dropdown-item" href="">{{__('account')}}</a>
        <a class="dropdown-item" href="{{ url('logoutpage') }}">{{ __('logout') }}  <i style="margin-left: 5px" class="fa fa-btn fa-sign-out"></i></a>
      </div>
    </div>
</div>
<style>
    
    .form-search {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: all 1s;
        width: 31px;
        height: 30px;
        background: white;
        box-sizing: border-box;
        border-radius: 25px;
        border: 4px solid white;
        padding: 5px;
    }
    
    .search {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 25px;
        line-height: 30px;
        outline: 0;
        border: 0;
        display: none;
        font-size: 1em;
        border-radius: 20px;
        padding: 0;
    }
    
    .form-search .fa {
        box-sizing: border-box;
        padding: 10px;
        width: 32.5px;
        height: 33px;
        position: absolute;
           top: -31%;
    right: -18%;
        border-radius: 20px;
        color: #07051a;
        text-align: center;
        font-size: 1em;
        transition: all 1s;
    }
    
    .form-search:hover {
        width: 200px;
        cursor: pointer;
    }
    
    .form-search:hover .search {
        display: block;
        height: 25px;
    }
    
    .form-search:hover .fa {
        background: #07051a;
        color: white;
        position: absolute;
        widows: 25px;
        height: 33px;
        right: -5%;
    }
    .modal-content{
        max-width: 180px;
    }
    .modal-dialog{
    position: relative;
    right: -43%;
    top: 0%;
    }
    #modal2{
    position: relative;
    right: -48%;
    top: 0%;
    }
    .social-media .mb-0  a {
        color: rgba(255, 255, 255, 0.6);
    }
    .social-media .mb-0  span {
        color: rgba(255, 255, 255, 0.6);
    }
    
</style>
<script>
    function view(){
        window.scrollTo(0, 800);
    }
</script>