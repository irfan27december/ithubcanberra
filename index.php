<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IT Hub Canberra</title>
  <link rel="stylesheet" href="style.css">
  <script src="calendar.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<form action="https://formspree.io/f/xwpoaago" method="POST">
<!--
<header>
  <h1>IT Hub Canberra</h1>
  <p class="tagline">Effective Business Performance. Your Trusted Partner in IT Services.</p>
</header>

<nav>
  <ul class="nav-tabs">
    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
    <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact Us</a></li>
  </ul>
</nav> -->

<?php include 'header.php'; ?>
<main>
  <section class="home-intro">
    <h2>Welcome to IT HUB Canberra</h2>
    <p>Explore our wide range of professional IT services tailored to meet your business and educational needs.</p>
    <p><strong>IT Hub Canberra Pty Ltd.</strong> was established in 2016 with the following goals:</p>
    <ul>
      <li>Education and hands-on lab training on various vendor-oriented</li>
      <li>Professional Certifications</li>
      <li>Systems, Networking & Integration and consultation for SMEs</li>
      <li>Web Development</li>
      <li>IT Infrastructure Monitoring & Support for SMEs</li>
      <li>Helping local communities with job-oriented training programs, offering job opportunities with our clients where possible.</li>
      <li>Job-guaranteed programs (with conditions for enrollment).</li>
    </ul>
    <a href="about.php" class="read-more-btn"><i class="fas fa-arrow-right"></i> Read More</a>
  </section>

  <section class="services">
    <h2>Our Services</h2>
    <div class="service-list">
      <div class="service-box"><i class="fas fa-network-wired"></i><h3>Network Services</h3><p>LAN/WAN design, firewalls, and load balancing with latest technologies.</p></div>
      <div class="service-box"><i class="fas fa-server"></i><h3>System Solutions</h3><p>Reliable systems including Skype for Business, Exchange Server and more.</p></div>
      <div class="service-box"><i class="fas fa-chalkboard-teacher"></i><h3>Training</h3><p>Certifications and job-focused hands-on training for communities.</p></div>
      <div class="service-box"><i class="fas fa-drafting-compass"></i><h3>Design & Consultancy</h3><p>Design, audits and consultancy for networks and systems.</p></div>
      <div class="service-box"><i class="fas fa-laptop-code"></i><h3>Online Training</h3><p>Coming soon… Online learning programs for IT professionals.</p></div>
      <div class="service-box"><i class="fas fa-briefcase"></i><h3>Business Solutions</h3><p>BillionExchange and investment solutions for businesses.</p></div>
      <div class="service-box"><i class="fas fa-university"></i><h3>Education Services</h3><p>Student visa assistance and education enrollment help.</p></div>
      <div class="service-box"><i class="fas fa-tools"></i><h3>Calibration Services</h3><p>Certified calibration for IT tools with vendor-approved labs.</p></div>
      <div class="service-box"><i class="fas fa-search"></i><h3>IT Auditing</h3><p>We assess and align your IT strategy with your business goals.</p></div>
    </div>
  </section>

<!--
  <section class="appointment">
    <div class="appointment-content">
      <strong>Start improving your business right now and have peace of mind.</strong>
      <button onclick="openCalendar()">Book an Appointment</button>
    </div>
  </section>

  <div id="calendar-modal" class="modal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeCalendar()">&times;</span>
      <h3>Select a Date</h3>
      <input type="date" id="appointment-date" value="<?= date('Y-m-d'); ?>">
    </div>
  </div>
  -->
  
  
  <section class="appointment">
    <div class="appointment-content">
      <strong>Start improving your business right now and have peace of mind.</strong>
      <button onclick="openCalendar()">Book an Appointment</button>
    </div>
  </section>

  <div id="calendar-modal" class="modal">
    <div class="modal-content">
      <span class="close-btn" onclick="closeCalendar()">&times;</span>
      <h3>Select a Date</h3>
      <form id="appointment-form">
        <input type="date" name="appointment_date" id="appointment-date" required>
        <br><br>
        <button type="submit">Submit</button>
        <p id="form-response" style="margin-top:10px; color:green;"></p>
      </form>
    </div>
  </div>
  
  

</main>

<?php include 'footer.php'; ?>

<!-- <footer>
  <p>Address: Level 10-11, No. 66, Clarence Street, Sydney, NSW 2000, Australia.</p>
  <p>Phones: (061) 0292480113</p>
  <p>Email: <a href="mailto:info@cislab.com.au">info@cislab.com.au</a></p>
</footer>
-->

</form>
</body>
</html>
