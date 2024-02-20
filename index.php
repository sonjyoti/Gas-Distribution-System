<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Booking Portal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/image-slider.css">
    <link rel="stylesheet" href="assets/css/safety.css">
	<link rel="icon" href="assets/img/logo.jpg" type="image/png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
    <!-- ---- Navbar Section starts ---- -->
	<nav class="navbar navbar-default" style="background-color: rgba(0, 0, 0, 0.871); border-radius: 0%; height: 70px; display: flex; align-items: center;">
        <div class="container-nav">
            <a class="navbar-brand" style="color: white; padding-left: 30px;"><b>EASY-GAS ONLINE</b></a>
            <ul class="navbar-nav" style="list-style: none; display: flex; justify-content: flex-end;">
                <li class="navbar-brand avtive" style="font-size: large; margin-right: 5x; padding-left: 400px;">
                    <a href="index.php" style="color: white; text-decoration: none;"><b>Home</b></a>
                </li>
                <li class="navbar-brand" style="font-size: large; margin-right: 5x;">
                    <a href="#service" style="color: white; text-decoration: none;"><b>Services</b></a>
                </li>
                <li class="navbar-brand" style="font-size: large; margin-right: 5x;">
                    <a href="#about" style="color: white; text-decoration: none;"><b>About Us</b></a>
                </li>

                <div class="button-container" style="display: flex; align-items: center; padding-left: 360px;">
					<button style="height: 30px; width: 80px; background-color: green; color: white; border: 1px solid black; display: flex; justify-content: center; align-items: center; margin-right: 2px;"
						onmouseover="this.style.backgroundColor='white'; this.querySelector('a').style.color='black'"
						onmouseout="this.style.backgroundColor='green'; this.querySelector('a').style.color='white'">
						<a href="register.php" style="color: white; text-decoration: none; display: block;">
							<b>Register</b>
						</a>
					</button>

					<button style="height: 30px; width: 80px; background-color: green; color: white; border: 1px solid black; display: flex; justify-content: center; align-items: center;"
						onmouseover="this.style.backgroundColor='white'; this.querySelector('a').style.color='black'"
						onmouseout="this.style.backgroundColor='green'; this.querySelector('a').style.color='white'">
						<a href="login.php" style="color: white; text-decoration: none;">
							<b>Log-In</b>
						</a>
					</button>
				</div>
            </ul>
        </div>
    </nav>
    <!-- ---- Navbar Section ends ---- -->

	<!-- -- Image Slider Section Starts -- -->
	<div class="slider-container">
        <div class="slider">
			<div class="slide"><img src="assets/img/bg3.png" style="height: 700px; width: 1520px;" alt="Image 1"></div>
            <div class="slide"><img src="assets/img/bg1.png" style="height: 700px; width: 1520px;" alt="Image 2"></div>
            <div class="slide"><img src="assets/img/bgg44.png" style="height: 700px; width: 1520px;" alt="Image 3"></div>
        </div>
        <div class="prev-btn" onclick="prevSlide()">❮</div>
        <div class="next-btn" onclick="nextSlide()">❯</div>
    </div>
	<!-- -- Image Slider Section Ends -- -->
	
	<!-- -- Safety Tips Section Starts -- -->
	<div class="about-us-section" style="margin-top: 5%;">
		<div class="heading_container heading_center" style="text-align: center; padding-bottom: 20px;">
			<h2 style="font-size: 30px; text-transform: uppercase; color: rgba(0, 0, 0, 0.793);"><b>Safety Tips</b> </h2>
			<p style="font-size: medium; color: red;"><b>Do’s & Don’ts: Ensuring the Safe Handling and Usage of Liquefied Petroleum Gas in Domestic Environments</b></p>
		</div>

        <div class="safety-container">
			<div style="display: flex; margin-left: 10%;">
				<div class="left-column">
					<h3 style="text-decoration: underline;"><b><span class="glyphicon glyphicon-ok text-success"></span>DO'S</b></h3>
					<div style="padding: 20px;">
						<ul>
							<li class="saf-txt"><b>Store LPG cylinders in a well-ventilated area away from direct sunlight or heat sources.</b></li>
							<li class="saf-txt"><b>Regularly check for gas leaks using soapy water or a leak detection solution.</b></li>
							<li class="saf-txt"><b>Follow proper installation and always close the regulator knob once you finish cooking.</b></li>
							<li class="saf-txt"><b>Keep LPG cylinders in an upright position to prevent leakage and damage.</b></li>
							<li class="saf-txt"><b>Replace or repair damaged or expired cylinders as per safety guidelines.</b></li>
						</ul>
					</div>
					
				</div>
			
				<div class="right-column">
					<h3 style="text-decoration: underline;"><b><span class="glyphicon glyphicon-remove text-danger"></span>DON'T</b></h3>
					<div style="padding: 20px;">
						<ul>
							<li class="saf-txt"><b>Don't store LPG cylinders in confined spaces, basements, or areas prone to flooding.</b></li>
							<li class="saf-txt"><b>Don't use open flames or matches near a suspected gas leak; use electrical switches or appliances.</b></li>
							<li class="saf-txt"><b>Don't tamper with safety devices, valves, or regulators on the LPG cylinder.</b></li>
							<li class="saf-txt"><b>Don't attempt to repair or refill LPG cylinders yourself; leave it to authorized professionals.</b></li>
							<li class="saf-txt"><b>Don't smoke while handling LPG cylinders or using LPG appliances.</b></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
	<!-- -- Safety Tips Section Ends -- -->

	<!-- service section -->
	<div style="margin-top: 10%;" id="service">
		<section class="service_section layout_padding">
			<div class="container">
				<div class="heading_container heading_center" style="text-align: center;">
					<h2 style="font-size: 30px; text-transform: uppercase; color: rgba(0, 0, 0, 0.793);"><b> Our Services</b> </h2>
					<p style="font-size: medium; color: red;"><b>Effortless gas booking, user-friendly interface, and speedy 24-hour delivery for ultimate convenience.</b></p>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-4 mx-auto">
						<div class="box ">
							<div class="img-box">
								<img src="assets/img/gas-stove2.gif">
							</div>
							<div class="detail-box">
							<h5>Online Gas Booking</h5>
								<p>Conveniently book gas cylinders online, no need for physical visits.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 mx-auto">
						<div class="box ">
							<div class="img-box">
								<img src="assets/img/user.gif">
							</div>
							<div class="detail-box">
								<h5>User Friendly Interface</h5>
								<p>Streamlined platform for easy gas booking, no technical complexities.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4 mx-auto">
						<div class="box ">
							<div class="img-box">
								<img src="assets/img/delivery-truck.gif">
							</div>
							<div class="detail-box">
								<h5>Within 24 Hours Delivery</h5>
								<p>Gas cylinders delivered within 24hrs, ensuring convenience and reliability for customers.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-box">
				<a href="register.php" style="text-decoration: none;"><b>Click Here To Register</b></a>
			</div>
		</section>
	</div>
	
	<!-- service section -->

	<!-- -- About Section Starts -- -->
	<div class="about" id="about" style="margin-bottom: 10%;">
		<div class="heading_container heading_center" style="text-align: center; padding-bottom: 20px;">
			<h2 style="font-size: 30px; text-transform: uppercase; color: rgba(0, 0, 0, 0.793);"><b>About Us</b></h2>
			<p style="font-size: medium; color: red;"><b>Know more about us - Who we Are? What makes us Apart?</b></p>
		</div>
	
		<div class="about-body" style="padding-left: 2%; padding-right: 2%; margin-left: 11%;">
			<div class="row">
				<div class="col-md-6" style="background-color: rgba(0, 0, 0, 0.573); border-radius: 8px; width: 1150px;">
					<p style="color: rgba(255, 255, 255, 0.83); font-size: medium; padding: 30px; text-align: center;">
						<b>The Online Gas Distribution System sets itself apart through seamless efficiency and user-friendly interfaces. Advanced tracking mechanisms ensure real-time monitoring of gas levels, enhancing safety and convenience. Automated alerts and quick response mechanisms further distinguish this system, ensuring a streamlined and secure experience for users. The integration of cutting-edge technology makes it a reliable and innovative solution for efficient gas distribution in the digital age.</b>
					</p>
				</div>
			</div>
		</div>
	</div>
	

	<!-- -- About Section Ends -- -->

	<!-- --- Footer Section --- -->
    <section class="features" style="background-color: rgba(0, 0, 0, 0.871); color: rgba(255, 255, 255, 0.8);">
		<div class="container">
            <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
              <div class="col-lg-3">
                <div class="footer-address" style="padding-left: 0%;">
                  <h4 style="color: white;"><b>- Quick Links</b></h4>
                  <ul class="list-unstyled" style="font-size: larger; padding-left: 20px;">
                    <li><a href="index.html" style="color: rgba(255, 255, 255, 0.8); text-decoration: none;">Home</a></li>
                    <li><a href="login.html" style="color: rgba(255, 255, 255, 0.8); text-decoration: none;"> Log-in</a></li>
                    <li><a href="register.html" style="color: rgba(255, 255, 255, 0.8); text-decoration: none;"> Register</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3" style="padding-left: 30px;">
                <div class="footer-contact">
                  <h4 style="color: white;"><b>Contact Us</b></h4>
                  <p>East-Gotanagar, Maligaon<br>Guwahati, Assam, Pin: 781011<br>Email: info@example.com<br>Phone: +123456789</p>
                </div>
              </div>
              <div class="col-lg-3" style="padding-left: 70px;">
                <div class="quick-links">
                  <h4 style="color: white;"><b>Developed By</b></h4>
                  <ul class="list-unstyled">
				  <p>- Prithibiraj Keot <br> Roll No: UT-211-023-0025</p>
                    <p>- Hirokjyoti Kalita <br> Roll No: UT-211-023-0014</p>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="quick-links" style="padding-left: 100px;">
                  <h4 style="color: white;"><b>Guided By</b></h4>
                  <ul class="list-unstyled">
                    <p>- Masud Alam Rofi <br> Assistant Professor, LCBC</p>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </section>
    <footer class="site-footer" style="background-color: rgba(0, 0, 0, 0.707);">
      <div class="container">
        <div class="row" style="color: rgba(255, 255, 255, 0.903);">
          <h7><b>Online Gas Distribution System | Copyright © Pritviraj Keot & Hirokjyoti Kalita</b></h7>
        </div>
      </div>
    </footer>
	<!-- --- Footer Section ends--- -->

	<script>
		let currentIndex = 0;
		const autoPlayInterval = 5000; // Set the interval for auto-play in milliseconds

		function showSlide(index) {
			const slider = document.querySelector('.slider');
			const slides = document.querySelectorAll('.slide');

			if (index < 0) {
				index = slides.length - 1;
			} else if (index >= slides.length) {
				index = 0;
			}

			currentIndex = index;
			const translateValue = -index * 100 + '%';
			slider.style.transform = 'translateX(' + translateValue + ')';
		}

		function prevSlide() {
			showSlide(currentIndex - 1);
		}

		function nextSlide() {
			showSlide(currentIndex + 1);
		}

		// Auto-play the slider
		setInterval(nextSlide, autoPlayInterval);

	</script>
</body>
</html>