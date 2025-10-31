<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aathang Technology Private Ltd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
        <!-- Service Dropdown -->
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


<!--  Title -->
<div class="text-center mt-5 mb-5">
  <h2 style="color:#00e6ff; font-size:38px; letter-spacing:1px; margin-bottom:10px;">Voice of the Team</h2>
  <div style="width:80px; height:3px; background:#00e6ff; margin:0 auto 20px auto; border-radius:2px;"></div>
  <p style="font-size:16px; color:#bbb;">Meet our talented and passionate team members driving innovation and excellence.</p>
</div>

<!-- Team Members Section -->
<div class="container">
  <div class="row justify-content-center">

    <!-- Member Card Template -->
    <div class="col-lg-4 col-md-6 col-12 mb-4">
      <div style="background: rgba(0,0,0,0.3); padding:20px; border-radius:15px; text-align:center; box-shadow:0 0 25px rgba(0,255,255,0.3); transition: transform 0.3s; cursor:pointer;"
           onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        <img src="../image/nikhil.avif" alt="Team Member 1" style="width:150px; height:150px; border-radius:50%; object-fit:cover; box-shadow:0 0 15px cyan;">
        <h4 style="color:#00e6ff; margin-top:15px;">Nikhil Kumar</h4>
        <p style="color:#ddd; font-size:15px;">Electrical Design Engineer</p>
        <p style="color:#bbb; font-size:14px;">"Passionate about delivering innovative automation solutions."</p>
        
        <!-- Social Media -->
<div class="mt-2">
  <a href="https://www.instagram.com/niktheory3619/?next=%2F#" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-linkedin"></i>
  </a>
  <a href="https://twitter.com/hilkumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="https://facebook.comilkumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-facebook"></i>
  </a>
</div>

      </div>
    </div>

    <!-- Member 2 -->
    <div class="col-lg-4 col-md-6 col-12 mb-4">
      <div style="background: rgba(0,0,0,0.3); padding:20px; border-radius:15px; text-align:center; box-shadow:0 0 25px rgba(0,255,255,0.3); transition: transform 0.3s; cursor:pointer;"
           onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        <img src="../image/nikhil.avif" alt="Team Member 2" style="width:150px; height:150px; border-radius:50%; object-fit:cover; box-shadow:0 0 15px cyan;">
        <h4 style="color:#00e6ff; margin-top:15px;">Priya Sharma</h4>
        <p style="color:#ddd; font-size:15px;">Project Manager</p>
        <p style="color:#bbb; font-size:14px;">"Striving for excellence in every project we deliver."</p>
        <!-- Social Media -->
<div class="mt-2">
  <a href="https//www.linkedin.com/in/nikhil-kumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-linkedin"></i>
  </a>
  <a href="https://twitter.com/nilkumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="https://facebook.com/nilkumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-facebook"></i>
  </a>
</div>

      </div>
    </div>

    <!-- Member 3 -->
    <div class="col-lg-4 col-md-6 col-12 mb-4">
      <div style="background: rgba(0,0,0,0.3); padding:20px; border-radius:15px; text-align:center; box-shadow:0 0 25px rgba(0,255,255,0.3); transition: transform 0.3s; cursor:pointer;"
           onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        <img src="../image/nikhil.avif" alt="Team Member 3" style="width:150px; height:150px; border-radius:50%; object-fit:cover; box-shadow:0 0 15px cyan;">
        <h4 style="color:#00e6ff; margin-top:15px;">Rahul Verma</h4>
        <p style="color:#ddd; font-size:15px;">Automation Specialist</p>
        <p style="color:#bbb; font-size:14px;">"Turning innovative ideas into reality with precision."</p>
        <!-- Social Media -->
<div class="mt-2">
  <a href="https://www.instagram.com/niktheory3619/?next=%2F#" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-linkedin"></i>
  </a>
  <a href="https://twitter.com/nikumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="https://facebook.com/nilkumar" target="_blank" style="color:#0ff; margin:0 5px; font-size:18px;">
    <i class="fab fa-facebook"></i>
  </a>
</div>

      </div>
    </div>

  </div>
</div>

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