<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aathang Technology Private Ltd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap + Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts Adamina -->
  <link href="https://fonts.googleapis.com/css2?family=Adamina&display=swap" rel="stylesheet">
</head>
<body style="background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364); color:#e5e5e5; font-family:'Adamina',serif;">


<!--  Background -->
<canvas id="bgCanvas" style="display:none;"></canvas> <!-- Removed background animation -->

<!-- Header -->
<div style="background:linear-gradient(90deg,#000428,#004e92); padding:20px; border-bottom:2px solid #0ff; box-shadow:0 0 15px rgba(0,255,255,0.6); font-family:'Adamina',serif;">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="../image/company logo.jpg" alt="Logo" height="70px" class="me-3" style="border-radius:50%; box-shadow:0 0 20px cyan;">
      <div>
        <h2 class="mb-0 text-white">Aathang Technology Pvt. Ltd.</h2>
        <small style="color:white;">Your Trusted Partner for Electrical Solutions</small>
      </div>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background:#000; font-family:'Adamina',serif; letter-spacing:1px;">
  <div class="container">
    <a class="navbar-brand d-lg-none text-info" href="#">About</a>
    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="mainNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-light fw-bold" href="../index.php">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" data-bs-toggle="dropdown">About</a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-info" href="../dashboard/About_us.php">About Us</a></li>
            <li><a class="dropdown-item text-info" href="../dashboard\director_message.php">Director's Message</a></li>
            <li><a class="dropdown-item text-info" href="../dashboard/team.php">Voice of the Team</a></li>
          </ul>
        </li>
        <!-- Navbar Service Dropdown -->
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-light fw-bold" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Service
  </a>
  <ul class="dropdown-menu bg-dark" aria-labelledby="servicesDropdown">
    <li><a class="dropdown-item text-info" href="../services/services.php">EPLAN Electric P8</a></li>
    <li><a class="dropdown-item text-info" href="../services/eplan-propanel.php">EPLAN Pro Panel</a></li>
    <li><a class="dropdown-item text-info" href="../services/system_integration.php">System Integration</a></li>
    <li><a class="dropdown-item text-info" href="../services/manufacturing.php">Automotive Manufacturing</a></li>
    <li><a class="dropdown-item text-info" href="../services/manufacturing.php">Food & Beverage Processing</a></li>
    <li><a class="dropdown-item text-info" href="../services/manufacturing.php">Pharmaceutical & Medical Devices</a></li>
    <li><a class="dropdown-item text-info" href="../services/manufacturing.php">Packaging & Logistics</a></li>
    <li><a class="dropdown-item text-info" href="../services/manufacturing.php">Machine Building & Robotics</a></li>
    <li><a class="dropdown-item text-info" href="../services/manufacturing.php">Oil and Gas</a></li>
  </ul>
</li>

        <li class="nav-item"><a class="nav-link text-light" href="#">Clients</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#">Career</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="../dashboard/contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="../dashboard/enquiry.php">Enquiry</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contact  -->
