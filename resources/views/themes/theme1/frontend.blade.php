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

        <title>{{ $alldata->groom_name }} weds {{ $alldata->bride_name }}</title>

        <meta name="description" content="">



        <!-- Place favicon.ico in the root directory -->

        <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

        <link rel="apple-touch-icon" href="favicon.png">

        

		<!-- All css Here -->

        <!-- All plugins css -->
        
        <link rel="stylesheet" href="{{  URL::asset("assets/theme1/css/allplugins.css") }}">



		<!-- Style css -->

		<link rel="stylesheet" href="{{  URL::asset("assets/theme1/style.css") }}">

		<!-- Responsive css -->
       
        <link rel="stylesheet" href="{{  URL::asset("assets/theme1/css/responsive.css") }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1/assets/css/atcb.min.css">


        <!-- Customization css -->

        <!--If u need any change then use this css file-->

        <link rel="stylesheet" href="{{  URL::asset("assets/theme1/css/custom.css") }}">

        {{-- @vite(['assets/style.css', 'assets/css/responsive.css']) --}}


		<!-- Modernizr JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/vendor/modernizr-2.8.3.min.js") }}"></script>



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->

    <style>
   
   
   .bx-controls-direction{
        display: none;
    }
    .innervivah{
          margin-top: 15px;
        }
        .wedname{
          color: #f33c3c;
          font-size: 30px;
          line-height: 40px;
        }
        .innervivahnames p{
          color:black; 
          font-size: 20px;
          line-height: 40px;
        }
        .names p{
          color:#f33c3c;
          margin-top: 20px!important;
          font-size:25px;
          line-height: 30px;
        }
        .section1{
          padding-top: 30px;
          padding-bottom: 30px;
        }
    </style>

    </head>

    <body>

       <!-- preloader Start -->

		{{-- <div id="preloader">

			<div id="status"><img src="{{  URL::asset("preloader.gif") }}" id="preloader_image" alt="loader">

			</div>

		</div> --}}





        <!--Slider area start here-->

        <section section-scroll='0' class="slider-area">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12 col-sm-12 pd-0">

                        <div class="sliders">
                            
                            @foreach (json_decode($alldata->slider_images) as $images)                             
                            

                            <div class="slider-list slid_one" style="background: url({{  URL::asset("assets/images/$alldata->id/slider/$images") }}) no-repeat center; background-size: cover;">

                                <div class="slider-con sliderbox">

                                    <div class="container">

                                        <div class="row">

                                            <div class="col-md-12 col-sm-12 ">

                                                <div class="content">

                                                    <div class="date wow animated fadeInDown" data-wow-duration="1.5s" >

                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>

                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">
                                                            {{ date("d/m/y", strtotime($marriage->marriage_date)); }}</em>

                                                    </div>
                                                   

                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s">
                                                        {{ $groomname[0] }} <span>&</span> {{ $bridename[0] }}</h2>

                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">ARE GETTING MARRIED!</p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            @endforeach
                    
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Slider area End here-->

        <!--Header area start here-->

        <header id="sticky">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-5 col-sm-3 col-xs-8">

                        <div class="logo">

                            <a href="index.html">
                                <img class="lozad" src="{{  URL::asset("assets/images/logo/logo.png") }}" alt=""/>
                                <span class="logoname">{{ $groomname[0] }} weds {{ $bridename[0] }}</span>
                            </a>

                        </div>

                    </div>

                    <div class="col-md-7 col-sm-9 hidden-xs">

                        <div class="main-menus menu_scroll">

                            <nav>

                                <ul>

                                    <li><a href="0">Home</a></li>

                                    <li><a href="1">About Us</a></li>

                                    <!-- <li><a href="2">Love Story</a></li> -->

                                    <li><a href="3">Events</a></li>

                                    <li><a href="4">Family</a></li>

                                    <li><a href="5">Gallery</a></li>

                                    <!-- <li><a href="6">Blog</a></li> -->

                                    <li><a href="7">Contact Us</a></li>

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

                            <li><a href="2">Love Story</a></li>

                            <li><a href="3">Events</a></li>

                            <li><a href="4">Family</a></li>

                            <li><a href="5">Gallery</a></li>

                            <li><a href="6">Blog</a></li>

                            <li><a href="7">Contact Us</a></li>

                        </ul>

                    </nav>

                </div>

            </div> 

            <!--Responsive Menu area End-->

        </header>

        <!--Header area end here-->

        <!--About area start here-->


        <section section-scroll="1" class="about_area section blockfor_pc section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-12 groom">

                        <div class="persons">

                            <figure>
                                <img class="lozad" src="{{  URL::asset("assets/images/$alldata->id/$alldata->groom_image") }}" alt="">
                            </figure>
                            
                            <div class="content">

                                <h2>{{ $alldata->groom_name }}</h2>

                                <p>( S/o Mrs. {{ $alldata->groom_mother_name }} & Mr. {{ $alldata->groom_father_name }} )</p>
        

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-12 invitaion">

                        <div class="about-con">

                            <h2>Invitation</h2>

                            <p>We inviting you and<br>your family on</p>

                            <span>{{ date("l", strtotime($marriage->marriage_date)); }}</span>

                            <h3>{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</h3>

                            <p>{{ $alldata->home_location }}<br></p>

                        </div>

                        <div class="con-img mr-t60">

                            <figure><img class="lozad" src="{{  URL::asset("assets/theme1/images/about/sm-1.jpg") }}" alt=""></figure>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-12 bride">

                        <div class="persons">

                            <figure><img class="lozad"  src="{{  URL::asset("assets/images/$alldata->id/$alldata->bride_image") }}" alt=""></figure>

                            <div class="content">

                                <h2>{{ $alldata->bride_name }}</h2>                               

                                <p>( S/o Mrs. {{ $alldata->bride_mother_name }} & Mr. {{ $alldata->bride_father_name }} )</p>                            

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section section-scroll="1" class="about_area section blockfor_mobile section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-12">

                        <div class="about-con">

                            <h2>Invitation</h2>

                            <p>We inviting you and<br>your family on</p>

                            <span>{{ date("l", strtotime($marriage->marriage_date)); }}</span>

                            <h3>{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</h3>

                            <p>{{ $alldata->home_location }}<br></p>

                        </div>
                        

                    </div>

                    <div class="col-md-4 col-sm-12 groom">

                        <div class="persons">

                            <figure><img class="lozad" src="{{  URL::asset("assets/images/$alldata->id/$alldata->groom_image") }}" alt=""></figure>

                            <div class="content">

                                <h2>{{ $alldata->groom_name }}</h2>

                                <p>( S/o Mrs. {{ $alldata->groom_mother_name }} & Mr. {{ $alldata->groom_father_name }} )</p>
        

                            </div>

                        </div>

                    </div>  
                    
                    <div class="con-img mr-t60">

                        <figure><img class="lozad" src="{{  URL::asset("assets/images/about/sm-1.jpg") }}" alt=""></figure>

                    </div>

                    <div class="col-md-4 col-sm-12">

                        <div class="persons">

                            <figure><img class="lozad" src="{{  URL::asset("assets/images/$alldata->id/$alldata->bride_image") }}" alt=""></figure>

                            <div class="content">

                                <h2>{{ $alldata->bride_name }}</h2>                               

                                <p>( S/o Mrs. {{ $alldata->bride_mother_name }} & Mr. {{ $alldata->bride_father_name }} )</p>                             

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--About area End here-->

        <!--Counter area start here-->

        <section class="counter-area section bg-img jarallax" style="background: url({{  URL::asset("/assets/images/banner/bg-1.jpg") }})" >

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-sm-12">

                        <div class="counter-con">

                            <p>We Are Waiting For...</p>

                            <h2><span>The</span> Adventure</h2>

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <div class="counter">

                            <ul>

                                <li><span class="days">00</span><p>Days</p></li>

                                <li><span class="hours">00</span><p>hours</p></li>

                                <li><span class="minutes">00</span><p>minutes</p></li>

                                <li><span class="seconds">00</span><p>seconds</p></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--Counter area End here-->

        <!--Event area start here-->

        <section section-scroll='3' class="event-area section section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <h2>The Wedding Event</h2>
<?php

      $jsondata = "";
        foreach (json_decode($alldata->events) as $key => $event) {
            $startdate = date('Y-m-d', strtotime($event[1]));
            $stattime = date('H:i', strtotime($event[1]));
           
            $jsondata .="{ 
                'name': '$event[0]',
'description':' $event[0]',
'startDate': '$startdate',
'startTime':'$stattime',
'endTime':'23:59' },";

        }
$jsondata = substr($jsondata, 0, -1);
$jsondata = str_replace("'",'"',$jsondata );
?>
                            <div class="atcb" style="display:none;">
                            {
                              "name":"Event Series",
                              "dates":[                                
                                    {!!  $jsondata !!}                       
                                ],
                              "location":"World Wide Web",
                              "options":[
                                "Apple",
                                "Google",
                                "iCal",
                                "Outlook.com",
                                "Yahoo"
                              ],
                              "timeZone":"Asia/Kolkata",
                              "trigger":"click",
                              "iCalFileName":"Multi-Date-Event"
                            }
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row" style="display: flex; flex-wrap: wrap;    justify-content: center;">
                
                    <!--
                    મંડપ મુહૂર્ત
                    -->

                    @foreach (json_decode( $alldata->events) as $key => $items)
                    
                    <div class="col-md-4 col-sm-6 ">

                        <div class="events eventlist">

                            <h2>{{ $items[0] }}</h2>

                            <button style="height: auto;">{{ date("h:i", strtotime($items[1])); }}<p style="font-size: 16px;">
                                {{ date("d/m/y", strtotime($items[1])); }}</p> </button>
                            

                        </div>

                    </div>

                    @endforeach                     


                </div>

            </div>

        </section>

        <!--Event area End here-->

        <!--Gallery area start here-->

        <section section-scroll='3' class="locationblock contact-area section section-bg" style="background: url({{  URL::asset("/assets/images/bglocation.gif") }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">                        
                        
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="info-list">
                            <div class="info-ico">
                                <img src="assets/images/locationicon.webp" style="width: 100px;" alt=""/>
                            </div>
                            <div class="info-content">                                
                                <h1>॥ જાન પ્રસ્થાન સ્થળ ॥</h1>
                                <h3>{{ $alldata->bride_father_name }}</h3>
                                <p style="font-size: 20px;
                                ">
                                    {{ json_decode($alldata->Jan_details)[0] }}
                                </p>
                                <a href="{{ json_decode($alldata->Jan_details)[1] }}" style="font-size: 20px;
                                color:white">
                                    Open Google Map
                                </a>                                 
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-3 col-sm-6">   
                        
                    </div>                    
                </div>
            </div>
        </section>
        


        

        <section section-scroll='3' class="event-area section1 section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading mt-5" style="background: url({{  URL::asset("/assets/images/icons/sec.png") }}) no-repeat center;">

                            <h2>॥ વિવાહ સંસ્કાર  ॥</h2>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="col-md-12 col-sm-12">
                            <div class="otherdetails events w-full h-full">
                                {!!  json_decode($alldata->other_details) !!}
                            </div>
                        </div>                        
                    </div>                                                
                </div>                

            </div>

        </section>      


       

        <section section-scroll='5' class="gallery-area section2 bg-img jarallax af">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <h2>Beautiful Memories</h2>

                        </div>

                    </div>

                </div>               

                <div class="masonry-gallery-rows" id="">
                        @foreach (json_decode($alldata->image_gallery) as $key => $image)
                         
                                <div class="gallery">

                                    <figure>

                                      
                                            <span><i class="fas fa-search"></i></span>
                                            <img src="{{  URL::asset("assets/images/$alldata->id/imggallary/$image") }}" alt=""/>
                                       

                                    </figure>
                                </div>
                             
                  
                    @endforeach  
                </div>

            </div>

        </section>    

        <section class="banner-area section bg-img af contact-area section-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-sm-12">

                        <div class="banner-con">

                            <h2>We are going to...
                            <span>                          
                                
                            </span> Celebrate <h2 class="groombridename">{{ $groomname[0] }} - {{ $bridename[0] }} <span></h2>  
                                <h2>Wedding</h2>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <div class="banner-con">

                            <div class="contact-info md:flex-row w-full md:w-[500px]">

                                <div class="info-list col-md-12">
    
                                    <div class="info-ico"><img src="{{  URL::asset("assets/images/icons/2.png") }}" alt=""></div>
    
                                    <div class="info-content1 banner-con">
    
                                        <h2>Location</h2>
    
                                        <p class="contactdetails">{{ $alldata->home_location }}<br></p>
    
                                    </div>
    
                                </div>
    
                                
                                <div class="info-list col-md-12">
    
                                    <div class="info-ico"><img src="{{  URL::asset("assets/images/icons/4.png") }}" alt=""></div>
    
                                    <div class="info-content1 banner-con">
    
                                        <h2>Mobile Number</h2>
    
                                        <p class="contactdetails">{{ $alldata->mobile_number }}</p>
    
                                    </div>
    
                                </div>
    
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>        

        {{-- <section section-scroll='4' class="family-area section bg-img jarallax af">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <h2>Lovable Family</h2>

                        </div>

                    </div> 

                </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="family-tabbox">

                            <!-- Nav tabs -->

                            <ul class="nav nav-tabs" role="tablist">                                
                                <li role="presentation" class="active">
                                    <a href="#bride" aria-controls="bride" role="tab" data-toggle="tab">
                                        <img src="assets/images/family/sm-2.jpg" alt="Bride">
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#groom" aria-controls="groom" role="tab" data-toggle="tab">
                                        <img src="assets/images/family/sm-1.jpg" alt="Groom"></a></li>
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                               
                                <div role="tabpanel" class="tab-pane fade in active" id="bride">

                                    <div class="familyslider">

                                        <div class="item">

                                           <div class="familyinfo">

                                               <figure><img src="assets/images/family/1.jpg" alt=""/></figure>

                                               <div class="content">

                                                   <h2>Mr. VinodBhai Padmani</h2>

                                                   <p>(Chintan’s Father)</p>                                                   

                                               </div>

                                           </div>

                                       </div>

                                       <div class="item">

                                           <div class="familyinfo">

                                               <figure><img src="assets/images/family/2.jpg" alt=""/></figure>

                                               <div class="content">

                                                   <h2>Mrs. GeetaBen Padmani</h2>

                                                   <p>(Chintan’s Mother)</p>
                                               </div>

                                           </div>

                                       </div>

                               

                                   </div>                                   
                                    

                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="groom">

                                    <div class="familyslider">

                                        <div class="item">

                                            <div class="familyinfo">

                                                <figure><img src="assets/images/family/g1.jpeg" alt=""/></figure>

                                                <div class="content">

                                                    <h2>Mr. JaysukhBhai Savaliya</h2>

                                                    <p>(Gopi’s Father)</p>
                                                   

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="familyinfo">

                                                <figure><img src="assets/images/family/g2.jpeg" alt=""/></figure>

                                                <div class="content">

                                                    <h2>Mrs. RaxaBen Savaliya</h2>

                                                    <p>(Gopi's Mother)</p>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="familyinfo">

                                                <figure><img src="assets/images/family/g3.jpeg" alt=""/></figure>

                                                <div class="content">

                                                    <h2>Mr. Nisarg  Savaliya</h2>

                                                    <p>(Gopi’s Brother)</p>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="familyinfo">

                                                <figure><img src="assets/images/family/g4.jpeg" alt=""/></figure>

                                                <div class="content">

                                                    <h2>Mrs. Darshti Savaliya</h2>
                                                    <p>(Gopi's Sister-in-law)</p>                                                    

                                                </div>

                                            </div>

                                        </div>

                                        <div class="item">

                                            <div class="familyinfo">

                                                <figure><img src="assets/images/family/g5.jpeg" alt=""/></figure>

                                                <div class="content">

                                                    <h2>Sukti Savaliya</h2>

                                                    <p>(Gopi's Niece)</p>
                                                    
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

       


        <!--Contact area end here-->

        <!--Footer area start here-->

        <footer>

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <!-- <div class="arroe-button">

                            <a href="#"><i class="fas fa-angle-up"></i></a>

                        </div> -->

                        <div class="copyright">

                            <p>Design with ❤️ by <span class="companyname">
                                <a href="https://cyberstrek.com/">CyberStrek Technologies</a>
                            </span></p></p>

                        </div>

                    </div>

                </div>

            </div>

        </footer>

        <!--Footer area End here-->

        <!-- All JavaScript Here -->



        <!-- jQuery latest version -->
        
        <script data-cfasync="false" src="{{  URL::asset("assets/theme1/js/email-decode.min.js") }}"></script>
        
        <script src="{{  URL::asset("assets/theme1/js/vendor/jquery-3.2.1.min.js") }}"></script>

        <!-- Bootstrap Core JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/bootstrap.min.js") }}"></script>

        <!-- Owl.carousel JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/owl.carousel.min.js") }}"></script>

        <!-- Bxslider JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/jquery.bxslider.min.js") }}"></script>

        <!-- Magnific Popup JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/jquery.magnific-popup.min.js") }}"></script>

        <!-- meanmenu JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/jquery.meanmenu.js") }}"></script>

        <!-- jarallax JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/jarallax.min.js") }}"></script>

        <!-- jQuery-ui JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/jquery-ui.min.js") }}"></script>

        <!-- Progressbar Animation JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/jquery.downCount.js") }}"></script>

        <!-- masonry JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/masonry.pkgd.min.js") }}"></script>

        <!-- wow JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/wow.min.js") }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1" async defer></script>

        <!-- Plugins JavaScript -->

        <script src="{{  URL::asset("assets/theme1/js/plugins.js") }}"></script>


        <!-- Init JavaScript -->

        
        <script src="{{  URL::asset("assets/theme1/js/main.js") }}"></script>


        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <script src="{{  URL::asset("assets/theme1/js/lozad.min.js") }}"></script>


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



        function initialize() {

        const observer = lozad();
        observer.observe();

                var map;

                var bounds = new google.maps.LatLngBounds();

                var mapOptions = {

                    mapTypeId: 'roadmap',

                    styles: [

                                {"featureType":"water","elementType":"geometry","stylers":[{"color":"#d1d1d1"},{"lightness":17}]},

                                {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#e1e1e1"},{"lightness":20}]},

                                {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fff"},{"lightness":17}]},

                              {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#fff"},{"lightness":29},{"weight":0.2}]},

                              {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fff"},{"lightness":18}]},

                              {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},

                              {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#d6e9b9"},{"lightness":21}]},

                              {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d6e9b9"},{"lightness":21}]},

                              {"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#d6e9b9"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#d6e9b9"},{"lightness":17},{"weight":1.2}]}]

                };

                                

                // Display a map on the page

                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

                map.setTilt(20);

                    

                // Multiple Markers

                var markers = [

                    ['West Bengal, India', 22.519984, 87.777172],

                ];

                                    

                // Info Window Content

                var infoWindowContent = [

                    ['<div class="info_content">' +

                    '<h4>Hotel Name</h4>' +

                     '</div>']

                

                ];

                    

                // Display multiple markers on a map

                var infoWindow = new google.maps.InfoWindow(), marker, i;

                

                var map = new google.maps.Map(document.getElementById('map_canvas'),

                mapOptions);

                var image = 'assets/images/icons/map-marker.png';

                // Loop through our array of markers & place each one on the map  

                for( i = 0; i < markers.length; i++ ) {

                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);

                    bounds.extend(position);

                    marker = new google.maps.Marker({

                        position: position,

                        map: map,

                        icon: image,

                        title: markers[i][0]

                    });

                    

                    // Allow each marker to have an info window    

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {

                        return function() {

                            infoWindow.setContent(infoWindowContent[i][0]);

                            infoWindow.open(map, marker);

                        }

                    })(marker, i));



                    // Automatically center the map fitting all markers on the screen

                    map.fitBounds(bounds);

                }



                // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)

                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {

                    this.setZoom(30);

                    google.maps.event.removeListener(boundsListener);

                });

          }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

    </body>

</html>

