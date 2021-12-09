<?php session_start(); ?>

<!--- Dalton Murray, Gavin Poulton, Yousif Haddad -->

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="theme-color" content="#4185bb">
	<meta name="description" content="Contact us form, about us">
	<meta name="keywords" content="Landmarks, USA, United States, Tourism, Vacation, Destinations, Visit, Places, Top 10,
		Cloud Gate, Disney, Empire State Building, Gateway Arch, Golden Gate Bridge, Grand Canyon, Hot Springs, Space Needle, White House, Yellowstone,
		contact, contact us, about, about us">

	<title>Contact Us | United States Landmarks</title>
	<link rel="icon" href="Assets/mainLogo.png" type="image/x-icon">

	<!-- Main CSS -->
	<link rel="stylesheet" href="CSS/main.css">

	<!-- Contact specific CSS -->
	<link rel="stylesheet" href="CSS/contact.css">

	<!-- Accessbility for other screen resolution/sizes -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://www.google.com/recaptcha/api.js?render=6LcTxkIdAAAAAIV5U21nB4lRPU-9Gbo7rw2_KuK8"></script>
	<script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcTxkIdAAAAAIV5U21nB4lRPU-9Gbo7rw2_KuK8', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>

</head>
<body
data-instant-intensity="viewport-all">

	<!-- Preventing render blocking, moved to body -->
	<!-- Importing normalization so everything can be normalized when we don't specify something -->
	<link rel="stylesheet" href="CSS/normalize.css">

	<!-- Loading of chevron icon -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<!--  -->

	<!-- Puts everything into a wrapper -->
	<div id="wrapper">

		<!-- Creates a division for the header -->
		<div id="mainHead" class="mainHide">
			<header>
				<div id="mainCentered">
					<h1 style="font-size: 4em;">
						<a href="index.html">United States Landmarks</a>
					</h1>
				</div>
			</header>
		</div>

		<!-- Navigation -->
		<div id="navigationContainer">
			<div id="navigationOverlay"></div>
				<nav id="navigationFull">
					<ul id="datalist">
						<li><a class="shown" href="index.html">Home</a></li>
						<li><a id="more" href="#">Landmarks</a></li>
						<li><a id="menu" class="hidden" href="#">Menu</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/cloudGate/cloudGate.html">Cloud Gate</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/disney/disney.html">Disney</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/empireStateBuilding/empireStateBuilding.html">Empire State Building</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/gatewayArch/gatewayArch.html">Gateway Arch</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/goldenGateBridge/goldenGateBridge.html">Golden Gate Bridge</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/grandCanyon/grandCanyon.html">Grand Canyon</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/hotSprings/hotSprings.html">Hot Springs</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/spaceNeedle/spaceNeedle.html">Space Needle</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/whiteHouse/whiteHouse.html">White House</a></li>
							<li id="indentedMenu" class="hidden"><a href="Landmarks/yellowstone/yellowstone.html">Yellowstone</a></li>
						<li><a class="shown" href="contact.php">Contact Us</a></li>
					</ul>
				</nav>

				<!-- Navigation button -->
				<a id="navigationToggle">
					<span></span>
					<span></span>
					<span></span>
				</a>
		</div>

		<!-- Main content -->
		<main class="mainHide">
			<div id="programmers">
				<h2>
					Who are we?
				</h2>

				<div>
					<h3>
						Dalton Murray
					</h3>

					<h4 id="borders">
						Lead Programmer
					</h4>
					<h4 id="programmerInfo">
						Dalton Murray is a college student.
						<br>
						He transferred to Lawrence Technological University in the year 2020-2021 and is currently a junior/senior at the university.
						<br>
						He majors in Cybersecurity and will be getting a Master's degree in it with the intention of getting a PhD.
					</h4>

					<h6>
						<a href="mailto:dalton@dalton-murray.com">Contact me!</a>
					</h6>
				</div>

				<br>
				<div>
					<h3>
						Gavin Poulton
					</h3>

					<h4>
						Programmer - Responsiveness | UI/UX
					</h4>

					<h4 id="programmerInfo">
						Gavin Poulton is a Junior at LTU. He is currently studying IT, and has been at LTU since the Spring of 2020.
						<br>
						His role in the creation of this website included idea contributions during the brainstorming phase and 
						<br>
						assistance in the design/layout of the home and landmark pages, along with proper color theming.
						<br>
						He also provided assistance and input regarding usability based on target user demographics.
					</h4>

					<h6>
						<a href="mailto:gpoulton@ltu.edu">Contact me!</a>
					</h6>
				</div>

				<br>
				<div>
					<h3>
						Yousif Haddad
					</h3>
					<h4>
					Programmer - Content | Troubleshooting

					<h4 id="programmerInfo">
						Yousif Haddad is a student at the sophomore/Junior level in college.
						<br>
						He transferred to Lawrence Technological University in the year 2020-2021 from Oakland Community College.
						<br>
						He is majoring in Information Technology, and will be getting a Master’s degree in Cybersecurity or Database Analysis.
					</h4>

					<h6>
						<a href="mailto:yhaddad@ltu.edu">Contact me!</a>
					</h6>
				</div>

			</div>

			<br>
			<hr>
			<br>

			<div>
				<h2>
					Contact Us!
				</h2>

				<div class="container">
					<form action="PHP/sendEmail.php" method="POST" id="contactForm">
						<div class="row">
							<div class="column1">
								<label for="firstName" class="required">First Name:</label>
							</div>
							<div class="column2">
								<input type="text" id="firstName" name="firstName" placeholder="First Name" required>
							</div>
						</div>

						<div class="row">
							<div class="column1">
								<label for="lastName">Last Name:</label>
							</div>
							<div class="column2">
								<input type="text" id="lastName" name="lastName" placeholder="Last Name">
							</div>
						</div>

						<div class="row">
							<div class="column1">
								<label for="email" class="required">Email Address:</label>
							</div>
							<div class="column2">
								<input type="email" id="email" name="email" placeholder="Email" required>
							</div>
						</div>

						<div class="row">
							<div class="column1">
								<label for="phone">Phone Number:</label>
							</div>
							<div class="column2">
								<input type="tel" id="phone" name="phone" placeholder="Phone Number">
							</div>
						</div>


						<div class="row">
							<div class="column1">
								<label for="message" class="required">Message:</label>
							</div>
							<div class="column2">
								<textarea id="message" name="message" placeholder="Message" style="height:200px" required></textarea>
							</div>
						</div>

						<div class="row">
							<div class="column2">
								<div class="g-recaptcha" data-sitekey="6LcD-0UdAAAAANPjULWbaCYapCBh-1aeB0oGu8oZ"></div>
								<button type="submit" name="submit">Submit</button>
							</div>
						</div>

						<div class="row">
							<div class="column1 column2">
								<?php if (isset($_SESSION['successful']) && !empty($_SESSION['successful'])) { ?>
									<div class="successful"><?php echo $_SESSION['successful']; ?></div>
									<?php
									unset($_SESSION['successful']);
								}
								?>
							</div>
						</div>

						<div class="row">
							<div class="column1 column2">
								<h5>*Disclaimer: Currently this form does not actually send emails.
								<br>
								Please direct all emails to: <a href="mailto:dalton@dalton-murray.com">dalton@dalton-murray.com</a></h5>
							</div>
						</div>

						<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
					</form>

				</div>
			</div>

		</main>

		<!-- Footer -->
		<div id="footer" class="mainHide">
			<footer>
				<a href="contact.php">Contact Us</a>
				<br>
				<br>
				<a href="cookiePolicy.html">Cookie Policy</a>
				<br>
				<br>
				<a href="privacyPolicy.html">Privacy Policy</a>
				<br>
				<br>
				<a target="_blank" href="sitemap.xml">Sitemap</a>
				<br>
				<br>
				Copyright &copy; <span id="currentYear"></span> | Dalton Murray, Gavin Poulton, Yousif Haddad
			</footer>
		</div>

		<!-- Script to pull the current year for copyright information so it automatically updates -->
		<script>
			const date = new Date();
			let year = date.getFullYear();
			document.getElementById("currentYear").innerHTML = year;
		</script>

	</div>

	<!-- Creating link to go to top of page -->
	<a href="javascript:" id="goToTop"><i class="icon-chevron-up"></i></a>

	<!-- Use of jQuery library -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	<!-- Using main.js to handle JS for form and ReCaptcha -->
	<script src="JS/main.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Allows us to selfhost the instant-page module which preloads pages right before clicking on them -->
	<script src="instantpage-5.1.0.js" type="module" defer></script>
</body>
</html>