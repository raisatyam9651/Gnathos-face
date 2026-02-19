<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thank You </title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   <style>
      :root {
         --theme-color: #195FAC;
         --theme-light: #2196f3;
         --med-primary: #1976D2;
         --med-light: #64B5F6;
         --med-dark: #0D47A1;
      }
      
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
      
      body {
         font-family: 'Arial', sans-serif;
         background-color: #f8f9fa;
         color: #444;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         padding: 20px;
      }
      
      .thank-you-container {
         max-width: 600px;
         width: 100%;
         background-color: #fff;
         border-radius: 20px;
         box-shadow: 0 10px 30px rgba(25, 95, 172, 0.1);
         overflow: hidden;
         text-align: center;
      }
      
      .thank-you-header {
         background: linear-gradient(135deg, var(--theme-color) 0%, var(--theme-light) 100%);
         padding: 40px 20px;
         color: white;
      }
      
      .thank-you-icon {
         width: 100px;
         height: 100px;
         background-color: white;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 0 auto 20px;
      }
      
      .thank-you-icon i {
         font-size: 60px;
         color: var(--theme-color);
      }
      
      .thank-you-title {
         font-size: 28px;
         font-weight: 700;
         margin-bottom: 10px;
      }
      
      .thank-you-subtitle {
         font-size: 18px;
         opacity: 0.9;
      }
      
      .thank-you-content {
         padding: 40px 30px;
      }
      
      .thank-you-message {
         font-size: 16px;
         line-height: 1.6;
         margin-bottom: 30px;
      }
      
      .progress-container {
         width: 100%;
         background-color: #f1f1f1;
         border-radius: 5px;
         margin-bottom: 20px;
         overflow: hidden;
      }
      
      .progress-bar {
         width: 100%;
         height: 8px;
         background: linear-gradient(to right, var(--med-light), var(--theme-color));
         animation: countdown 10s linear forwards;
      }
      
      @keyframes countdown {
         from { width: 100%; }
         to { width: 0%; }
      }
      
      .redirect-message {
         font-size: 14px;
         color: #777;
         margin-bottom: 25px;
      }
      
      .home-button {
         display: inline-block;
         background-color: var(--theme-color);
         color: white;
         border: none;
         border-radius: 5px;
         padding: 12px 30px;
         font-size: 16px;
         font-weight: 600;
         text-decoration: none;
         transition: all 0.3s ease;
         box-shadow: 0 4px 15px rgba(25, 95, 172, 0.3);
      }
      
      .home-button:hover {
         background-color: var(--med-dark);
         transform: translateY(-2px);
         box-shadow: 0 6px 20px rgba(25, 95, 172, 0.4);
      }
      
      .notification {
         position: absolute;
         top: 20px;
         right: 20px;
         background-color: var(--theme-color);
         color: white;
         padding: 15px 20px;
         border-radius: 10px;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
         display: flex;
         align-items: center;
         animation: slideIn 0.5s ease forwards, fadeOut 0.5s ease 8s forwards;
         z-index: 1000;
      }
      
      @keyframes slideIn {
         from { transform: translateX(100%); opacity: 0; }
         to { transform: translateX(0); opacity: 1; }
      }
      
      @keyframes fadeOut {
         from { opacity: 1; }
         to { opacity: 0; }
      }
      
      .notification-icon {
         margin-right: 15px;
         font-size: 20px;
      }
      
      /* Responsive adjustments */
      @media (max-width: 767px) {
         .thank-you-container {
            max-width: 100%;
         }
         
         .thank-you-header {
            padding: 30px 15px;
         }
         
         .thank-you-icon {
            width: 80px;
            height: 80px;
         }
         
         .thank-you-icon i {
            font-size: 45px;
         }
         
         .thank-you-title {
            font-size: 24px;
         }
         
         .thank-you-subtitle {
            font-size: 16px;
         }
      }
   </style>
</head>
<body>
   <div class="notification">
      <i class="fas fa-check-circle notification-icon"></i>
      <span>Your submission has been received!</span>
   </div>

   <div class="thank-you-container">
      <div class="thank-you-header">
         <div class="thank-you-icon">
            <i class="fas fa-check-circle"></i>
         </div>
         <h1 class="thank-you-title">Thank You!</h1>
         <p class="thank-you-subtitle">Your submission has been successfully received.</p>
      </div>
      
      <div class="thank-you-content">
         <p class="thank-you-message">We appreciate you contacting Noble Healthcare. Our team will review your information and get back to you shortly. We strive to respond to all inquiries within 24 hours.</p>
         
         <div class="progress-container">
            <div class="progress-bar"></div>
         </div>
         
         <p class="redirect-message">You will be redirected to the homepage in <span id="countdown">10</span> seconds.</p>
         
         <a href="index" class="home-button">Return to Home</a>
      </div>
   </div>

   <script>
      // Countdown timer
      let seconds = 10;
      const countdownElement = document.getElementById('countdown');
      
      const countdownTimer = setInterval(function() {
         seconds--;
         countdownElement.textContent = seconds;
         
         if (seconds <= 0) {
            clearInterval(countdownTimer);
            window.location.href = "index";
         }
      }, 1000);
      
      // Redirect to homepage after 10 seconds
      setTimeout(function() {
         window.location.href = "index";
      }, 10000);
   </script>
</body>
</html>