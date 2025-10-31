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
    <li><a class="dropdown-item text-info" href="../services/system-integration.php">System Integration</a></li>
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

    
    <!-- Directors' Message Section -->
  <div class="row" style="display:flex; flex-wrap:wrap; width:100%; min-height:100vh; 
    background:linear-gradient(135deg, #0a0a2a, #001f3f, #003f6b); 
    color:#fff; overflow:hidden;">

    <!-- Left Side: Text -->
    <div class="col" style="
      flex:1;
      min-width:300px;
      padding:70px 50px;
      display:flex;
      flex-direction:column;
      justify-content:center;
      backdrop-filter:blur(3px);
    ">
      <h4 style="letter-spacing:2px; color:#00e6ff; margin-bottom:10px;">DIRECTORS' MESSAGE</h4>
      <h1 style="font-size:45px; margin:0 0 25px 0; color:#fff;">We Lead with Innovation</h1>
      <p style="line-height:1.8; font-size:17px; text-align:justify; color:#e0e0e0;">
        At <strong style="color:#00e6ff;">Aathang Technology Pvt. Ltd.</strong>, our journey began with a shared vision — 
        to redefine excellence in electrical design and automation services.
        Our mission is to deliver high-quality, precise, and future-ready engineering solutions that empower industries 
        to work smarter and safer.
        <br><br>
        With dedication, teamwork, and continuous innovation, we have built a culture that values integrity, creativity, 
        and reliability. We believe success comes from combining advanced technology with human expertise — 
        a balance we strive to maintain in every project.
        <br><br>
        We sincerely thank our clients, partners, and talented team members for their trust and contribution toward our growth.
        Together, we aim to continue creating impactful solutions that shape the future of automation.
      </p>
    </div>

    <!-- Right Side: Image -->
    <div class="col" style="
      flex:1;
      min-width:300px;
      background-image:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.4)), url('../image/about.jpg');
      background-size:cover;
      background-position:center;
      clip-path:polygon(15% 0, 100% 0, 100% 100%, 0 100%);
      border-left:4px solid #00e6ff;
    ">
    </div>

  </div>

    <!-- Directors Info -->
<div style=" display:flex;  flex-wrap:wrap;  justify-content:center;  margin-top:60px;  gap:50px;  background:linear-gradient(135deg,#001f3f,#003366,#000814); padding:50px 20px; border-top:2px solid #00e6ff; border-bottom:2px solid #00e6ff;">

  <!-- Director 1 -->
  <div style="
    background: linear-gradient(180deg, rgba(0,255,255,0.1), rgba(0,0,0,0.9));
    padding:25px; 
    border-radius:20px; 
    width:260px; 
    text-align:center; 
    box-shadow:0 0 25px rgba(0,255,255,0.3);
    transition: all 0.4s ease;
  " 
  onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 0 40px rgba(0,255,255,0.7)';" 
  onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0 25px rgba(0,255,255,0.3)';">
    
    <img src="../image/nn26.jpg" alt="Miss Ankita Sutar" style="
      width:130px; 
      height:130px; 
      object-fit:cover; 
      border-radius:50%; 
      margin-bottom:20px; 
      border:4px solid #00e6ff;
      box-shadow:0 0 25px rgba(0,255,255,0.6);
    ">
    
    <h4 style="color:#00e6ff; margin:5px 0; font-size:20px;">Miss. Ankita Sutar</h4>
    <p style="font-style:italic; color:#ccc; margin:0;">Co-Founder & Director</p>
  </div>

  <!-- Director 2 -->
  <div style="
    background: linear-gradient(180deg, rgba(0,255,255,0.1), rgba(0,0,0,0.9));
    padding:25px; 
    border-radius:20px; 
    width:260px; 
    text-align:center; 
    box-shadow:0 0 25px rgba(0,255,255,0.3);
    transition: all 0.4s ease;
  " 
  onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 0 40px rgba(0,255,255,0.7)';" 
  onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0 25px rgba(0,255,255,0.3)';">
    
    <img src="../image/nn26.jpg" alt="Mrs Poonam Hiremath" style="
      width:130px; 
      height:130px; 
      object-fit:cover; 
      border-radius:50%; 
      margin-bottom:20px; 
      border:4px solid #00e6ff;
      box-shadow:0 0 25px rgba(0,255,255,0.6);
    ">
    
    <h4 style="color:#00e6ff; margin:5px 0; font-size:20px;">Mrs. Poonam Hiremath</h4>
    <p style="font-style:italic; color:#ccc; margin:0;">Co-Founder & Director</p>
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
