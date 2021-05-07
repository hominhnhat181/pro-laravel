@extends('layouts/master') @section('title', 'Detail') @section('detail')
<section class="ftco-section">
    <div class="luis">

        @foreach ($allthingD as $tp)

        <div class="row">
            <div class="col-lg-12 mb-5 ftco-animate fadeInUp ftco-animated">
                <a  href="layout/images/{{$tp->image}}" class="image-popup prod-img-bg"><img src="layout/images/{{$tp->image}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
        </div>
        <div class="col-lg-12 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
            <h3>{{$tp->name}}</h3>
            @foreach ($allType as $item)<h5>{{$item->typeName}}</h5>@endforeach
            <div id="rating" class="rating d-flex">
                <p class="text-left mr-4">
                    <a href="#" class="mr-2">5.0</a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                    <a href="#"><span class="fa fa-star"></span></a>
                </p>
                <p class="text-left mr-4">
                    <a href="#" class="mr-2" style="color: #000;">8,180 <span style="color: #bbb;">Download</span></a>
                </p>
                <p class="text-left">
                    <a href="#" class="mr-2" style="color: #000;">51,810 <span style="color: #bbb;">View</span></a>
                </p>
            </div>
            <p>{{$tp->desc}}</p>

        </div>
        
    </div>
    <div class="bottom__content row mt-5">
        <div class="bottom__button  nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active mr-lg-1 fadeInUp ftco-animated" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Cấu hình </a>

                <a class="nav-link ftco-animate mr-lg-1 fadeInUp ftco-animated" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Link Download</a>

                <a class="nav-link ftco-animate fadeInUp ftco-animated" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Hướng dẫn</a>

            </div>
        </div>
        <div class="col-md-12 tab-wrap">

            <div class="tab-content bg-light" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                    <div class="card-body">
                        <div class="game_area_sys_req sysreq_content active">
                            <div id="cauhinh_div" class="row">
                                <div class="game_area_sys_req_leftCol col-lg-6">
                                    <ul>
                                        <strong>Minimum:</strong><br>
                                        <ul class="bb_ul">
                                            <li>Requires a 64-bit processor and operating system<br></li>
                                            <li><strong>OS:</strong> Windows 7<br></li>
                                            <li><strong>Processor:</strong> Quad-core Intel or AMD, 2.5 GHz<br></li>
                                            <li><strong>Memory:</strong> 8 GB RAM<br></li>
                                            <li><strong>Graphics:</strong> NVIDIA GeForce 760 GTX or AMD Radeon R9 280<br></li>
                                            <li><strong>Network:</strong> Broadband Internet connection<br></li>
                                            <li><strong>Storage:</strong> 5 GB available space</li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="game_area_sys_req_rightCol col-lg-6">
                                    <ul>
                                        <strong>Recommended:</strong><br>
                                        <ul class="bb_ul">
                                            <li>Requires a 64-bit processor and operating system<br></li>
                                            <li><strong>OS:</strong> Windows 10 64-bit<br></li>
                                            <li><strong>Processor:</strong> Intel Core i7-4770K or AMD Ryzen 5 2600<br></li>
                                            <li><strong>Memory:</strong> 8 GB RAM<br></li>
                                            <li><strong>Graphics:</strong> NVIDIA GeForce 1060-6GB or AMD RX 580<br></li>
                                            <li><strong>Network:</strong> Broadband Internet connection<br></li>
                                            <li><strong>Storage:</strong> 5 GB available space</li>
                                        </ul>
                                    </ul>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                    <div class="p-4">
                        <button class="link__download"><a href="">Google Driver</a></button>
                        <button class="link__download"><a href="">FShare</a></button>
                        <button class="link__download"><a href="">MEGA</a></button>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                    <div class=" p-4" style="color: black">
                         <P>google and youtube hân hạnh tài trợ :D</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</section>
@endsection