<?php 
$bridename = explode(" ",$alldata->bride_name);


$groomname = explode(" ",$alldata->groom_name);

?>
<!doctype html>

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

        <link rel="stylesheet" href="{{  URL::asset("assets/theme2/css/allplugins.css") }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/add-to-calendar-button@1/assets/css/atcb.min.css">

		<!-- Style css -->

		<link rel="stylesheet" href="{{  URL::asset("assets/theme2/style.css") }}">

		<!-- Responsive css -->

        <link rel="stylesheet" href="{{  URL::asset("assets/theme2/css/responsive.css") }}">



        <!-- Customization css -->

        <!--If u need any change then use this css file-->

        <link rel="stylesheet" href="{{  URL::asset("assets/theme2/css/custom.css") }}">



		<!-- Modernizr JavaScript -->
        <script src="{{  URL::asset("assets/theme2/js/vendor/modernizr-2.8.3.min.js") }}"></script>

        



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





    

        <header id="sticky">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="main-menus">

                            <div class="col-md-3 col-sm-3 col-xs-12 pd-0">

                                <div class="logo">

                                    <a href="index.html" class="logotext"><img src="{{  URL::asset("assets/images/logo/logo.png") }}" alt=""/>
                                        <span class="logoname">{{ $groomname[0] }} weds {{ $bridename[0] }}</span>
                                    </a>

                                </div>

                            </div>

                            <div class="col-md-9 col-sm-9 pd-0 hidden-xs">

                                <div class="menus menu_scroll">

                                    <nav>

                                        <ul>

                                            <li><a href="0">Home</a></li>

                                            <li><a href="1">About Us</a></li>                                            

                                            <li><a href="3">Events</a></li>

                                            <li><a href="4">Gallery</a></li>                                          

                                            

                                        </ul>

                                    </nav>

                                </div>

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

                                <li><a href="4">Gallery</a></li>

                                <li><a href="5">Blog</a></li>

                                <li><a href="6">Contact Us</a></li>

                                <li><a href="7">Rsvp</a></li>

                            </ul>

                        </nav>

                    </div>

                </div>

                <!--Responsive Menu area End-->

            </div>

        </header>      
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

                                    <div class="container">

                                        <div class="row">

                                            <div class="col-md-12 col-sm-12">

                                                <div class="content">

                                                    <h2 class="wow animated fadeInDown" data-wow-duration="1s"> {{ $groomname[0] }} & {{ $bridename[0] }} </h2>

                                                    <p class="wow animated zoomIn" data-wow-duration="1.5s">Are Getting Merrid</p>

                                                    <br>

                                                    <div class="date wow animated zoomIn" data-wow-duration="1.5s" >

                                                        <span class="wow animated fadeInUp" data-wow-duration="2s">Save the Date</span>

                                                        <em class="wow animated fadeInUp" data-wow-duration="2.5s">{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</em>

                                                    </div>

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

        <section section-scroll='1' class="about_area_2 section">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <h2>{{ $groomname[0] }} & {{ $bridename[0] }}</h2>

                            <p>Are Getting Merrid</p>

                            <div class="date">

                                <span>Save the Date</span>

                                <em>{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</em>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 col-sm-12">

                        <div class="person">

                            <figure><img src="{{  URL::asset("assets/images/$alldata->id/$alldata->groom_image") }}" alt=""/></figure>

                            <div class="content">

                                <h2>{{ $alldata->groom_name }}</h2>

                                <div class="con">

                                    {{-- <ul>

                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                    </ul> --}}

                                    <div class="text-con">

                                        <span>( S/o Mrs. {{ $alldata->groom_mother_name }} & Mr. {{ $alldata->groom_father_name }} )</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-12">

                        <div class="about-con">

                            <h1>Invitation</h1>

                            <div class="con">

                                <h2>{{ date("l", strtotime($marriage->marriage_date)); }}</h2>

                                <span>{{ date("d/m/y", strtotime($marriage->marriage_date)); }}</span>

                                <p class="midd">{{ $alldata->home_location }}</p>

                                <p>We inviting you and<br>your family on</p>

                                {{-- <a href="#" class="btn1">rspv</a> --}}

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-12">

                        <div class="person rigth">

                            <figure><img src="{{  URL::asset("assets/images/$alldata->id/$alldata->bride_image") }}" alt=""/></figure>

                            <div class="content">

                                <h2>{{ $alldata->bride_name }}</h2>

                                <div class="con">

                                    {{-- <ul>

                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                    </ul> --}}

                                    <div class="text-con">

                                        <span>( S/o Mrs. {{ $alldata->bride_mother_name }} & Mr. {{ $alldata->bride_father_name }} )</span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="counter_area_2">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-5 col-sm-12 pd-0">

                        <div class="count-con">

                            <h2>We Are Waiting For...<br>

                                The Adventure</h2>                       

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 col-md-offset-1">

                        <div class="count-number counter">

                            <ul>

                                <li><div class="con"><span class="days">00</span><p>Days</p></div></li>

                                <li><div class="con"><span class="hours">00</span><p>hours</p></div></li>

                                <li><div class="con"><span class="minutes">00</span><p>minutes</p></div></li>

                                <li><div class="con"><span class="seconds">00</span><p>seconds</p></div></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>      

        <section section-scroll='3' class="event_area_2 section bg-img jarallax af" style="background-image: url({{  URL::asset("/assets/images/banner/bg-1.jpg") }});">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <p>Awaited moment of our life</p>

                            <h2>The Wedding Events</h2>

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

                <div class="row">

                    <div class="col-md-12 col-sm-12 pd-0">

                        <div class="event-slider">

                            @foreach (json_decode( $alldata->events) as $key => $items)

                            <div class="col-sm-12">

                                <div class="event-list">

                                    <figure>
                                        <img src="{{  URL::asset("assets/images/$alldata->id/$alldata->groom_image") }}" alt=""/>
                                    </figure>

                                    <div class="date"><strong>{{ date("d", strtotime($marriage->marriage_date)); }}</strong>
                                        <span>{{ date("F", strtotime($marriage->marriage_date)); }}</span></div>

                                    <div class="content">

                                        <h2>{{ $items[0] }}</h2>

                                        <h4>{{ date("h:i A", strtotime($items[1])); }}</h4>

                                        <p>{{ $alldata->home_location }} </p>

                                    </div>

                                </div>

                            </div>

                            @endforeach
                            
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section section-scroll='4' class="gallery_area_2 section">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">

                            <p>ARE GETTING MARRIED!</p>

                            <h2>memorable photo gallery</h2>

                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12" >

                        <div class="masonry-gallery-rows gallery" style="height: 0px;">
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

        <section section-scroll='3' class="info_area_2 section2 event_area_2 section bg-img jarallax af" style="background-image: url({{  URL::asset("/assets/images/banner/bg-1.jpg") }});">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="section-heading">
                            <h2>Contact Details</h2>                            
                            </div>
                        </div>



                    </div>

                </div>

                <div class="container">

                    <div class="row">
    
                        <div class="col-md-6 col-sm-12">
    
                            <div class="info-list">
    
                                <div class="ico"><i class="fas fa-map-marker-alt"></i></div>
    
                                <div class="content">
    
                                    <h4 class="contactinffo">{{ $alldata->home_location }}</h4>
    
                                </div>
    
                            </div>
    
                        </div>
    
                        <div class="col-md-6 col-sm-12">
    
                            <div class="info-list">
    
                                <div class="ico"><i class="fas fa-phone" ></i></div>
    
                                <div class="content">
                                    <h4 class="contactinffo"></h4>
    
                                    <h4 class="contactinffo">{!! str_replace(",", "</br>", $alldata->mobile_number); !!}</h4>
    
                                </div>
    
                            </div>
    
                        </div>
                        
    
                    </div>
    
                </div>

            </div>

        </section>




        <footer class="home_2">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="copyright">

                            <p>Design with ❤️ by 
                                <span class="companyname">
                                    <a href="https://cyberstrek.com/">CyberStrek Technologies</a>
                                </span></p>

                        </div>

                    </div>

                </div>

            </div>

        </footer>

        <!--Footer area end here-->



		<!-- All JavaScript Here -->



		<!-- jQuery latest version -->

        <script src="{{  URL::asset("assets/theme2/js/vendor/jquery-3.2.1.min.js") }}"></script>

		<!-- Bootstrap Core JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/bootstrap.min.js") }}"></script>

        <!-- Owl.carousel JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/owl.carousel.min.js") }}"></script>

        <!-- Bxslider JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/jquery.bxslider.min.js") }}"></script>

        <!-- Magnific Popup JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/jquery.magnific-popup.min.js") }}"></script>

		<!-- meanmenu JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/jquery.meanmenu.js") }}"></script>

        <!-- jarallax JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/jarallax.min.js") }}"></script>

		<!-- jQuery-ui JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/jquery-ui.min.js") }}"></script>

        <!-- downCount JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/jquery.downCount.js") }}"></script>

		<!-- masonry JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/masonry.pkgd.min.js") }}"></script>

        <!-- wow JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/wow.min.js") }}"></script>

		<!-- Plugins JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/plugins.js") }}"></script>

		<!-- Init JavaScript -->

        <script src="{{  URL::asset("assets/theme2/js/main.js") }}"></script>



        <script src="https://maps.googleapis.com/maps/api/js"></script>

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

                map.setTilt(45);

                    

                // Multiple Markers

                var markers = [

                    ['Bagerhat, Bangladesh', 22.612416, 89.628240],

                    ['West Bengal, India', 22.519984, 87.777172],

                ];

                                    

                // Info Window Content

                var infoWindowContent = [

                    ['<div class="info_content">' +

                    '<h3>Wedding party</h3>' +

                    '<p>Dinner party</p>' +

                    '<span>06:00 pm to 12:00 am</span>'+

                     '</div>'],

                    ['<div class="info_content">' +

                    '<h3>The Church</h3>' +

                    '<p>Cerimony</p>' +

                    '<span>10:00 Am to 12:00 pm</span>'+

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

                    this.setZoom(10);

                    google.maps.event.removeListener(boundsListener);

                });

          }

            google.maps.event.addDomListener(window, 'load', initialize);


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

        </script>



    </body>

</html>

