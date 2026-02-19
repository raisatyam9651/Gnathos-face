<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

		<!-- Title -->
	<title>Contact Us| Gnathos</title>
	
	
	<meta name="description" content="Gnathos provides advanced surgical care for face, mouth, and jaw, specializing in maxillofacial treatments to restore function and enhance appearance.">
	 
	<?php include('header-links.php')?>
	
	
	
	<!-- FAVICONS ICON -->
   <style>
        .site-header{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        :root {
            --theme-color: #195FAC;
            --theme-light: #2196f3;
             --med-primary: #1976D2;
            --med-light: #64B5F6;
            --med-dark: #0D47A1;
            --med-pale: #E3F2FD;
        }
       
        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            color: var(--theme-color);
        }
      .DZ-theme-btn{
          display:none  !important ;
      }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--theme-color);
        }

        .condition-card {
            position: relative;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
        }

      
        .marquee-container {
            background: linear-gradient(45deg, #172C5A, #2a4380, #172C5A);
            background-size: 200% 200%;
            padding: 20px 0;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 15px rgba(23, 44, 90, 0.3);
            animation: gradientBG 20s ease infinite;
        }

        .marquee-content {
            white-space: nowrap;
            display: inline-block;
            animation: marquee 30s linear infinite;
            color: #ffffff;
            font-size: 1.4rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            padding: 0 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Location icon styling */
        .location-icon {
            margin-right: 10px;
            color: #ffffff;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Smooth pause on hover */
        .marquee-container:hover .marquee-content {
            animation-play-state: paused;
            transform: scale(1.01);
            transition: transform 0.3s ease;
        }

        /* Add a subtle glow effect */
        .marquee-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            filter: blur(5px);
            z-index: -1;
        }
       @media (max-width: 767px) and (min-width: 200px) {
           .mob{
               display:none;
           }
       }
      
       

    </style>

</head>	
<body id="bg">
<div class="page-wraper">
	

		<!-- Header Star -->
		<?php include('header.php')?>
	<!-- Header End -->
	
	<main class="page-content">
	
    		<div class="dz-bnr-inr dz-banner-dark dz-bnr-inr-md" style="background-image:url('assets/images/contact-us-(1).webp')">

		<div class="container">
			<div class="dz-bnr-inr-entry d-table-cell">
				<h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.8s">Contact Us </h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
					<ul class="breadcrumb">
						<li class="breadcrumb-item "><a  class ="text-white"href="index">Home</a></li>
						<li class="breadcrumb-item">Contact</li>
					</ul>
				</nav>
				<div class="dz-btn">
					<a href="https://wa.me/919000666476" class="btn btn-lg btn-icon btn-primary radius-xl btn-shadow mb-3 mb-sm-0">
						<span class="left-icon">
							<i class="feather icon-phone-call"></i>
						</span>
						+91 9000666476
					</a>					
				</div>
			</div>
		</div>
		<!--<span class="text-vertical">24/7 EMERGENCY SERVICE</span>-->
		
	</div>
	
			<section class="content-inner">
			<div class="container">
				<div class="row g-xl-4 align-items-center">
					<div class="col-xl-7 pe-xl-4 m-b10">
						<div class="section-head style-1 m-b30">
							<h2 class="title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.5s">Connect with Us for <br> Your Healthcare Needs</h2>
							<p class="small wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.5s">Reach out for support, feedback, or to schedule an appointment. Fill out the form, and we'll promptly assist you and confirm your visit with our healthcare professionals.</p>
						</div>
						
							
					
						<div class="row">
							<div class="col-md-6 m-b20 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.5s">
								<div class="icon-bx-wraper style-8 box-hover">
									<div class="icon-bx">
										<span class="icon-cell">
											<i class="feather icon-map-pin"></i>						
										</span>
									</div>
									<div class="icon-content">
										<h4 class="dz-title">Address</h4>
										<p>CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 m-b20 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.5s">
								<div class="icon-bx-wraper style-8 box-hover">
									<div class="icon-bx">
										<span class="icon-cell">
											<i class="feather icon-phone"></i>							
										</span>
									</div>
									<div class="icon-content">
										<h4 class="dz-title">Call Us</h4>
										<p><a href="https://wa.me/919000666476" class="text-body">+919000666476</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6 m-b20 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.5s">
								<div class="icon-bx-wraper style-8 box-hover">
									<div class="icon-bx">
										<span class="icon-cell">
											<i class="feather icon-mail"></i>
										</span>
									</div>
									<div class="icon-content">
										<h4 class="dz-title">Send us a Mail</h4>
										<p>
											<a href="mailto:gnathosface@gmail.com" class="text-body">gnathosface@gmail.com</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 m-b20 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="0.5s">
								<div class="icon-bx-wraper style-8 box-hover">
									<div class="icon-bx">
										<span class="icon-cell">
											<i class="feather icon-clock"></i>								
										</span>
									</div>
									<div class="icon-content">
										<h4 class="dz-title">Opening Time</h4>
										<p>Mon-Thu: 8:00am-5:00pm Fri: 8:00am-1:00pm</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 m-b30" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
						<div class="form-wrapper style-1">
							<div class="form-body bg-primary background-blend-burn" style="background-image: url(images/background/bg2.png); background-size: cover;">
								<div class="section-head style-1 m-b30">
									<h2 class="title text-white m-b0">Get in Touch</h2>
									<p class="text-white m-b0 fw-medium">You can react us anytime</p>
								</div>
                                    <form accept-charset='UTF-8' action='https://app.formester.com/forms/O0tc1x4O7/submissions' method='POST'>
									<div class="dzFormMsg"></div>
									<div class="row">
										<div class="col-sm-6 m-b30">
											<div class="form-floating floating-underline input-light">
												<input name="FirstName" type="text" class="form-control" id="inputFirstName" placeholder="First Name">
												<label for="inputFirstName">First Name</label>
											</div>
										</div>
										<div class="col-sm-6 m-b30">
											<div class="form-floating floating-underline input-light">
												<input name="LastName" type="text" class="form-control" id="inputLastName" placeholder="Last Name">
												<label for="inputLastName">Last Name</label>
											</div>
										</div>
										<div class="col-sm-6 m-b30">
											<div class="form-floating floating-underline input-light">
												<input name="Email" type="email" class="form-control" id="inputYourEmail" placeholder="Your Email">
												<label for="inputYourEmail">Your Email</label>
											</div>
										</div>
										<div class="col-sm-6 m-b30">
											<div class="form-floating floating-underline input-light">
												<input name="PhoneNumber" type="text" class="form-control dz-number" id="inputPhoneNumber" placeholder="Phone Number">
												<label for="inputPhoneNumber">Phone Number</label>
											</div>
										</div>
										<div class="col-sm-12 m-b30">
											<div class="form-floating floating-underline input-light">
												<textarea name="Message" class="form-control" id="inputMessage" rows="2" placeholder="Select Service"></textarea>
												<label for="inputMessage">Message</label>
											</div>
										</div>
										<div class="col-sm-12">
											<button type="submit" name="submit" value="submit" class="btn btn-lg btn-icon btn-white hover-secondary btn-shadow">
												Submit <span class="right-icon"><i class="feather icon-arrow-right"></i></span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
	
     <div class="container-fluid p-0">
        <div class="marquee-container">
            <div class="marquee-content">
                <i class="fas fa-location-dot location-icon"></i>
                CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                <span style="margin: 0 50px;">•</span>
                <i class="fas fa-location-dot location-icon"></i>
                CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                 <span style="margin: 0 50px;">•</span>
                <i class="fas fa-location-dot location-icon"></i>
                CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
                 <span style="margin: 0 50px;">•</span>
                <i class="fas fa-location-dot location-icon"></i>
                CARE Hospitals Hi-tech City, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
            </div>
        </div>
    </div>

		
	

		<div class="clearfix">
			<div class="map-wrapper style-2">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.609525531003!2d78.3696510793457!3d17.430516900000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93f07b310913%3A0x5b01a891704ac369!2sCARE%20Hospitals%20-%20Hitec%20City%20%7C%20Best%20Hospital%20in%20Hyderabad!5e0!3m2!1sen!2sin!4v1740394313212!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
				
						
						
					</div>
				</div>
			</div>
		</div>
		

		

	</main>
	
		<!-- Footer -->
	<?php include('footer.php')?>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include('footer-links.php')?>
</body>
</html>
