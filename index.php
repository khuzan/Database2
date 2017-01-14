<!DOCTYPE html>
<html>
<head>
	<title>Design Login</title>
</head>
<body>
	<header>
		<div class="text">
		<img src="images/business-779542_640.jpg">
		<h3>EMPLOYEES RECORD SYSTEM</h3>
		</div>
	</header>
 	<div class="container">
 		
 		<img src="images/male-close-up-silhouette-with-tie_318-56554.png">

 			<form method="Post" action="functions/login.php">
 				<input type="text" name="username"
 				placeholder="Enter Username" maxlength="20" required />
 		
 				<input type="password" name="password"
 				placeholder="Enter Password" maxlength="35" required / >
 			<br>
 				<input type="submit" name="submit" value="Log In">
 			
 			</form>

 			<div class="error">
			<?php
			if(isset($_GET['error'])==1){
			echo '<p>Invalid Username or Password!<p/>';
			}
			?>
			</div>

 	</div>
</body>
</html>
<style type="text/css">
	body{
	margin: 0 auto;
	background-image: url(images/home-business.jpg);
	background-repeat: no-repeat;
	background-size: 100% 750px;
	
}
header img{
	border-radius: 100px;
	margin-left: 80px;
}
h3{
	left: 200px;
	top: 40px;
	position: absolute;
	font-size: 20px;
}
.text{
	background-color: #979A9A;
	opacity: 0.5;
	height: 60px;
}



.container{
	width: 400px;
	height: 340px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(52, 73, 94,0.7);	
	border-radius: 4px;
	margin: 0 auto;
	margin-top: 100px;
	box-shadow: 10px 10px 5px

}
.container img{
	width: 120px;
	height: 120px;
	margin-top: -60px;
	margin-bottom: 30px;
	border-radius: 100px;

}



input[type="text"], input[type="password"]
{

	height: 45px;
	width: 250px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 20px;
}
input[type="submit"]{
	padding: 15px 30px;
	color: #fff;
	border: none;
	background-color: #2eCC71;
	border-radius: 5px;

}




</style>