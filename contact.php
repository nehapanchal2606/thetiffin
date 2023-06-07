<?php
include 'connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email',  '$message')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "Data added successfully.";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from preview.hasthemes.com/panshi/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Jun 2023 21:24:08 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Panshi - Catering Service HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- All css here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/shortcode/shortcodes.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
		<!-- Header Area Start -->
		<header class="fixed">
			<div class="header-area pt-50 pb-20 header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-sm-9 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-right">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="menu.php">Menu</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->
		<!-- Banner Area Start -->
		<section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Contact</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="index.html">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
		<!-- Banner Area End -->
        <!-- About Start -->
        <!-- Contact Area Strat -->
        <div class="contact-area mid pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-area">
                            <div class="section-title mb-35">
                                <h2>Get in touch</h2>
                            </div>
                            <form action="" method="post">
                                <input class="mb-20" placeholder="Name" name="name" type="text" required>
                                <input class="mb-20" placeholder="Email" name="email" type="email" required>
                                <textarea class="mb-20" cols="30" rows="7" name="message" placeholder="message" required></textarea>
                                
                                <?php if(isset($success_message)) { ?>
                                    <div class="success"><?php echo $success_message; ?></div>
                                <?php } ?>
                                <?php if(isset($error_message)) { ?>
                                    <div class="error"><?php echo $error_message; ?></div>
                                <?php } ?>
                                <br>
                                
                                <button type="submit" class="default-btn"><span>submit</span></button>
                                
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="map-area">
                            <!-- google-map-area start -->
                            <div class="google-map-area">
                                <!--  Map Section -->
                                <div id="contacts" class="map-area">
                                    <div id="googleMap" style="width:100%;height:380px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area Strat -->
        <!-- Footer Area Strat -->
        <br>
        <br>
        <br>

        <?php include('footer.php') ?>