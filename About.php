<?php
	include 'Comment2.php';
	include 'Comment.php';
	date_default_timezone_set('Asia/Singapore');
?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="cssmenubar.css">
		<link rel="stylesheet" href="About.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>About | DubDestiNation</title>
		<link rel="icon" type="image/x-icon" href="logo.png">
		
	</head>
	<body>
		<!--Navigation Bar -->
		<div class="menu_bar">
			<div class="logo">
				<img src="logo.png" width="60px" height="60px">
			</div>
			
			<h1 class="name"><span>Dub</span>Desti<span>Nation</span></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li>
					<a href="#">HISTORY</a>
				
					<div class="dropdown_menu">
						<ul>
							<li><a href="Team History.html">TEAM HISTORY</a></li>
							<li><a href="Logo History.html">LOGO HISTORY</a></li>
						</ul>
					</div>
				</li>
				
				<li>
					<a href="Championships.html">CHAMPIONSHIPS</a>
					
					<div class="dropdown_menu2">
						<ul>
							<li><a href="1947 Championship.html">1947 CHAMPIONSHIP</a></li>
							<li><a href="1956 Championship.html">1956 CHAMPIONSHIP</a></li>
							<li><a href="1975 Championship.html">1975 CHAMPIONSHIP</a></li>
							<li><a href="2015 Championship.html">2015 CHAMPIONSHIP</a></li>
							<li><a href="2017 Championship.html">2017 CHAMPIONSHIP</a></li>
							<li><a href="2018 Championship.html">2018 CHAMPIONSHIP</a></li>
							<li><a href="2022 Championship.html">2022 CHAMPIONSHIP</a></li>
						</ul>
					</div>	
				</li>
				<li><a href="All-time Greats.html">ALL-TIME GREATS</a></li>
				<li><a href="#">ROSTER</a>
					<div class="dropdown_menu4">
						<ul>
							<li><a href="Coaching Staff.html">COACHING STAFF</a></li>
							<li><a href="Starting Five.html">STARTING FIVE</a></li>
							<li><a href="Bench.html">BENCH</a></li>
						</ul>
					</div>
				</li>
				
				<li>
					<a href="#">SLOGAN</a>
					
					<div class="dropdown_menu3">
						<ul>
							<li><a href="Strength In Numbers.html">STRENGTH IN NUMBERS</a></li>
							<li><a href="Gold Blooded.html">GOLD BLOODED</a></li>
						</ul>
					</div>
				</li>
				
				<li><a href="http://localhost/DubDestiNation/About.php">ABOUT</a></li>
			</ul>
		</div>

		<!-- About the Web Bros -->
		<p class="AboutUsLabel"> 
			<b>About Us</b> 
		</p>

		<!-- Web Bros Logo -->
		<center>
            <img src="wblogo.png" width="350px" height="300px">
        </center>

		<!-- Web Bros Name -->
		<p class="TeamName"> 
			<b>Web Bros</b> 
		</p>

		<!-- Web Bros Description -->
		<p class="AboutUsDescription">
            Welcome to 'DubDestiNation,' your online destination for information related to the iconic NBA franchise, the Golden State Warriors. This website was developed by 
			the Web Bros, a duo of Voughn and Edrik formed in the course CCS 1-C, Introduction to Computing. This website is dedicated to providing background information to 
			Warriors fans, whether you're a die-hard enthusiast who never misses a game or a casual fan. We're proud to be your go-to source about the Golden State Warriors. 
			No matter your level of fandom, we invite you to explore the fascinating world of the Golden State Warriors with us, and join our community of passionate fans who 
			share your love for this remarkable team. 
        </p>

		<!-- Horizontal Line -->
		<div class="Line"></div>

		<!-- About the Developers Section -->
		<p class="AboutTheDevelopersDescription"> 
			<b>About the Developers</b> 
		</p>
		
		<center>
			<img class="Voughn" src="Voughn.png" width="32%" height="45%">
			<img class="Edrik" src="Edrik.png" width="22%" height="34%">
		</center>

		<center>
			<a class="VoughnName" href="#"> 
				Voughn John Zoe N. Villalon 
			</a>
			<a class="EdrikName" href="#"> 
				Edrik Sean A. Kho 
			</a>
		</center>
		
		<center>
			<a class="VoughnSchool" href="#"> 
				<b>Silliman University</b> 
			</a>
			<a class="EdrikSchool" href="#"> 
				<b>Silliman University</b> 
			</a>
		</center>

		<center>
			<a class="VoughnCourse" href="#">
				BSIT - I 
			</a>
			<a class="EdrikCourse" href="#"> 
				BSIS - I 
			</a>
		</center>
		<br>

		<div class="Line"></div>

		<!-- Contact Us Section -->
		<p class="ContactUsLabel"> 
			<b>Contact Us</b> 
		</p>
		<br>
		<div class="email">
			<a class="emailadd" href="mailto:khoedrik@gmail.com"> 
				khoedrik@gmail.com 
			</a>
		</div>
		<br>
		<div class="email2">
			<a class="emailadd2" href="mailto:voughnv@gmail.com"> 
				voughnv@gmail.com 
			</a>
		</div>
		<br>
		<br>
		<p class="BasedIn"> 
			Based in: 
		</a>
		<p class="DgteCity"> 
			Dumaguete City, Negros Oriental, Philippines 
		</a>

		<div class="Line"></div>

		<!-- Query Zone -->
		<p class="QueryZoneLabel"> 
			<b>Query Zone</b> 
		</p>
		<p class="QZQ"> 
			What would you like to know more about the Golden State Warriors? 
		</p>
	
		<!-- PHP code for the Query Zone to Function -->
        <?php
		    echo "<form method='POST' action'".setComments($conn)."'>
	            <input type='hidden' name='uid' value='Anonymous'>
			    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			    <textarea name='message'></textarea>
                <button type='submit' name='commentSubmit'>Submit</button>
		    </form>";

			getComments($conn);
		?>	

	<!-- Footer -->
	<div class="Footer"> 
		<i>
			DEVELOPED BY: WEB BROS <br> 
			<!-- Acknowledgements Button -->
			<div class="FooterBtn">
				<a class="AcknowledgementsBtn" href="Acknowledgements.html">
					ACKNOWLEDGEMENTS
				</a> 
			</div>
		</i> 
	</div> 
   </body> 
</html> 