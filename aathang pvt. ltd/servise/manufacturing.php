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


    <!-- Bootstrap Carousel -->
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/nn10.png" class="d-block w-100" alt="Slide 1">
            </div>

        </div>

    </div>

    

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12" style="padding:20px; background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364); box-shadow:0 0 25px rgba(0,255,255,0.3); border-radius:12px;">


                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-sm-12">
                            <!-- Title -->
                            <div style="font-size:65px; color:#0ff; font-weight:bold; font-family:'Adamina',serif; line-height:1.2; text-shadow:0 0 15px #0ff;">
              Industries<br><span style="display:inline-block; padding-left:80px; color:#ff0080; text-shadow:0 0 15px #ff0080;">We Serve</span>
            </div>
                            <!-- topic title -->
                            <div style="font-family:'Adamina',serif; padding:50px;">
                             <h3 style="color:#ff0080; font-size:28px; position:relative; display:inline-block; top:40px; text-shadow:0 0 10px #ff0080;">
                             <span style="position:absolute; left:-55px; top:-48px; font-size:50px; color:#0ff; font-weight:bold; z-index:0; text-shadow:0 0 15px #0ff;">01</span>
                               Automotive Manufacturing
                               </h3>
                              </div>
                            <hr>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">

                                <img src="../image/nn9.jpg" alt="EPLAN Pro Panel"
                                    style="width: 150px; height: auto; display: block; flex: 1 1 150px; max-width: 100%;">

                                <img src="../image/nn11.jpg" alt="EPLAN Electric P8"
                                    style="width: 150px; height: auto; display: block; flex: 1 1 150px; max-width: 100%;">

                            </div>



                            <p style="color:#fff">The automotive industry is one of the most dynamic, complex, and
                                competitive sectors in modern manufacturing.
                            </p>

                            <p style="color:#fff"> With increasing demand for electric vehicles (EVs), shorter
                                product lifecycles, and the
                                need for just-in-time production, automotive manufacturers must adopt advanced
                                technologies to stay ahead.</p>

                            <p style="color:#fff"> We provide smart, scalable, and integrated solutions tailored for
                                the automotive
                                manufacturing environment—covering everything from design and automation to panel
                                building and system integration. Our focus is on helping OEMs, Tier 1 suppliers, and
                                machine builders streamline production, reduce downtime, and accelerate time-to-market.
                            </p>




                            <h5 style="color:#0ff; padding:10px; margin-top:40px; font-family:'Adamina',serif; text-shadow:0 0 10px #0ff;">
                         Our Solutions for Automotive Manufacturing:
                         </h5>


                            <i class="fa-solid fa-arrow-right"></i> <strong>Electrical Design Automation:</strong>
                            <p style="color:#fff"> Using tools like EPLAN Electric P8, we create detailed, accurate,
                                and reusable
                                schematics for automotive production lines, robotics, and testing systems.<br></p>

                            <i class="fa-solid fa-arrow-right"></i> <strong>3D Control Panel Design:</strong>
                            <p style="color:#fff"> With EPLAN Pro Panel, we design efficient, space-optimized
                                electrical enclosures,
                                reducing wiring time and supporting rapid deployment on assembly lines.<br></p>

                            <i class="fa-solid fa-arrow-right"></i><strong>PLC, SCADA & HMI Integration:</strong>
                            <p style="color:#fff"> We integrate leading control systems (e.g., Siemens,
                                Allen-Bradley) for robotics,
                                conveyors, press machines, and vision systems—ensuring high-speed, synchronized
                                operations.<br></p>

                            <i class="fa-solid fa-arrow-right"></i><strong> System Integration:</strong>
                            <p style="color:#fff"> Seamless communication between machines, MES, ERP, and quality
                                systems—enabling
                                real-time production tracking, predictive maintenance, and Industry 4.0 readiness.<br>
                            </p>
                            </p>
                            <!-- =======2 row========================================= -->
                            <div style="font-family:'Adamina',serif; padding:50px;">
                             <h3 style="color:#ff0080; font-size:28px; position:relative; display:inline-block; top:40px; text-shadow:0 0 10px #ff0080;">
                             <span style="position:absolute; left:-55px; top:-48px; font-size:50px; color:#0ff; font-weight:bold; z-index:0; text-shadow:0 0 15px #0ff;">02</span>
                                    Food & Beverage Processing
                                </h3>
                            </div>
                            <hr>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">

                                <img src="../image/nn12.jpg" alt="EPLAN Pro Panel"
                                    style="width: 150px; height: auto; display: block; flex: 1 1 150px; max-width: 100%;">

                                <img src="../image/nn17.jpg" alt="EPLAN Electric P8"
                                    style="width: 150px; height: auto; display: block; flex: 1 1 150px; max-width: 100%;">

                            </div>

                            <p style="color:#fff">The automotive industry is one of the most dynamic, complex, and
                                competitive sectors in modern manufacturing.
                            </p>

                            <p style="color:#fff"> With increasing demand for electric vehicles (EVs), shorter
                                product lifecycles, and the
                                need for just-in-time production, automotive manufacturers must adopt advanced
                                technologies to stay ahead.</p>

                            <p style="color:#fff"> We provide smart, scalable, and integrated solutions tailored for
                                the automotive
                                manufacturing environment—covering everything from design and automation to panel
                                building and system integration. Our focus is on helping OEMs, Tier 1 suppliers, and
                                machine builders streamline production, reduce downtime, and accelerate time-to-market.
                            </p>




                             <h5 style="color:#0ff; padding:10px; margin-top:40px; font-family:'Adamina',serif; text-shadow:0 0 10px #0ff;">Our
                                Solutions for Automotive Manufacturing:</h5>
                            <hr>


                            <i class="fa-solid fa-arrow-right"></i> <strong>Electrical Design Automation:</strong>
                            <p style="color:#fff"> Using tools like EPLAN Electric P8, we create detailed, accurate,
                                and reusable
                                schematics for automotive production lines, robotics, and testing systems.<br></p>

                            <i class="fa-solid fa-arrow-right"></i> <strong>3D Control Panel Design:</strong>
                            <p style="color:#fff"> With EPLAN Pro Panel, we design efficient, space-optimized
                                electrical enclosures,
                                reducing wiring time and supporting rapid deployment on assembly lines.<br></p>

                            <i class="fa-solid fa-arrow-right"></i><strong>PLC, SCADA & HMI Integration:</strong>
                            <p style="color:#fff"> We integrate leading control systems (e.g., Siemens,
                                Allen-Bradley) for robotics,
                                conveyors, press machines, and vision systems—ensuring high-speed, synchronized
                                operations.<br></p>

                            <i class="fa-solid fa-arrow-right"></i><strong> System Integration:</strong>
                            <p style="color:#fff"> Seamless communication between machines, MES, ERP, and quality
                                systems—enabling
                                real-time production tracking, predictive maintenance, and Industry 4.0 readiness.<br>
                            </p>
                            </p>

                            <!-- =====================================3 row======================================== -->
                            <div style="font-family:'Adamina',serif; padding:50px;">
                             <h3 style="color:#ff0080; font-size:28px; position:relative; display:inline-block; top:40px; text-shadow:0 0 10px #ff0080;">
                             <span style="position:absolute; left:-55px; top:-48px; font-size:50px; color:#0ff; font-weight:bold; z-index:0; text-shadow:0 0 15px #0ff;">03</span>
                                    Pharmaceutical & Medical Devices
                                </h3>
                            </div>
                            <hr>
                            <img src="../image/nn16.jpg" alt="EPLAN Pro Panel"
                                style="max-width: 100%; height: auto; display: block;">


                            <p style="color:#fff">Precision Engineering for Regulated Environments
                            </p>

                            <p style="color:#fff">In the highly regulated world of pharmaceuticals and medical
                                devices, precision, cleanliness, and compliance are non-negotiable. We provide
                                specialized electrical design, control system integration, and automation solutions that
                                meet the strictest industry standards—ensuring safe, reliable, and validated operations.
                            </p>

                            <p style="color:#fff">From cleanroom machinery to packaging lines and utility systems,
                                our solutions help pharma manufacturers streamline production while maintaining full
                                compliance with GMP, FDA 21 CFR Part 11, and GAMP guidelines.
                            </p>






                            <!-- =====================================4 row======================================== -->
                            <div style="font-family:'Adamina',serif; padding:50px;">
                             <h3 style="color:#ff0080; font-size:28px; position:relative; display:inline-block; top:40px; text-shadow:0 0 10px #ff0080;">
                             <span style="position:absolute; left:-55px; top:-48px; font-size:50px; color:#0ff; font-weight:bold; z-index:0; text-shadow:0 0 15px #0ff;">04</span>
                                    Packaging & Logistics
                                </h3>
                            </div>
                            <hr>
                            <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">

                                <img src="../image/nn13.jpg" alt="EPLAN Pro Panel"
                                    style="width: 150px; height: auto; display: block; flex: 1 1 150px; max-width: 100%;">

                                <img src="../image/nn17.jpg" alt="EPLAN Electric P8"
                                    style="width: 150px; height: auto; display: block; flex: 1 1 150px; max-width: 100%;">

                            </div>

                            <p style="color:#fff">Smart Automation for Fast, Accurate, and Reliable Operations
                            </p>

                            <p style="color:#fff">In the fast-paced world of packaging and logistics, speed,
                                accuracy, and flexibility are critical. We provide intelligent electrical design and
                                automation solutions that keep your packaging lines and material handling systems
                                running at peak efficiency.</p>

                            <p style="color:#fff"> From automated packing machines and labeling systems to conveyor
                                controls and warehouse automation, our engineering approach ensures seamless
                                integration, reduced downtime, and optimal throughput.
                            </p>

                            <p style="color:#fff"> Using <strong>EPLAN Electric P8 and Pro Panel</strong>, we develop
                                clean, modular
                                control designs and detailed wiring layouts—backed by automated documentation, accurate
                                BOMs, and built-in error prevention.
                            </p>




                             <h5 style="color:#0ff; padding:10px; margin-top:40px; font-family:'Adamina',serif; text-shadow:0 0 10px #0ff;">Our
                                Solutions for Packaging & Logistics Include:</h5>
                            <hr>



                            <i class="fa-solid fa-arrow-right" style="color:#fff"></i>
                            Electrical design for packaging machines & conveyor systems<br>


                            <i class="fa-solid fa-arrow-right" style="color:#fff"></i>
                            Integration of PLCs, HMIs, barcode scanners, and vision
                            systems<br>

                            <i class="fa-solid fa-arrow-right" style="color:#fff"></i>
                            Control panel layout and 3D cabinet design<br>

                            <i class="fa-solid fa-arrow-right" style="color:#fff"></i>
                            Servo & motion control for high-speed lines

                            SCADA systems for warehouse and plant-wide monitoring<br>

                            </p>

                            <!-- =====================================5 row======================================== -->
                            <div style="font-family:'Adamina',serif; padding:50px;">
                             <h3 style="color:#ff0080; font-size:28px; position:relative; display:inline-block; top:40px; text-shadow:0 0 10px #ff0080;">
                             <span style="position:absolute; left:-55px; top:-48px; font-size:50px; color:#0ff; font-weight:bold; z-index:0; text-shadow:0 0 15px #0ff;">05</span>
                                    Machine Building & Robotics
                                </h3>
                            </div>
                            <hr>
                            <img src="../image/nn15.jpg" alt="EPLAN Pro Panel"
                                style="max-width: 100%; height: auto; display: block;">


                            <p style="color:#fff">Engineering the Future of Smart Machines
                            </p>

                            <p style="color:#fff">We support machine builders and robotics integrators with powerful
                                electrical design, automation, and system integration solutions tailored for
                                high-performance, precision-driven environments. From compact machines to large-scale
                                robotic cells, our workflows are built to reduce engineering time, enhance flexibility,
                                and accelerate time-to-market.</p>

                            <p style="color:#fff"> Using advanced tools like EPLAN Electric P8 and EPLAN Pro Panel,
                                we create reusable, modular electrical schematics and 3D panel layouts that allow faster
                                customization and standardization across multiple machine variants. Our integrated
                                approach helps eliminate manual rework, reduce wiring errors, and ensure compliance with
                                global standards (IEC, NFPA, UL, etc.).
                            </p>




                             <h5 style="color:#0ff; padding:10px; margin-top:40px; font-family:'Adamina',serif; text-shadow:0 0 10px #0ff;">Our
                                Capabilities Include:</h5>
                            <hr>


                            <i class="fa-solid fa-arrow-right"></i>
                            <p style="color:#fff"> Modular machine control design<br></p>


                            <i class="fa-solid fa-arrow-right"></i>
                            <p style="color:#fff"> Robotics control panel engineering<br></p>

                            <i class="fa-solid fa-arrow-right"></i>
                            <p style="color:#fff">Servo and motion system integration<br></p>

                            <i class="fa-solid fa-arrow-right"></i>
                            <p style="color:#fff"> PLC, HMI & sensor interfacing (Siemens, Beckhoff, B&R, etc.)

                                3D panel layouts with accurate wire routing<br>
                            </p>
                            </p>

                            <!-- =====================================6 row======================================== -->
                            <div style="font-family:'Adamina',serif; padding:50px;">
                             <h3 style="color:#ff0080; font-size:28px; position:relative; display:inline-block; top:40px; text-shadow:0 0 10px #ff0080;">
                             <span style="position:absolute; left:-55px; top:-48px; font-size:50px; color:#0ff; font-weight:bold; z-index:0; text-shadow:0 0 15px #0ff;">06</span>
                                    Oil and Gas
                                </h3>
                            </div>
                            <hr>
                            <img src="../image/nn14.jpg" alt="EPLAN Pro Panel"
                                style="max-width: 100%; height: auto; display: block;">

                            <strong>Reliable Engineering Solutions for a Demanding Industry</strong><br>
                            <p style="color:#fff">The Oil & Gas sector demands precision, safety, and reliability at
                                every level—from upstream exploration to downstream processing. We deliver advanced
                                electrical design and automation solutions tailored for harsh environments, complex
                                systems, and strict regulatory standards.
                            </p>

                            <p style="color:#fff">With tools like EPLAN Electric P8 and EPLAN Pro Panel, we help
                                engineers design error-free electrical schematics and detailed 3D control panels that
                                are optimized for hazardous area operations. Our systems ensure clear documentation,
                                traceability, and seamless integration with DCS, SCADA, and safety systems.</p>



                            <!-- =====================================end here row======================================== -->
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
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('processing')">&#9656; Food & Beverage Processing</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('pharma')">&#9656; Pharmaceutical & Medical Devices</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('packaging')">&#9656; Packaging & Logistics</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('robotics')">&#9656; Machine Building & Robotics</p>
        <p style="color:#0ff; cursor:pointer;" onclick="scrollToSection('oil')">&#9656; Oil and Gas</p>
      </div>


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