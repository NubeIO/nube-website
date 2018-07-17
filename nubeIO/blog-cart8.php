<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog - Transferring smart building data from the Nube iO Droplet (LoRa sensors) into Niagara</title>
	<meta name ="title" content="Transferring smart building data from the Nube iO Droplet (LoRa sensors) into Niagara">
	<meta name="description" content="Transferring smart building data from the Nube iO Droplet (LoRa sensors) into Niagara" />
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

	<br>
	
	<section class="blog section">
	    <div class="container">
	        <div class="blog-wrapper">
	            <div class="left-col blogs">
                    <div class="single-post">
                        <div>
                            <img src="/assets/images/title8.png" alt=""/>
                            <ul class="post-details list-inline">
                                <li>
                                    <i class="fa fa-calendar-o"></i>
                                    <a href="#">July 12, 2018</a>
                                </li>
                            </ul>
                        </div>
                        <h1 class="title">Transferring smart building data from the Nube iO Droplet (LoRa sensors) into Niagara</h1>
                        <p>
                            LoRa is a Low-Power, Long-Range wireless technology designed for the Internet of Things (IoT). Compared to WiFi, it requires less power and is less affected by buildings and other obstructions, with one Gateway generally being able to provide coverage for small to medium sized office buildings.                         
                        </p>
                        
                        <p>
                            The Droplet is a LoRa-enabled battery-operated environmental sensor, built to address the problem of wanting multiple points of data capture with minimal time for install and wiring. 
                        </p>
                        
                        <p>
                            Communicating over a wireless protocol and powered by battery completely eliminates the need for infrastructure changes. This decreases deployment time and costs associated. Our sensing scope covers most primary sensing requirements. These include: 
Temperature
Humidity
Light Levels
Presence
Pressure
Movement

                        </p>
                        <p>
                           Further optional additions include VOC sensors (Volatile Organic Compounds) and CO2 sensors. 
                        </p>
                        
                        <p>
                            As the Droplet is LoRa enabled, this can cause issues when integrating with existing BMS systems. However, to produce the best results for our clients, we found a solution.
                        </p>
                       
                        <p>
                            Niagara is essentially the standard when it comes to BMS Software and is widely prevalent in the industry. It collects, trends and stores data for BMS systems. 
                        </p>
                        <p>
                            Niagara can interface with a wide variety of protocols, but LoRa is not one of them. To ensure that our system fully meets the needs of its target industry, we developed our wireless LoRa sensors to be able to communicate over modbus.

                        </p>
                        <p>
                            Modbus provides compatibility with Niagara, allowing customers with pre-existing BMS systems the ability to continue using them and 'add-on' a wireless sensing network. Thus, Nube iO technology can run independently, as well as being interoperable with existing BMS systems, which in turn benefits all of our customers.                    
                       </p>
                       
                    </div>
	            </div>
	            <?php include 'common/sidebar.php';?>
	        </div>
	    </div>
	</section>
	
 <?php include 'common/footer.php';?>    
    
	
</body>
</html>
