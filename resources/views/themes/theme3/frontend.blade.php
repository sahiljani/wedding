<!doctype html>
<?php 
$bridename = explode(" ",$alldata->bride_name);


$groomname = explode(" ",$alldata->groom_name);


?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Theme Title-->
        <title>Wedding Responsive HTML Template</title>
        <meta name="description" content="">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
        <link rel="apple-touch-icon" href="favicon.png">
        
		<!-- All css Here -->
        <!-- All plugins css -->
        <link rel="stylesheet" href="{{  URL::asset("assets/theme3/css/allplugins.css") }}">
		<!-- Style css -->
		<link rel="stylesheet" href="{{  URL::asset("assets/theme3/style.css") }}">
		<!-- Responsive css -->
        <link rel="stylesheet" href="{{  URL::asset("assets/theme3/css/responsive.css") }}">

        <!-- Customization css -->
        <!--If u need any change then use this css file-->
        <link rel="stylesheet" href="{{  URL::asset("assets/theme3/css/custom.css") }}">

		<!-- Modernizr JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/vendor/modernizr-2.8.3.min.js") }}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      <!-- preloader Start -->
		{{-- <div id="preloader">
			<div id="status"><img src="preloader.gif" id="preloader_image" alt="loader">
			</div>
		</div> --}}

        <!--Header wrapper start here-->
        <header id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-10">
                        <div class="logo">
                            <a href="index.html">
                                <img class="lozad" src="{{  URL::asset("assets/images/logo/logo.png") }}" alt=""/>
                                <span class="logoname">{{ $groomname[0] }} weds {{ $bridename[0] }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9 hidden-xs">
                        <div class="main-menu menu_scroll">
                            <nav>
                                <ul>
                                    <li><a href="0">Home</a></li>
                                    <li><a href="1">About Us</a></li>
                                    <li><a href="2">Events</a></li>
                                    <li><a href="3">Gallery</a></li>
                                    <li><a href="4">Love Story </a></li>
                                    <li><a href="5">Blog</a></li>
                                    <li><a href="6">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
			<!--Responsive Menu area--> 
            <div class="mobilemenu">
                <div class="mobile-menu menu_scroll visible-xs">
                    <nav>
                        <ul>
                            <li><a href="0">Home</a></li>
                            <li><a href="1">About Us</a></li>
                            <li><a href="2">Events</a></li>
                            <li><a href="3">Gallery</a></li>
                            <li><a href="4">Love Story </a></li>
                            <li><a href="5">Blog</a></li>
                            <li><a href="6">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--Responsive Menu area End-->
        </header>
        <!--Header wrapper end here-->
        <!--Slider wrapper start here-->
        <section section-scroll='0' class="slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 pd-0">
                        <div class="sliders">
                            @foreach (json_decode($alldata->slider_images) as $images) 
                            <div class="slider-list">
                                  
                                <div class="slider-img">
                                    <figure><img src="{{  URL::asset("assets/images/$alldata->id/slider/$images") }}" alt=""/></figure>
                                </div> 
                                                            
                                <div class="slider-con">
                                    <div class="content">
                                        <h2 class="wow animated fadeInDown" data-wow-duration="1s">{{ $groomname[0] }} <br><span>&</span> {{ $bridename[0] }}<</h2>
                                        <span class="date wow animated fadeInUp" data-wow-duration="1s">{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</span>
                                        <p class="wow animated fadeInUp" data-wow-duration="1.5s">Save The Date</p>
                                    </div>
                                </div>
                                
                            </div>  
                            @endforeach                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Slider wrapper end here-->
        <!--About wrapper start here-->
        <section section-scroll='1' class="about-area section sectionbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>ARE GETTING MARRIED!</p>
                            <h2>Groom and Bride</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="about-list">
                            <div class="imgs"><figure><img src="{{  URL::asset("assets/images/$alldata->id/$alldata->groom_image") }}" alt=""/></figure></div>
                            <div class="content">
                                <h2>{{ $groomname[0] }}</h2>
                                <p>( S/o Mrs. {{ $alldata->groom_mother_name }} & Mr. {{ $alldata->groom_father_name }} )</p>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-invitation">
                            <div class="content">
                                <h2 class="wow animated fadeInUp" data-wow-duration="1s">Invitation</h2>
                                <p class="wow animated fadeInUp" data-wow-duration="1.3s">We inviting you and <br>your family on</p>
                                <strong class="wow animated fadeInUp" data-wow-duration="1.6s">{{ date("l", strtotime($marriage->marriage_date)); }}
                                    <br>{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</strong>
                                <span class="wow animated fadeInUp" data-wow-duration="1.9s">{{ $alldata->home_location }}</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="about-list">
                            <div class="imgs">
                                <figure>
                                    <img src="{{  URL::asset("assets/images/$alldata->id/$alldata->bride_image") }}" alt=""/>
                                </figure>
                            </div>
                            <div class="content">
                                <h2>{{ $bridename[0] }}</h2>
                                <p>( S/o Mrs. {{ $alldata->bride_mother_name }} & Mr. {{ $alldata->bride_father_name }} )</p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About wrapper end here-->
        <!--Counter wrapper start here-->
        <section class="counter-area section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="cont-con">
                            <h2>until we<br>get married!</h2>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="counter-lists counter">
                            <ul>
                                <li class="wow animated fadeInRight" data-wow-duration="1.9s"><div class="cons"><span class="days">00</span><p>Days</p></div></li>
                                <li class="wow animated fadeInRight" data-wow-duration="1.6s"><div class="cons"><span class="hours">00</span><p>hours</p></div></li>
                                <li class="wow animated fadeInRight" data-wow-duration="1.3s"><div class="cons"><span class="minutes">00</span><p>minutes</p></div></li>
                                <li class="wow animated fadeInRight" data-wow-duration="1s"><div class="cons"><span class="seconds">00</span><p>seconds</p></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter wrapper End here-->
        <!--Family wrapper start here-->
        {{-- <section class="family-area section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>most imp. persons</p>
                            <h2>Lovable Family</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="family-tabbox">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#groom" aria-controls="groom" role="tab" data-toggle="tab"><img src="assets/images/family/sm-1.jpg" alt="Groom"><p>Jasmine</p></a></li>
                                <li role="presentation"><a href="#bride" aria-controls="bride" role="tab" data-toggle="tab"><img src="assets/images/family/sm-2.jpg" alt="Bride"><p>Hussain</p></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="groom">
                                    <div class="familyslider">
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/2.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/3.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/4.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="bride">
                                    <div class="familyslider">
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/2.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/3.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/4.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="familyinfo">
                                                <figure><img src="assets/images/family/1.jpg" alt=""/></figure>
                                                <div class="content">
                                                    <h2>Mr. Husbain malik</h2>
                                                    <p>(Hussain’s Father)</p>
                                                    <ul>
                                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Family wrapper end here-->
        <!--Event wrapper start here-->
        <section section-scroll='2' class="event-area section sectionbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Ceremony & party</p>
                            <h2>THE WEDDING EVENT</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach (json_decode( $alldata->events) as $key => $items)
                    <div class="col-md-4 col-sm-12 allevents">
                        <div class="event-infobox">
                            <h2>{{ $items[0] }}</h2>
                            <h1>{{ date("h:i A", strtotime($items[1])); }}</h1>
                            <span>{{ $alldata->home_location }}</span>
                            <div class="clearfix"></div>
                            <a href="{{ $alldata->Jan_details[1] }}" class="btgbtn">
                                <img src="{{  URL::asset("assets/images/map.png") }}" alt="Map" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4 col-sm-12">
                        <div class="event-img text-center">
                            <figure><img src="assets/images/about/3.jpg" alt=""/></figure>
                        </div>
                    </div> --}}
                    
                </div>
            </div>
        </section>
        <!--Event wrapper End here-->
        <!--Invitation wrapper start here-->
        <section class="invitation-area section bg-img af jarallax" style="background-image: url({{  URL::asset("/assets/images/theme3bg.jpg") }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Invitation</p>
                            <h2>Be our guest!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-md-offset-1">
                        <div class="inviting-con">
                            <h2>You’re Invited <span>{{ $groomname[0] }} <br><span>&</span> {{ $bridename[0] }} Wedding</h2>                            
                    </div>                    
                </div>
            </div>
        </section>
        <!--Invitation wrapper end here-->
        <!--Testimonial wrapper start here-->
        <section class="testimonial-srea section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="testimonial-slider">
                            <div class="testimonial-list">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>by Jhon Doe</p>
                            </div>
                            <div class="testimonial-list">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>by Jhon Doe</p>
                            </div>
                            <div class="testimonial-list">
                                <h2>“ Better to have loved and lost, than to have never loved ”</h2>
                                <p>by Jhon Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial wrapper end here-->
        <!--Gallery wrapper start here-->
        <section section-scroll='3' class="gallery_area_2 section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-col-sm-12">
                        <div class="section-heading">
                            <p>{{ $groomname[0] }} <span>&</span> {{ $bridename[0] }}</p>
                            <h2>memorable photo gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 ">

                        <div class="masonry-gallery-rows gallery">
                         @foreach (json_decode($alldata->image_gallery) as $key => $image)   
                            
                           <a href="{{  URL::asset("assets/images/$alldata->id/imggallary/$image") }}">
                                            <img src="{{  URL::asset("assets/images/$alldata->id/imggallary/$image") }}" alt=""/>
                           </a>
                        
                         @endforeach  
                        </div>

                    </div>                   
                </div> 
            </div>
        </section>
        <!--Gallery wrapper End here-->
        <!--Blog wrapper start here-->
        {{-- <section section-scroll='5' class="blog-area section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Wedding Journal</p>
                            <h2>FROM OUR BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="blogs">
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-img">
                                    <figure><img src="assets/images/blog/1.jpg" alt=""/></figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-content">
                                    <h2>Planning Honeymoon Trip</h2>
                                    <ul>
                                        <li><i class="far fa-calendar"></i><span>20 May 2017</span></li>
                                        <li><i class="fas fa-eye"></i><span>240 View</span></li>
                                        <li><i class="fas fa-heart"></i><span>143 Likes</span></li>
                                    </ul>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.</p>
                                    <a href="#" class="btn1">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="blogs">
                            <div class="col-md-6 col-sm-12 pd-0 floatright">
                                <div class="blog-img">
                                    <figure><img src="assets/images/blog/2.jpg" alt=""/></figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-content">
                                    <h2>Planning Honeymoon Trip</h2>
                                    <ul>
                                        <li><i class="far fa-calendar"></i><span>20 May 2017</span></li>
                                        <li><i class="fas fa-eye"></i><span>240 View</span></li>
                                        <li><i class="fas fa-heart"></i><span>143 Likes</span></li>
                                    </ul>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.</p>
                                    <a href="#" class="btn1">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="blogs">
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-img">
                                    <figure><img src="assets/images/blog/3.jpg" alt=""/></figure>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 pd-0">
                                <div class="blog-content">
                                    <h2>Planning Honeymoon Trip</h2>
                                    <ul>
                                        <li><i class="far fa-calendar"></i><span>20 May 2017</span></li>
                                        <li><i class="fas fa-eye"></i><span>240 View</span></li>
                                        <li><i class="fas fa-heart"></i><span>143 Likes</span></li>
                                    </ul>
                                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis.</p>
                                    <a href="#" class="btn1">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="blog-btn">
                            <a href="#" class="btn1">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Blog wrapper end here-->
        <!--Love story wrapper start here-->
        {{-- <section section-scroll='4' class="love-story-area section sectionbg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>Jenny & Mark</p>
                            <h2>Our true love story</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="love-story">
                            <div class="top-btn text-center mr-b50">
                                <a href="#" class="btn1">2015</a>
                            </div>
                            <div class="story-list">
                                <div class="col-md-6 col-sm-12 pd-0">
                                    <div class="story lefts">
                                        <div class="storys">
                                            <figure><img src="assets/images/story/1.jpg" alt=""/></figure>
                                            <div class="content">
                                                <span>20 May 2015</span>
                                                <h3>Our First Met</h3>
                                                <h4>That day changed Life</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean soin, lorem quis bibendum aucr akshay handge..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story lefts">
                                        <div class="storys">
                                            <figure><img src="assets/images/story/3.jpg" alt=""/></figure>
                                            <div class="content">
                                                <span>20 May 2015</span>
                                                <h3>Our First Met</h3>
                                                <h4>That day changed Life</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean soin, lorem quis bibendum aucr akshay handge..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story lefts">
                                        <div class="storys">
                                            <figure><img src="assets/images/story/5.jpg" alt=""/></figure>
                                            <div class="content">
                                                <span>20 May 2015</span>
                                                <h3>Our First Met</h3>
                                                <h4>That day changed Life</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean soin, lorem quis bibendum aucr akshay handge..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 pd-0">
                                    <div class="story rights first">
                                        <div class="storys">
                                            <figure><img src="assets/images/story/2.jpg" alt=""/></figure>
                                            <div class="content">
                                                <span>20 May 2015</span>
                                                <h3>Our First Met</h3>
                                                <h4>That day changed Life</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean soin, lorem quis bibendum aucr akshay handge..</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="story rights">
                                        <div class="storys">
                                            <figure><img src="assets/images/story/4.jpg" alt=""/></figure>
                                            <div class="content">
                                                <span>20 May 2015</span>
                                                <h3>Our First Met</h3>
                                                <h4>That day changed Life</h4>
                                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean soin, lorem quis bibendum aucr akshay handge..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="bottom-btn text-center mr-t50">
                                <a href="#" class="btn1">2017</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Love story wrapper end here-->
        <!--Rspv wrapper start here-->
        {{-- <section class="rspv-area section bg-img jarallax af">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-heading">
                            <p>RSVP Here</p>
                            <h2>Are You Attending?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
			
                    <div class="col-md-8 col-sm-12 col-md-offset-2">
                        <div class="rspv-form">
                            <form>
                                <div class="col-sm-6 pd-l0">
                                    <fieldset><input type="text" name="full_name" placeholder="Name" class="require"></fieldset>
                                    <fieldset><input type="email" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid."></fieldset>
                                    <fieldset>
                                        <select name="guest_no" class="require">
                                            <option>Guest</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 pd-r0">
                                    <fieldset>
                                        <select name="event_name" class="require">
                                            <option>All Event</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </fieldset>
                                    <fieldset>
                                        <textarea placeholder="Message"></textarea>
                                    </fieldset>
                                </div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="response"></div>
							</div>
                                <div class="col-sm-12">
                                    <div class="rspbbtn">
                                       <button type="button" class="submitForm btn1" form-type="inquiry">Send a Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--Rspv wrapper end here-->
        <!--Contact wrapper start here-->
        <section section-scroll='6' class="contact-area section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4 text-center">
                        <div class="con-list">
                            <div class="icons">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <div class="content">
                                <h2>Home</h2>
                                <p>{{ $alldata->home_location }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 text-center">
                        <div class="con-list">
                            <div class="icons">
                                <span><i class="fas fa-phone fa-flip-horizontal"></i></span>
                            </div>
                            <div class="content">
                                <h2>Phone</h2>
                                <p>{!! str_replace(",", "</br>", $alldata->mobile_number); !!}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-sm-4 text-center">
                        <div class="con-list">
                            <div class="icons">
                                <span><i class="fas fa-envelope"></i></span>
                            </div>
                            <div class="content">
                                <h2>Email Us</h2>
                                <p>webstrot@gmail.com<br>handge.akshay@gmail.com</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--Contact wrapper end here-->
        <!--Footer wrapper start here-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="foo-logo">
                            <a href="index.html"><img src="assets/images/logo/logo2.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="copyright">
                            <p>@ Copyright 2017 All Rights Reserved. By Webstrot</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer wrapper end here-->

        
		<!-- All JavaScript Here -->

		<!-- jQuery latest version -->
        <script src="{{  URL::asset("assets/theme3/js/vendor/jquery-3.2.1.min.js") }}"></script>
		<!-- Bootstrap Core JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/bootstrap.min.js") }}"></script>
        <!-- Owl.carousel JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/owl.carousel.min.js") }}"></script>
        <!-- Bxslider JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/jquery.bxslider.min.js") }}"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/jquery.magnific-popup.min.js") }}"></script>
        <!-- masonry JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/masonry.pkgd.min.js") }}"></script>
		<!-- meanmenu JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/jquery.meanmenu.js") }}"></script>
        <!-- jarallax JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/jarallax.min.js") }}"></script>
		<!-- jQuery-ui JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/jquery-ui.min.js") }}"></script>
        <!-- counterup JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/jquery.downCount.js") }}"></script>
        <!-- wow JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/wow.min.js") }}"></script>
		<!-- Plugins JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/plugins.js") }}"></script>
		<!-- Init JavaScript -->
        <script src="{{  URL::asset("assets/theme3/js/main.js") }}"></script>
        <script>
            function e() {
	    var e = new Date;
	    e.setDate(19);
	    var dd = e.getDate();
	    var mm = e.getMonth() + 1;
	    var y = e.getFullYear();
        const curr_date = '{{ date("m/d/Y", strtotime($marriage->marriage_date)) }}';
	    var futureFormattedDate = curr_date + ' 12:00:00';
        console.log(futureFormattedDate);
	    return futureFormattedDate;
	}

	$('.counter').downCount({
		date: e(),
	    offset: 16
	});

    (()=> {

const maxRowH = 300; //px, max rows' height, you can change it
const containerSelector = '.masonry-gallery-rows';  // CSS selector of images' container
const itemSelector = '.masonry-gallery-rows img'; // CSS selector of images
const timeGap = 500; // time delay after window resize to rebuild gallery

window.addEventListener('load', (event)  => {

    let containers = document.querySelectorAll(containerSelector);

    for (let cont of containers) {

        let items = cont.querySelectorAll(itemSelector);
        let contStyle = window.getComputedStyle(cont, null);
        let contPadding = parseFloat(contStyle.getPropertyValue('padding-left')) + parseFloat(contStyle.getPropertyValue('padding-right'));
        let itemStyle = window.getComputedStyle(items[0], null);
        let itemPadding = parseFloat(itemStyle.getPropertyValue('padding-left'));
        itemPadding += parseFloat(itemStyle.getPropertyValue('padding-right'));
        itemPadding += parseFloat(itemStyle.getPropertyValue('margin-left'));
        itemPadding += parseFloat(itemStyle.getPropertyValue('margin-right'));
        itemPadding += parseFloat(itemStyle.getPropertyValue('border-width')) * 2;
        let itemK = [];
        for (let i = 0; i < items.length; i++) {
            itemK[i] = items[i].naturalWidth / items[i].naturalHeight;
        }
        let isUnderConstruction = false;

        let buildGallery = () => {
            isUnderConstruction = true;
            let contW = cont.clientWidth - contPadding;
            let startItemInd = 0;
            let itemNum, summK, ind, rowH;

            do {
                itemNum = 0;
                summK = 0;
                ind = startItemInd;
                do {
                    itemNum++;
                    summK += itemK[ind];
                    rowH = ( contW - itemPadding * itemNum ) / summK;
                    ind++;
                } while (rowH > maxRowH && ind < items.length);

                if (rowH > maxRowH * 1.5) rowH = maxRowH;

                for (let i = startItemInd; i < ind; i++) {
                    items[i].style.height = `${rowH}px`;
                }
                startItemInd = ind;
            } while (ind < items.length);
            isUnderConstruction = false;
            let emerge = setTimeout(() => {
                cont.style.opacity = '1';
            }, timeGap);
        };

        let rebuild = setTimeout(buildGallery, timeGap);

        window.addEventListener('resize', () => {
            if (!isUnderConstruction) {
                cont.style.opacity = '0';
                rebuild = setTimeout(buildGallery, timeGap);
            }
        });

    }
})

})();

$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
	});

        </script>
    </body>
</html>