<div style="padding:50px 20px; font-family:'Adamina',serif; color:#0ff;">
  
  <!-- Heading -->
  <h2 style="text-align:center; color:#ff0080; font-family:'Audiowide',sans-serif; text-shadow:0 0 20px cyan; margin-bottom:20px; letter-spacing:1px;">
    Get in Touch With Us
  </h2>
  <div style="width:100px; height:3px; background:#00e6ff; margin:0 auto 40px auto; border-radius:2px;"></div>

  
  <div class="row" style="display:flex; flex-wrap:wrap; justify-content:center; gap:25px;">

    <!-- Contact Form -->
    <div class="col" style="flex:1; min-width:300px; max-width:500px;">
      <div style="border-radius:15px; padding:30px; box-shadow:0 0 25px rgba(0,255,255,0.4); background:rgba(17,17,17,0.7); backdrop-filter:blur(10px);">
        <h3 style="color:#00e6ff; text-align:center; margin-bottom:20px;">Send Us a Message</h3>
        
        <form action="submit_form.php" method="post">
          <input type="text" name="name" placeholder="Your Name" required 
                 style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:transparent; color:#0ff; font-size:16px;">
          
          <input type="email" name="email" placeholder="Your Email" required 
                 style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:transparent; color:#0ff; font-size:16px;">
          
          <input type="tel" name="phone" placeholder="Your Phone" required 
                 style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:transparent; color:#0ff; font-size:16px;">
          
          <textarea name="message" rows="5" placeholder="Your Message" required 
                    style="width:100%; padding:12px; margin-bottom:20px; border:1px solid #00e6ff; border-radius:8px; background:transparent; color:#0ff; font-size:16px;"></textarea>
          
          <div style="text-align:center;">
            <button type="submit"
                    style="background:linear-gradient(90deg,#ff0080,#00e6ff); color:#fff; border:none; padding:12px 35px; border-radius:8px; font-size:17px; letter-spacing:1px; cursor:pointer; box-shadow:0 0 20px rgba(0,255,255,0.6);">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>


    <!-- Contact Info + Map -->
    <div class="col" style="flex:1; min-width:300px; max-width:500px;">
      <div style="border-radius:15px; padding:30px; box-shadow:0 0 25px rgba(255,0,128,0.4); color:#0ff; background:rgba(17,17,17,0.7); backdrop-filter:blur(10px);">
        <h3 style="color:#00e6ff; margin-bottom:15px;">Our Office</h3>
        <p style="margin:6px 0;"><strong>📍 Address:</strong> Pragati Nagar, Nipani - 591237</p>
        <p style="margin:6px 0;"><strong>✉️ Email:</strong> 
          <a href="mailto:aathangtech@gmail.com" style="color:#fff; text-decoration:none;">aathangtech@gmail.com</a>
        </p>
        <p style="margin:6px 0;"><strong>📞 Phone:</strong>
          <a href="tel:+91 95350 91567" style="color:#fff; text-decoration:none;">+91 95350 91567</a>/
          <a href="tel:+91 9168837645" style="color:#fff; text-decoration:none;">+91 9168837645</a>
        </p>

        <div style="width:100%; height:0; padding-bottom:56.25%; position:relative; border-radius:10px; overflow:hidden; margin-top:15px;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2022.7702368153891!2d74.37142795275513!3d16.413644338494404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0f188302a9b0f%3A0x51a578571d65f91f!2sPragati%20Nagar%2C%20Nipani%2C%20Karnataka%20591237!5e1!3m2!1sen!2sin!4v1758957992497!5m2!1sen!2sin" 
            style="position:absolute; top:0; left:0; width:100%; height:100%; border:0;" 
            allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<!-- Footer -->
<footer class="text-light pt-4 mt-5" style="background:#000;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5 style="color:#0ff; font-family:'Adamina',serif;">Aathang Technology Pvt Ltd</h5>
        <p>Innovative automation solutions to help businesses grow.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5 style="color:#0ff; font-family:'Adamina',serif;">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light">Home</a></li>
          <li><a href="#" class="text-light">About Us</a></li>
          <li><a href="#" class="text-light">Services</a></li>
          <li><a href="#" class="text-light">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h5 style="color:#0ff; font-family:'Adamina',serif;">Follow Us</h5>
        <a href="#"><img src="../image/yt.jpg" height="40"></a>
        <a href="#"><img src="../image/in.jpg" height="40"></a>
        <a href="#"><img src="../image/fa.jpg" height="40"></a>
        <a href="#"><img src="../image/link.jpg" height="40"></a>
        <p>Email: <a href="mailto:aathangtech@gmail.com" class="text-light">aathangtech@gmail.com</a></p>
        <p>📞 
       <a href="tel:+91 95350 91567">+91 95350 91567</a> / 
       <a href="tel:+91 9168837645">+91 9168837645</a>
      </p>
      </div>
    </div>
    <hr class="bg-light">
    <div class="text-center pb-3">© 2025 Aathang Technology Pvt. Ltd.</div>
  </div>
</footer>
</body>
  </html>