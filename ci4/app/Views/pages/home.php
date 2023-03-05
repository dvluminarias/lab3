<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="media/icon.jpg">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script defer src="js/app.js"></script>
	
	<title>Meow Meow Meow</title>
</head>

<body>
	<nav>	
		<div class ="dancingCatto">
			<a href=""><img src="media/dancingCatto.gif"></a>
		</div>
		<div class ="paripapa">
			<a href=""><img src="media/paripapa.jpg"></a>
		</div>
		
		<div class="openMenu"><i class="ri-menu-fill"></i></div>
		<ul class="mainMenu">
			<li><a href="">Home</a></li>
			<li><a href="#About">About Me</a></li> 
			<li><a href="#Achievements">Achievements</a></li>
			<li><a href="#Contact">Contact</a></li>
			<li><a href="/lab3/ci4/public/news/create">Guest Form</a></li>
			<div class="closeMenu"><i class="ri-close-circle-fill"></i></div>
			<span class="icons">
                <i class="ri-facebook-circle-fill"></i>
				<i class="ri-twitter-fill"></i>
				<i class="ri-youtube-fill"></i>
				<i class="ri-github-fill"></i>
            </span>
		</ul>
	</nav>

<!---========Main======--->
	<div class="text-box hidden">
		<div>
			<h1>I am <span class="auto-type"></span></h1>
		</div>

		<p>
		<i>“We can never judge the lives of others, because each person knows only their own pain and renunciation.<br>
		It’s one thing to feel that you are on the right path, but it’s another 
		to think that yours is the only path.”</i><br>		
		<b> - Paolo Coelho</b>
		</p>
		
		<a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">WIP Button 1</a>
		<a href="/lab3/ci4/public/references">References</a>
	</div>
	<img src="media/catto.jpg" class="catto-img">

	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	
	<script>
		var typed = new Typed(".auto-type", {
			strings: [ "Inevitable", "David Luminarias", "Iron Man"],
			typeSpeed: 50,
			backSpeed: 100,
			loop: true})
	</script>
	
<!---========About======--->
	<div class="spaceDivider" id="About"></div>
	<section class = "hidden">
		<div>
			<p class="sectionTitle">
				About Me
			</p><hr>
	
			<div class="aboutImage">
				<img src="media/dp.jpg" alt="dp" />	
			</div>
			<p class="aboutText">
			Hello, my name is David Wilson V. Luminarias, but you can call me “Lumi”. I am 20 years old and is currently taking the 
			Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology course at Asia Pacific 
			College. Although BSIT-MI is not my first option, it's still technically one of the courses I am interested in. <br><br>

			Given the chance, I would have chosen Bachelor of Science in Forestry though unfortunately, I didn't pass the entrance examination.
			My hobbies and Interests include watching movies/documentaries/anime, reading manga/manhua/manhwa, playing games, and listening to music.
			While I don’t think there’s an interesting aspect in my life right now, I want to be successful enough that I can help others and 
			enjoy the things that I want without worry through learning significant things that will be able to apply in real life from this subject.
			</p>
		</div>
	</section>

<!---========Achievements======--->
	<div class="spaceDivider" id="Achievements"></div>
	<section class = "hidden">
		<div>
			<p class="sectionTitle">
				Achievements
			</p><hr>
			<div class="container">
				<div class="card">
					<div class="imgBox  hidden">
						<img class="card-img"src="media/DPS_Threat.jpg" alt="DPS Threat" />
						<div class="content">
							<p>
								Deal more than 1800 DPM
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="imgBox  hidden">
						<img class="card-img"src="media/Champion.jpg" alt="Champion" />
						<div class="content">
							<p>
								Earn points from challenges in the Champion group
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="imgBox  hidden">
						<img class="card-img"src="media/CTT.jpg" alt="Can't Touch This" />
						<div class="content">
							<p>
								Win ARAM games without being killed by an enemy champion (you can still be executed)
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="imgBox hidden">
						<img class="card-img"src="media/SnowDay.jpg" alt="Snow Day" />
						<div class="content">
							<p>
								Hit snowballs on champions in ARAM
							</p>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="imgBox  hidden">
						<img class="card-img"src="media/BadMedicine.jpg" alt="Bad Medicine" />
						<div class="content">
							<p>
								Kill opponents who recently received a health pack in ARAM
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!---========Contact======--->
	<section id="Contact">
		<div>
			<p class="sectionTitle">
				Contact
			</p><hr>
		</div>
	</section>
	
<br>
<br>

<div>
</div>

<!---========Footer ======--->
<div class="footer">
	WEBPROG &copy; 2021 David Wilson Luminarias | All Rights Reserved
</div>

</body>
</html>