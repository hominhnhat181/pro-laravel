@extends('layouts/master') 
@section('title', 'Detail') 
@section('content')
<section class="ftco-section">
    <div class="luis">

        @foreach ($allthingD as $tp)

        <div class="row">
            
            <div class="col-lg-12 mb-5 ftco-animate fadeInUp ftco-animated">
                <a   href="layout/images/{{$tp->image}}" class="image-popup prod-img-bg"><img style="max-height: 300px" src="layout/images/{{$tp->image}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
        </div>
        <div class="col-lg-12 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
            <h3>{{$tp->name}}</h3>
            @foreach ($allType as $item)<a href="{{URL('types-'.$item->id)}}"><h5 class="detail-typex" >{{{ __($item->typeName) }}}</h5></a>@endforeach
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
            <p style="color: rgb(22, 22, 22)">{{$tp->desc}}</p>

        </div>
        
    </div>
    <div class="bottom__content row mt-5">
        <div class="bottom__button  nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active mr-lg-1 fadeInUp ftco-animated" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">{{ __('Configuration') }}</a>

                <a class="nav-link ftco-animate mr-lg-1 fadeInUp ftco-animated" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">{{ __('Link Download') }}</a>

                <a class="nav-link ftco-animate fadeInUp ftco-animated" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">{{ __('Tutorial') }}</a>

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
<section class="content-item" id="comments">
    <div class="container">   
    	<div class="row">
            <div class="col-sm-12">   
                <form>
                	<h3 class="pull-left">New Comment</h3>
                	
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-3 col-lg-2 hidden-xs">
                            	<img class="img-responsive" src="layout/images/nhat.jpg">
                            </div>
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                                <button type="submit" class="btn btn-normal pull-right">Submit</button>
                            </div>
                            
                        </div>  	
                    </fieldset>
                </form>
                
                <h3>4 Comments</h3>
                
                <!-- COMMENT 1 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">Thầy Bình</h4>
                        <p>Ờ Mây Zing, Gút Chóp Em  {•-<} </p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 1 - END -->
                
                <!-- COMMENT 2 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">Anh Hiếu PC</h4>
                        <p>Game chi mà chi lạ rứa, chơi răng mà hắn không nghe chi hết rứaaa </p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2021</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 2 - END -->
                
                <!-- COMMENT 3 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">Crush</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 3 - END -->
                
                <!-- COMMENT 4 - START -->
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt=""></a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar"></i>27/02/2014</li>
                            <li><i class="fa fa-thumbs-up"></i>13</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class=""><a href="">Like</a></li>
                            <li class=""><a href="">Reply</a></li>
                        </ul>
                    </div>
                </div>
                <!-- COMMENT 4 - END -->
            
            </div>
        </div>
    </div>
</section>
<style>
    #header__content{
        max-height: 400px !important;
    }
    .hero-wrap{
        background-attachment: initial !important;
        max-height: 80px;
        background-size: cover;
    }
    #header__content  .mb-4, .p  ,.name__content{
        display: none;
    }
    .ftco-navbar-light .navbar-brand .name__change{
        margin-left: -5px !important;
    }
    .ftco-navbar-light .navbar-brand .name__change::before{
        content: "detail";
    }
    /* comment */
    .content-item {
    padding:30px 0;
	background-color:#FFFFFF;
}

.content-item.grey {
	background-color:#F0F0F0;
	padding:50px 0;
	height:100%;
}

.content-item h2 {
	font-weight:700;
	font-size:35px;
	line-height:45px;
	text-transform:uppercase;
	margin:20px 0;
}

.content-item h3 {
	font-weight:400;
	font-size:20px;
	color:#555555;
	margin:10px 0 15px;
	padding:0;
}

.content-headline {
	height:1px;
	text-align:center;
	margin:20px 0 70px;
}

.content-headline h2 {
	background-color:#FFFFFF;
	display:inline-block;
	margin:-20px auto 0;
	padding:0 20px;
}

.grey .content-headline h2 {
	background-color:#F0F0F0;
}

.content-headline h3 {
	font-size:14px;
	color:#AAAAAA;
	display:block;
}


#comments {
    box-shadow: 0 -1px 6px 1px rgba(0,0,0,0.1);
	background-color:#FFFFFF;
}

#comments form {
	margin-bottom:30px;
}

#comments .btn {
	margin-top:7px;
}

#comments form fieldset {
	clear:both;
}

#comments form textarea {
	height:100px;
}

#comments .media {
	border-top:1px dashed #DDDDDD;
	padding:20px 0;
	margin:0;
}

#comments .media > .pull-left {
    margin-right:20px;
}

#comments .media img {
	max-width:100px;
}

#comments .media h4 {
	margin:0 0 10px;
}

#comments .media h4 span {
	font-size:14px;
	float:right;
	color:#999999;
}

#comments .media p {
	margin-bottom:15px;
	text-align:justify;
}

#comments .media-detail {
	margin:0;
    display: flex;
}

#comments .media-detail li {
	color:#AAAAAA;
	font-size:12px;
	padding-right: 10px;
	font-weight:600;
}

#comments .media-detail a:hover {
	text-decoration:underline;
}

#comments .media-detail li:last-child {
	padding-right:0;
}

#comments .media-detail li i {
	color:#666666;
	font-size:15px;
	margin-right:10px;
}
.img-responsive{
    max-width: 100%;
}
</style>
@endsection