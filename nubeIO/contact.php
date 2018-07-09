<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arda - Bitcoin and Cryptocurrency ICO Template</title>
  <meta name ="title" content=«ЧП Матвиенко. Шины и диски»>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png" />

  <!-- Bootstrap & Plugins CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
  
    <!-- Swiper Slider-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" type="text/css">
    
  <!-- Custom CSS -->
  <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/blue.css" rel="stylesheet" type="text/css">
  <link href="assets/css/controller.css" rel="stylesheet" type="text/css">
  
    <!-- REMODAL CSS-->
    <link href="assets/css/remodal.css" rel="stylesheet" type="text/css">
    <link href="assets/css/remodal-default-theme.css" rel="stylesheet" type="text/css">
  
</head>
<body>

	<div class="loading-wrapper">
		<div class="loading">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	<?php include 'common/header.php';?>
    
	
	<section class="main-banner">
	    <div class="container">
	        <div class="main-banner-wrapper">
	            <h1>Contact</h1>
	        </div>
	    </div>
	</section>
	 
	
	<section class="section">
	    <div class="container">
	        <div id="map"></div>
	    </div>
	</section>



	<style>
      #map {
        height: 100%;
      }
      #map {
        min-height: 500px;
        margin: 0;
        padding: 0;
      }
    </style>



    <script>


      function initMap() {



    var myLatlng = new google.maps.LatLng(40.674,-73.945);
	var mapOptions = {
	  zoom: 12,
	  center: myLatlng,
	  scrollwheel: false,
      disableDefaultUI: true,
      zoomControl: true,
	  styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
var image = 'http://myway1.smartpixel.com.ua/images/marker.png';
	var marker = new google.maps.Marker({
	    position: myLatlng,
	    title:"Hello World!",
	    icon: image
	});

	
marker.setMap(map);

     
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqCW8FB8QJ9eCsmZ0TXPx7k7zeRUfRTuo&callback=initMap"
    async defer></script>





<!-- ***** Contact & Footer Start ***** -->
	<footer id="contact">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5 col-sm-12">
						<div class="contact">
							<h3 class="section-title">Get In Touch</h3>
							<p>Do you have any questions about Nube iO? Are you interested in partnership or investment opportunities? We want to hear from you.</p>
							<ul class="list">
								<li><i class="fa fa-envelope-o"></i><a href="mailto:info@nubeio.co.au
">info@nubeio.co.au</a></li>
								<li><i class="fa fa-linkedin-square"></i><a href="https://www.linkedin.com/company/nube-io/">Follow us on LinkedIn</a></li>
							</ul>
						
						</div>
					</div>
					<div class="offset-lg-1 offset-md-1 col-lg-7 col-md-6 col-sm-12">
						<div class="form">
						    <form action="" class="contact-form page">
						        <textarea rows="8" name="contactMessage" class="form-control animated fadeInUp" placeholder="Write your text" data-animate="fadeInUp" data-delay=".1" required="" style="animation-duration: 0.6s; animation-delay: 0.1s;"></textarea>
						        <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="contactName" class="form-control animated fadeInUp" placeholder="Name" data-animate="fadeInUp" data-delay=".2" required="" style="animation-duration: 0.6s; animation-delay: 0.2s;">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" name="contactEmail" class="form-control animated fadeInUp" placeholder="E-mail" data-animate="fadeInUp" data-delay=".3" required="" style="animation-duration: 0.6s; animation-delay: 0.3s;">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="contactSubject" class="form-control animated fadeInUp" placeholder="Subject" data-animate="fadeInUp" data-delay=".4" required="" style="animation-duration: 0.6s; animation-delay: 0.4s;">
                                    </div>
                                </div>
                                <button class="btn-secondary-box">Submit</button>
						    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<p class="copyright">2018 © Nube iO</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Contact & Footer End ***** -->


	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/particles.min.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/jquery.downCount.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
    
    <!-- Swiper Slider-->
    
    <script src="assets/js/swiper.min.js"></script>
	<!-- Global Init -->
	
	<script src="assets/js/custom.js"></script>
	
</body>
</html>