<!DOCTYPE html>
<html>
<head>
	<title>reunion</title>
	<link rel = "icon" href="img/reunion (2).png" type = "image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6F5V8SK35M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6F5V8SK35M');
</script>
</head>
<body>
	<header>
		<a href="index.php" class='logo'> reunion</a> 
		<ul>
			<li><a href="index.php" >Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Work</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#" class='active'>Login</a></li>
		</ul>
	</header>
	<section>
		<img src='img/stars.png' id="stars">
		<img src='img/moon.png' id="moon">

		<img src='img/mountains_behind.png' id="mountains_behind">	
		<img src='img/mountains_front.png' id="mountains_front">
		<div class='login-box'>
			
  <form class='form' action="code.php" method="post" >
  	<div class="textbox">
  	<h1>Login</h1>
  </div>
  	<div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="username"  placeholder="Username">
  	</div>

  <div class='textbox'>
    <i class="fas fa-lock"></i>
    <input type="password" name="password"  placeholder="Password">
  </div>
  <button type="submit" name="login_btn" class="btn">Login</button>
</form>
		</div>
	</section>
	<div class="sec" id='sec'>
		<form action="code.php" method="post" >
  			<div class="textbox">
  				<h1>Register</h1>
  			</div>
			  <div class="textbox">
    			<i class="fas fa-user-circle"></i>
    			<input type="text" name="username"  placeholder="Enter Username..." pattern="[A-Za-z0-9_]+" required title= 'use of special character and space are prohibited'>
  			</div>
  			<div class="textbox">
    			<i class="fas fa-user"></i>
    			<input type="text" name="name"  placeholder="Enter Name..." required="">
  			</div>
  			<div class="textbox">
    			<i class="fas fa-envelope"></i>
    			<input type="email" name="email"  placeholder="Enter Email..." required>
  			</div>

  			<div class='textbox'>
    			<i class="fas fa-lock"></i>
    			<input type="password" name="password"  placeholder="Enter Password..." required pattern=".{8,}" title= 'Use atleast 8 character/letter or both'>
  			</div>
  			<div class='textbox'>
    			<i class="fas fa-fingerprint"></i>
    			<input type="password" name="confirmpassword"  placeholder="Confirm Password" required>
  			</div>
  			<input type="hidden" name="usertype" value="user">
  			<button type="submit" name="signup" class="btn">Sign-up</button>
  		</form>	
	</div>
	<script type="text/javascript" src="css/anime.js"></script>
	</body>
</html>