<!DOCTYPE html>
<html lang="en" data-theme-color="skin-1">
<head>

		<!-- Title -->
	<title>410 - Page Deleted</title>
	
	
	<meta name="description" content="Page Deleted">
	 
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
	
			<section class="content-inner">
			<div class="container">
				<div class="row g-xl-4 text-center align-items-center">
				   <h1>410 Gone</h1>
                        <p>We're sorry, but the page you are looking for has been permanently removed and is no longer available.</p>
                        <p><a href="https://gnathosface.com/">Return to Homepage</a></p>
				</div>
			</div>
		</section>
	
	


		

	</main>
	
		<!-- Footer -->
	<?php include('footer.php')?>

</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include('footer-links.php')?>
</body>
</html>
