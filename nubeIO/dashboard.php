<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - Nube iO</title>
	<meta name ="title" content="One Dashboard to Monitor Multiple Sites">
	<meta name="description" content="With Nube iO there is no software to install, configure, or update. Access your dashboard online from anywhere, using any browser and device." />
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

	<!-- ***** Header Area Start ***** -->
	<?php include 'common/header.php';?>
	
	<section class="main-banner section">
	    <div class="container">
	    	<div class="icon">
				<img src="assets/images/imgpsh_fullsize2.png" class="img-fluid" alt="">
			</div>
	        <div class="main-banner-wrapper">
	            <h1>Nube iO Dashboard</h1>
	            <p>Modern, fully customisable web-based user interface</p>
	            <a  href="#contact-us"class="btn btn-secondary-box">Request More Information</a>
	             <div class="remodal" data-remodal-id="contact-us">
                    <button data-remodal-action="close" class="remodal-close"></button>
                    <div class="modal-info">
                        <div class="feedback-wrapper">
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
	    </div>
	</section>
	
	<section class="dashboard section">
	    <div class="container">
	        <div class="dashboard-wrapper">
	            <div class="left-col">
	                <h3>Monitor Multiple Building Sites in the Same Place</h3>
	                <p>
	                    Nube iO hardware can be connected to the Nube-iO dashboard - a user-friendly, fully customisable web-based interface. Featuring rich animations and multiple skin designs, it can be personalised to your organisation’s brand specifications. 
	                </p>
	                <p>
	                    There is no software to install, configure, or update. Access it from anywhere, using any browser and device. The dashboard comes with configurable alerts, mechanical statuses, location-based map overview, and support for any number of buildings or devices.
	                </p>
	            </div>
	            <div class="right-col">
	                <img src="assets/images/dashboard-1.png" alt="">
	            </div>
	        </div>
	    </div>
	</section>
		<section class="dashboard reverse section">
	    <div class="container">
	        <div class="dashboard-wrapper">
	            <div class="left-col">
	                <h3>Key Benefits</h3>
	                <ul>
	                    <li>Easily organise and access data for multiple buildings</li>
	                    <li>Utilise the map view to monitor various sites</li>
	                    <li>Generate weekly and monthly reports</li>
	                    <li>Analyse data using a highly visual dashboard</li>
	                    <li>Stay on top of the BMS performance with daily updates and alerts</li>
	                    <li>Access data remotely from any device</li>
	                </ul>
	            </div>
	            <div class="right-col">
	                <img src="assets/images/dashboard-2.png" alt="">
	            </div>
	        </div>
	    </div>
	</section>


    <?php include 'common/footer.php';?>

	
</body>
</html>