<!DOCTYPE html>
<?php


session_start();
include "../functions/function.php";
$db = connect();
$id = $_SESSION['login'];

 $g = getdata($id);
?>

<html>
<head>
	<title>User Page</title>
</head>
<body>
	<header>
		<div class="text">
		<img src="../images/business-779542_640.jpg">
		<h3>EMPLOYEES RECORD SYSTEM</h3>
		</div>
	</header>
	


<div>

<div class="navi">

		<img src="../images/fb1.png"><br><br><br><br><br><br>
		<h2><?php echo  $g->fname.' '; echo $g->minitial.' '; echo $g->lname.' '; ?></h2><br><br><br><br>
		<nav class="logout">
			<ul>
				<li><a href="../functions/logout.php">| LOG OUT</a></li>
			</ul>
		</nav>
		
	</div>
	<img src="../images/logout.png" class="icon">
	

 	<div class="container">
 	<div class="division">
 			<p class="first">Personal Details</p>
 			<hr class="style1">
 			<table class="wrapper"  width="550px">
 				<tr>
 					<td>Birthday:</td>
 					<td><?php echo  $g->bday; ?></td>

 				</tr>
 				<tr>
 					<td>Gender:</td>
 					<td><?php echo  $g->gender; ?></td>
 				</tr>
 				<tr>
 					<td>Username:</td>
 					<td><?php echo  $g->username; ?></td>
 				</tr>
 				<tr>
 					<td>Password:</td>
 					<td><?php echo  $g->password; ?></td>
 				</tr>

 			</table><br>
 			<p class="first">Contact Information</p>
 			<hr class="style1">
 			<table class="wrapper" width="550px">
 				<tr>
 					<td>E-mail:</td>
 					<td><?php echo  $g->e_mail; ?></td>
 				</tr>
 				<tr>
 					<td>Phone:</td>
 					<td><?php echo  $g->phone; ?></td>
 				</tr>
 			</table><br>
 			<p class="first">General Information</p>
 			<hr class="style1">
 			<table class="wrapper"  width="550px">
 				<tr>
 					<td>Company:</td>
 					<td><?php echo  $g->company; ?></td>
 				</tr>
 				<tr>
 					<td>Department:</td>
 					<td><?php echo  $g->department; ?></td>
 				</tr>
 				<tr>
 					<td>Position:</td>
 					<td><?php echo  $g->position; ?></td>
 				</tr>
 				<tr>
 					<td>Date Hired:</td>
 					<td><?php echo  $g->date_hired; ?></td>
 				</tr>
 				<tr>
 					<td>Address:</td>
 					<td><?php echo  $g->address; ?></td>
 				</tr>



 			</table>
 		
 			</div>
</div>

 	</div>
</body>
</html>
<style type="text/css">
	body{
	margin: 0 auto;
	background-image: url(../images/home-business.jpg);
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
td{
	width: 50%;
	padding-bottom: 10px;

}
p{
	font-size: 22px;

}
.p{
	font-size: 22px;
	margin: 10px auto;
}
.first{
	margin: 5px auto;
}
.text{
	background-color: #979A9A;
	opacity: 0.5;
	height: 60px;
}
.container{
	width: 720px;
	height: 540px;
	background-color: rgba(15, 113, 123,0.3);
	position: absolute;
	left: 45%;
	top: 13%;
	border-radius: 3px;
	
}
.division{
	margin: 15px 15px auto;
}

.style{
	width: 100%;
}
.upload{
	margin: 0 auto;
	position: absolute;
	top: 25%;
	left: 10px;
}
.icon{
	border-radius: 50%;
	position: relative;
	left: 130px;
}

h2{

	font-size: 28px;
	color: black;
	text-shadow: #033F45;
	position: absolute;
	left: 160px;

}
.logout{
	position: absolute;
	left: 140px;
}
.navi img{
	width: 18%;
	height: 220px;
	position: relative;
	top: 110px;
	left: 130px;

}
.navi ul{
	list-style: none;

}
.navi ul li a{
	text-decoration: none;
	font-weight: bold;
	color: #09A095;

}
.navi ul li a:hover{
	color: black ;
	background-color: #85929E;
	padding: 10px 15px;
	border-radius: 5px;
}


</style>