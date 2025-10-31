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



<!-- Enquriy -->
<div class="container" style="max-width:700px; margin:60px auto; font-family:'Adamina',serif; color:#0ff;">
  
  <!-- Title -->
  <div style="text-align:center; margin-bottom:30px;">
    <h2 style="color:#00e6ff; font-size:36px; letter-spacing:1px;">Enquiry Form</h2>
    <div style="width:90px; height:3px; background:#00e6ff; margin:10px auto; border-radius:2px;"></div>
    
  </div>

  <!-- Form Card -->
  <div style="background:#0a0a0a; border-radius:15px; padding:35px; box-shadow:0 0 30px rgba(0,255,255,0.3);">
    <form action="../services/submit_enquiry.php" method="post">

      <!-- Name -->
      <input type="text" name="name" placeholder="Your Name" required
        style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;">

      <!-- Email -->
      <input type="email" name="email" placeholder="Your Email" required
        style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;">

      <!-- Phone -->
      <input type="tel" name="phone" placeholder="Your Phone Number" required
        style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;">

      <!-- Company -->
      <input type="text" name="company_name" placeholder="Your Company Name" required
        style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;">

      <!-- Address -->
      <textarea name="company_address" rows="3" placeholder="Your Company Address" required
        style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;"></textarea>

      <!-- Service Selection -->
      <select name="service" required
        style="width:100%; padding:12px; margin-bottom:15px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;">
        <option value="">-- Select Service --</option>
        <option value="EPLAN Electric P8">EPLAN Electric P8</option>
        <option value="EPLAN Pro Panel">EPLAN Pro Panel</option>
        <option value="System Integration">System Integration</option>
        <option value="Automotive Manufacturing">Automotive Manufacturing</option>
        <option value="Food & Beverage Processing">Food & Beverage Processing</option>
        <option value="Pharmaceutical & Medical Devices">Pharmaceutical & Medical Devices</option>
        <option value="Packaging & Logistics">Packaging & Logistics</option>
        <option value="Machine Building & Robotics">Machine Building & Robotics</option>
        <option value="Oil and Gas">Oil and Gas</option>
      </select>

      <!-- Message -->
      <textarea name="message" rows="5" placeholder="Your Message" required
        style="width:100%; padding:12px; margin-bottom:20px; border:1px solid #00e6ff; border-radius:8px; background:#111; color:#0ff; font-size:16px;"></textarea>

      <!-- Submit Button -->
      <div style="text-align:center;">
        <button type="submit"
          style="background:linear-gradient(90deg,#00e6ff,#ff0080); color:#fff; border:none; padding:12px 35px; border-radius:8px; font-size:17px; letter-spacing:1px; cursor:pointer; box-shadow:0 0 20px rgba(0,255,255,0.5); transition:0.3s;">
          Submit Enquiry
        </button>
      </div>

    </form>
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