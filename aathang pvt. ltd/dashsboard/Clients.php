<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EPLAN Pro Panel - Aathang Technology Pvt Ltd</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap + Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Orbitron:wght@500&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body style="background:#0a0a0a; color:#e5e5e5; font-family:'Poppins',sans-serif;">

<!-- Futuristic Background -->
<canvas id="bgCanvas" style="position:fixed; top:0; left:0; width:100%; height:100%; z-index:-1; pointer-events:none;"></canvas>

<!-- Header -->
<div style="background:linear-gradient(90deg,#000428,#004e92); padding:20px; border-bottom:2px solid #0ff; box-shadow:0 0 15px rgba(0,255,255,0.6); font-family:'Audiowide',sans-serif;">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <img src="../image/company logo.jpg" alt="Logo" height="70px" class="me-3" style="border-radius:50%; box-shadow:0 0 20px cyan;">
      <div>
        <h2 class="mb-0 text-white">Aathang Technology Pvt. Ltd.</h2>
        <small style="color:#0ff;">Your Trusted Partner for Electrical Solutions</small>
      </div>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background:#000; font-family:'Orbitron',sans-serif; letter-spacing:1px;">
  <div class="container">
    <a class="navbar-brand d-lg-none text-info" href="#">Clients</a>
    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="mainNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-light fw-bold" href="../index.php">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light fw-bold" href="#" data-bs-toggle="dropdown">About Us</a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-info" href="#">Profile</a></li>
            <li><a class="dropdown-item text-info" href="../dashboard/company.php">Company</a></li>
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

        <li class="nav-item"><a class="nav-link text-light fw-bold" href="#">Clients</a></li>
        <li class="nav-item"><a class="nav-link text-light fw-bold" href="#">Career</a></li>
        <li class="nav-item"><a class="nav-link text-light fw-bold" href="../dashboard/enquiry.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link text-light fw-bold" href="../dashboard/enquiry.php">Enquiry</a></li>
      </ul>
    </div>
  </div>
</nav>










<!-- Footer -->
<footer class="text-light pt-4" style="background:#000;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5 style="color:#0ff; font-family:'Orbitron',sans-serif;">Aathang Technology Pvt Ltd</h5>
        <p>Providing innovative automation solutions to help businesses grow</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5 style="color:#0ff; font-family:'Orbitron',sans-serif;">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light">Home</a></li>
          <li><a href="#" class="text-light">About Us</a></li>
          <li><a href="#" class="text-light">Services</a></li>
          <li><a href="#" class="text-light">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h5 style="color:#0ff; font-family:'Orbitron',sans-serif;">Follow Us</h5>
        <a href="#"><img src="../image/yt.jpg" height="40"></a>
        <a href="#"><img src="../image/in.jpg" height="40"></a>
        <a href="#"><img src="../image/fa.jpg" height="40"></a>
        <a href="#"><img src="../image/link.jpg" height="40"></a>
      </div>
    </div>
    <hr class="bg-light">
    <div class="text-center pb-3" id="footerText"></div>
  </div>
</footer>

<!-- Scripts -->
<script>
function scrollToSection(id){
  const el=document.getElementById(id);
  if(el) el.scrollIntoView({behavior:'smooth'});
}
function goTo(page){
  window.location.href=page;
}

// Footer typing animation
let footerTxt="© Aathang Technology Pvt Ltd | All Rights Reserved";
let i=0;
function typeWriter(){
  if(i<footerTxt.length){
    document.getElementById("footerText").innerHTML+=footerTxt.charAt(i);
    i++;
    setTimeout(typeWriter,100);
  }
}
typeWriter();

// Background animation
(function(){
  const canvas=document.getElementById("bgCanvas");
  const ctx=canvas.getContext("2d");
  function resize(){canvas.width=window.innerWidth; canvas.height=window.innerHeight;}
  window.addEventListener("resize",resize);resize();
  const text=" AATHANG ";
  let offset=0;
  function draw(){
    ctx.clearRect(0,0,canvas.width,canvas.height);
    ctx.fillStyle="rgba(0,255,255,0.05)";
    ctx.font="bold 40px Audiowide";
    const textWidth=ctx.measureText(text).width;
    offset-=2; if(offset<-textWidth) offset=0;
    for(let y=0;y<canvas.height;y+=80){
      for(let x=offset;x<canvas.width;x+=textWidth+100){
        ctx.fillText(text,x,y);
      }
    }
    requestAnimationFrame(draw);
  }
  draw();
})();
</script>

</body>
</html>
