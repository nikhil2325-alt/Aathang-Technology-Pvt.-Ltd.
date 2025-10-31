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

<!-- Main Content -->
<div class="container-fluid" style="padding:20px;">
  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <h3 style="color:#ff0080; font-family:'Adamina',serif;">EPLAN Pro Panel</h3>
      <hr style="border-color:#0ff;">
      <img src="../image/nn4.jpg" alt="EPLAN Pro Panel" style="max-width:100%; height:auto; display:block; margin-bottom:15px;">
      <p style="color:#fff;">
        EPLAN Pro Panel is an advanced 3D engineering software solution used for designing and constructing control cabinets, switchgear systems, and power distribution panels in a fully digital environment.
        Unlike traditional 2D design methods, EPLAN Pro Panel allows engineers to create detailed 3D layouts of electrical enclosures, including accurate placement of components, wiring, routing, and panel mounting.
        This helps in visualizing the final assembly even before production begins, reducing errors, saving space, and improving thermal management. The software integrates seamlessly with EPLAN Electric P8, enabling smooth data exchange between electrical schematics and panel layouts.
        It also supports automated manufacturing through CNC machining and wiring harness production, making it a powerful tool for companies aiming to digitalize and optimize their panel building processes.
      </p>

      <h5 style="color:#ff0080; margin-top:30px; font-family:'Adamina',serif;">EPLAN Pro Panel – Intelligent 3D Control Panel Design</h5>
      <hr style="border-color:#0ff;">
      <p style="color:#fff;">
        <strong>EPLAN Pro Panel is a powerful 3D engineering solution</strong> that revolutionizes the way electrical control panels, switchgear systems, and enclosures are designed and built. It enables the complete digital design of mounting layouts, wiring, and component placement within a 3D space, offering engineers a realistic and accurate preview of the finished panel before manufacturing begins.
      </p>
      <p style="color:#fff;">
        With EPLAN Pro Panel, we go beyond traditional 2D design. The software allows for precise planning of space, clearance, and heat dissipation inside the cabinet, ensuring optimal performance and safety. Integrated routing of wires and cables helps reduce wiring time, avoid collisions, and improve maintainability.
      </p>
      <p style="color:#fff;">
        One of the major advantages of EPLAN Pro Panel is its seamless integration with EPLAN Electric P8, allowing direct synchronization between electrical schematics and 3D panel layouts. This eliminates duplication of work, minimizes errors, and streamlines the entire design-to-manufacturing process.
      </p>
      <p style="color:#fff;">
        EPLAN Pro Panel also supports digital twin creation, automated wiring lists, drilling templates, and data output for CNC machines—making it ideal for companies embracing Industry 4.0 and smart manufacturing.
      </p>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4 col-sm-12">
      <div style="background:#111; border-radius:12px; padding:20px; margin-bottom:20px; box-shadow:0 0 20px rgba(0,255,255,0.3);">
        <h4 style="color:#ff0080; font-family:'Adamina',serif;">OUR SERVICES</h4>
        <hr style="border-color:#0ff;">
        <p style="color:#0ff; cursor:pointer;" onclick="goTo('services.php')">&#9656; EPLAN Electric P8</p>
        <p style="color:#0ff; cursor:pointer;" onclick="goTo('eplan-propanel.php')">&#9656; EPLAN Pro Panel</p>
        <p style="color:#0ff; cursor:pointer;" onclick="goTo('system integration.php')">&#9656; System Integration</p>
      </div>

      <div style="background:#111; border-radius:12px; padding:20px; margin-bottom:20px; box-shadow:0 0 20px rgba(0,255,255,0.3);">
        <h4 style="color:#ff0080; font-family:'Adamina',serif;">Industries We Serve</h4>
        <hr style="border-color:#0ff;">
        <p style="color:#0ff; cursor:pointer;" onclick="goTo('manufacturing.php')">&#9656; Automotive Manufacturing</p>
        <p style="color:#0ff; cursor:pointer;" onclick="goTo('manufacturing.php')">&#9656; Food & Beverage Processing</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('pharma')">&#9656; Pharmaceutical & Medical Devices</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('packaging')">&#9656; Packaging & Logistics</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('robotics')">&#9656; Machine Building & Robotics</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('oil')">&#9656; Oil and Gas</p>
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