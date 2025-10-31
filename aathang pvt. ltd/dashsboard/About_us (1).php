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
    <li><a class="dropdown-item text-info" href="services/services.php">EPLAN Electric P8</a></li>
    <li><a class="dropdown-item text-info" href="services/eplan-propanel.php">EPLAN Pro Panel</a></li>
    <li><a class="dropdown-item text-info" href="services/system-integration.php">System Integration</a></li>
    <li><a class="dropdown-item text-info" href="services/manufacturing.php">Automotive Manufacturing</a></li>
    <li><a class="dropdown-item text-info" href="services/manufacturing.php">Food & Beverage Processing</a></li>
    <li><a class="dropdown-item text-info" href="services/manufacturing.php">Pharmaceutical & Medical Devices</a></li>
    <li><a class="dropdown-item text-info" href="services/manufacturing.php">Packaging & Logistics</a></li>
    <li><a class="dropdown-item text-info" href="services/manufacturing.php">Machine Building & Robotics</a></li>
    <li><a class="dropdown-item text-info" href="services/manufacturing.php">Oil and Gas</a></li>
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



<!-- ABOUT SECTION -->
<div class="container-fluid" style="padding:60px 20px; font-family:'Adamina',serif; color:#e5e5e5;">
  
  <!-- Title -->
  <div class="text-center mb-5">
    <h2 style="color:#00e6ff; font-size:38px; letter-spacing:1px; margin-bottom:10px;">About Us</h2>
    <div style="width:80px; height:3px; background:#00e6ff; margin:0 auto 20px auto; border-radius:2px;"></div>
    <p style="font-size:16px; color:#bbb;">Empowering industries through intelligent automation and innovative design.</p>
  </div>

  <!-- WHO WE ARE -->
  <div class="row align-items-center scroll-animate" style="opacity:0; transform:none; transition:all 0.6s ease; background:rgba(0,0,0,0.2); padding:30px 15px; border-radius:15px; margin-bottom:40px;">
    <div class="col-lg-6 col-12 mb-4">
      <h3 style="color:#00e6ff; margin-bottom:15px;">Who We Are</h3>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#ddd;">
        We are a passionate team of electrical design engineers focused on delivering automation-ready electrical designs.
        <strong style="color:#00e6ff;">Aathang Technology Pvt. Ltd.</strong> was founded with a mission to redefine precision and reliability in industrial automation.
      </p>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#ddd;">
        With expertise in control panel design, schematics, PLC integration, and documentation, we ensure each project exceeds standards and enhances productivity, safety, and sustainability.
      </p>
    </div>
    <div class="col-lg-6 col-12 text-center">
      <img src="../image/about.jpg" alt="Who We Are" style="width:100%; height:auto; max-width:600px; border-radius:15px; box-shadow:0 0 25px rgba(0,255,255,0.3);">
    </div>
  </div>

  <!-- OUR MISSION -->
  <div class="row align-items-center flex-lg-row-reverse scroll-animate" style="opacity:0; transform:none; transition:all 0.6s ease; background:rgba(0,0,0,0.1); padding:30px 15px; border-radius:15px; margin-bottom:40px;">
    <div class="col-lg-6 col-12 mb-4">
      <h3 style="color:#00e6ff; margin-bottom:15px;">Our Mission</h3>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#ddd;">
        Our mission is to empower industries with smart, innovative, and sustainable electrical design solutions 
        that improve automation efficiency and reduce downtime.
      </p>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#ddd;">
        We deliver reliable, high-performance, and cost-effective systems blending advanced technology with human expertise.
      </p>
    </div>
   <div class="col-lg-6 col-12 text-center">
  <video autoplay loop muted playsinline 
         style="width:100%; height:auto; max-width:500px; border-radius:15px; box-shadow:0 0 25px rgba(0,255,255,0.3);">
    <source src="..\image\industry.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

  </div>

  <!-- OUR VISION -->
  <div class="row align-items-center scroll-animate" style="opacity:0; transform:none; transition:all 0.6s ease; background:rgba(0,0,0,0.2); padding:30px 15px; border-radius:15px; margin-bottom:40px;">
    <div class="col-lg-6 col-12 mb-4">
      <h3 style="color:#00e6ff; margin-bottom:15px;">Our Vision</h3>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#ddd;">
        Our vision is to be a globally trusted brand in electrical design and automation,
        known for innovation, integrity, and excellence.
      </p>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#ddd;">
        We aspire to build a future where industries operate seamlessly through the perfect fusion 
        of technology and engineering precision.
      </p>
    </div>
    <div class="col-lg-6 col-12 text-center">
      <img src="../image/nn25.png" alt="Our Vision" style="width:100%; height:auto; max-width:500px; border-radius:15px; box-shadow:0 0 25px rgba(0,255,255,0.3);">
    </div>
  </div>

</div>



<!-- Footer -->
<footer class="text-light pt-4" style="background:#000;">
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
    <div class="text-center pb-3" id="footerText"></div>
  </div>
</footer>
<!-- image in index first -->
<style>
/* Desktop */
.carousel-img {
  width: 100%;
  height: 700px;
  object-fit: cover;
}

/* Mobile */
@media (max-width: 768px) {
  .carousel-img {
    height: auto;
    object-fit: cover;
  }
}
</style>
<!-- Fast One-Time Scroll Animation JS -->
<script>
const scrollElements = document.querySelectorAll('.scroll-animate');

const observer = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateX(0)';
      obs.unobserve(entry.target);
    }
  });
}, { threshold: 0.2 });

scrollElements.forEach(el => observer.observe(el));
</script>

</body>
</html>
