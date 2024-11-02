<!DOCTYPE html>
<html>
<head>
	<title>FORM ADMIN</title>
	<link rel="stylesheet" type="text/css" href="login_form.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<img class="wave" src="wave.png" data-aos="zoom-out" data-aos-duration="1000">
	<div class="container" data-aos="zoom-out" data-aos-duration="1000">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content" data-aos="zoom-out" data-aos-duration="1000">
			<form action="proses_login.php" method="POST">
				<img src="baita.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
           		   <div class="i">
                    <i class="fa-regular fa-user"></i>
           		   </div>
                   
           		   <div class="div" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
           		   		<h5>Username</h5>
           		   		<input type="text" id="username" name="username" class="input" required>
           		   </div>
           		</div>
           		<div class="input-div pass" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
           		   <div class="i" > 
                    <i class="fa-solid fa-lock"></i>
           		   </div>
           		   <div class="div" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
           		    	<h5>Password</h5>
           		    	<input type="password" id="password" name="password" class="input" required>
            	   </div>
            	</div>
            	<a href="#" data-aos="fade-up" data-aos-duration="2000">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login" data-aos="fade-up" data-aos-duration="2000">
            </form>
            
        </div>
    </div>
    <script type="text/javascript" src="login_form.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  AOS.init();
</script>
</body>
</html>
