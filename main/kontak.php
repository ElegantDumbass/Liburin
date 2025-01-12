<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="/Assets/css/form.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Majalengka | Main Yuk!!</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9" />
</head>
<body class="overflow-hidden">
<nav>
<div class="container py-3">
        <?php include "/laragon/www/Liburin/lib/menu.php"; ?>
    </div> 
</nav>
<!-- Responsive Contact Page with Dark Mode and Form Validation (vanilla JS).
*Designed & built for desktop and tablets with viewport width >= 720px and in landscape orientation.  -->

<div class="contact-container">
  <div class="left-col">
    <img class="logo" src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/logo.png"/>
  </div>
  <div class="right-col">
    <div class="theme-switch-wrapper">
    <label class="theme-switch" for="checkbox">
        <input type="checkbox" id="checkbox" />
        <div class="slider round"></div>
  </label>
  <div class="description">Dark Mode</div>
</div>
    
    <h1>Contact us</h1>
    <p>Planning to visit Indonesia soon? Get insider tips on where to go, things to do and find best deals for your next adventure.</p>
    
    <form id="contact-form" method="post">
      <label for="name">Full name</label>
  <input type="text" id="name" name="name" placeholder="Your Full Name" required>
      <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Your Email Address" required>
      <label for="message">Message</label>
  <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
      <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit">Send</button><!--</a>-->
  
</form>
<div id="error"></div>
<div id="success-msg"></div>
  </div>
</div>
<script src="/Assets/js/form.js"></script>
<!-- Image credit: Oliver Sjöström https://www.pexels.com/photo/body-of-water-near-green-mountain-931018/  -->
</body>
</html>