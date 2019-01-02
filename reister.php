
<html>
	<head>
		<title>Generic - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Phronesis'19</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="elements.html">Elements</a></li>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Registration Form</h2>
							<p>Please Enter your Details</p>
						</header>
						<section class="wrapper style5">

							<div class="inner">
								<div>
									<?php
									include 'validate.php';
									 echo $nameErr; ?>
								</div>
                <div class="col-sm-8">
                          <form class="" action="validate.php" method="post">
                            <fieldset>
                              <div class="form-group">
                                <label for="Name" style="font-size:20px;">First Name<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="FName"  placeholder="Enter Your First Name" name="fname">
                              </div>
															<div class="form-group">
                                <label for="Name" style="font-size:20px;">Last Name<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="LName"  placeholder="Enter Your Last Name" name="lname">
                              </div>
															<div class="form-group" style="font-size:20px;">
																<label for="Name">Email Id<i style="font-size:15px;color:red;">*</i></label>
																<input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter your Email Id" name="Email">
															</div>

                              <div class="form-group">
                                <label for="Contact" style="font-size:20px;">Contact No<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="contact"  placeholder="Enter your contact number" name="Contact">
                              </div>
                              <div class="form-group" style="font-size:20px;">
                                <label for="College">Institute Name<i style="font-size:15px;color:red;">*</i></label>
                                <input type="text" class="form-control" id="College" placeholder="Enter name of your institute" name="Institute">
                              </div>
															<div class="form-group" style="font-size:20px;">
                                <label for="Name">Gender<i style="font-size:15px;color:red;">*</i></label>

																<select name="Gender">
	 																<option value="Male">Male</option>
	 															<option value="Female">Female</option>
	 														<option value="Others">Others</option>

 															</select>
                              </div>
                              <!-- <p><h2><b>Select Your Event:</b></h2></p><p class="form-text" style="font-size:25px">(Click on the event name to know more)</p>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input big-checkbox" id="Check1" value="Ardor-Bilingual Poetry Slam" name="Check[]">
                                <label class="form-check-label" for="Check1" style ="font-size:30px;"><a class="fon" target="_blank" href="https://www.facebook.com/events/422813618173476/?ti=as">	&nbsp;Ardor-Bilingual Poetry Slam</a></label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input big-checkbox" id="Check2" value="JAM-Bilingual Impromptu Speech" name="Check[]">
                                <label class="form-check-label" for="Check2" style ="font-size:30px;"><a class="fon" target="_blank"  href="https://www.facebook.com/events/2037884303129512/?ti=as">&nbsp;JAM-Bilingual Impromptu Speech</a></label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input big-checkbox" id="Check3" value="Two Faced-The Turncoat Debate" name="Check[]">
                                <label class="form-check-label" for="Check3" style ="font-size:30px;"><a class="fon" target="_blank"  href="https://www.facebook.com/events/137811093711965/?ti=as">&nbsp;Two Faced-The Turncoat Debate</a></label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input big-checkbox" id="Check4" value="Vaak Yudh-Conventional Debate Hindi" name="Check[]">
                                <label class="form-check-label" for="Check4" style ="font-size:30px;"><a class="fon" target="_blank"  href="https://www.facebook.com/events/358173451351049/?ti=as">&nbsp;Vaak Yudh-Conventional Debate Hindi</a></label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input big-checkbox" id="Check5" value="Vincero-Conventional Debate English" name="Check[]">
                                <label class="form-check-label" for="Check5" style ="font-size:30px;"><a class="fon" target="_blank" href="https://www.facebook.com/events/418173341958754/?ti=as">&nbsp;Vincero-Conventional Debate English</a></label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input big-checkbox" id="Check5" value="Wordsmith-Bilingual Creative Writing" name="Check[]">
                                <label class="form-check-label" for="Check5" style ="font-size:30px;"><a class="fon" target="_blank"  href="https://www.facebook.com/events/1700045116705099/?ti=as">&nbsp;Wordsmith-Bilingual Creative Writing</a></label>
                              </div> -->
                              <br>
                              <br>
                              <center><ul class="actions">
      													<li><input type="submit" value="Submit" class="primary" /></li>
      													<li><input type="reset" value="Reset" /></li>
      												</ul></center>
                            </fieldset>
                          </form>
                        </div>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">

							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>

							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Literary Umbrella</li>
							 <li>Design: <a href="http://gupta-Saransh.github.io">Saransh Gupta</a></li> -->
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
