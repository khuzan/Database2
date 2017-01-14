<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	
</head>
<body>
	<header>
		<img src="../images/business-779542_640.jpg">
		<h3>EMPLOYEES RECORD SYSTEM</h3>
	</header>

		<div class="navi">
		<nav>
			<ul>
			  	<li><a href="../admin/admin.php">| HOME</a></li>
				<li><a href="register.php">| ADD EMPLOYEE</a></li>
				<li><a href="../functions/logout.php">| LOG OUT</a></li>
			</ul>
		</nav>
	</div>
	
		<img src="../images/sign-up-icon-300x300.jpg" class="image">
 	<div class="container">
 		
 		
 	<form class="myform" action="../functions/registerprocess.php" method="POST">
 		
 		<p>REGISTRATION FORM</p>
 		<div class="wrapper">
 		<table>
 	
 		<tr>
 			<td>
 				<label>Firstname:</label>
 			</td>
 			<td>
 				<input type="text" name="firstname" style="color: white;" required />

 			
 			</td>
 			<td align="right">
 				<label>Lastname:</label>
 			</td>
 			<td >
 				<input type="text" name="lastname" required / >
 			</td>
 			<td align="left" colspan="2">
 				<label>Middle Initial:<input class="middlename" type="text" name="middleinitial" style="width:30px;" maxlength="1" required / ></label>
 			</td>
 			
 			
 		
 		</tr>
 		<tr>
 			<td align="left">	
 				<label>Address:</label>
 			</td>
 			<td colspan="6" align="left">
 				<input type="text" name="address" style="width: 404px; " required /><br>
 			</td>
 			
 		</tr>
 		<tr>
 			<td align="left">
 				<label>Birthday:</label>
 			</td>
 			<td>
 				<input type="date" name="bday" required / >
 			</td>
 			<td align="left">
 				<label>Position:</label>	
 			</td>
 			<td>
 				<select name="position"  class="position" required>
 					<option></option>
 					<option>Instructor</option>
 					<option>Dean of College</option>
 				</select>
 			</td>
 			<td align="left">
 				<label>Company:</label>
 			</td>
 			<td>
 				<input class="company" type="text" name="company" required >
 			</td>
 		</tr>
 		<tr>
 			<td align="left">
 				<label>Gender:</label>
 			</td>
 			<td>
 				<select class="gender" name="gender" required>
 					<option></option>
 					<option>Male</option>
 					<option>Female</option>
 				</select>
 			</td>
 				<td align="left">
 				<label>Phone:</label>
 			</td>
 			<td>
 				<input type="number" name="phone" required />
 			</td>
 			<td><label>Department:</label></td>
 			<td><input class="department" type="text" name="department" required /></td>
 		</tr>
 		
 		<tr>
 			<td>
 			<label>Username:</label>
 			</td>
 			<td>
 				<input type="text" name="username" required />
 			</td>
 			<td align="left">
 				<label>Password:</label>
 			</td>
 			<td>
 				<input type="password" name="password" maxlength="20" required />
 			</td>
 			<td align="left">
 				<label>Date Hired:</label>
 			</td>
 			<td>
 				<input class="deet"  type="date" name="datehired" required />
 			</td>
 			
 			
 		
 		</tr>
 		<tr>
 			<td align="left">
 				<label>E-mail:</label>
 			</td>
 			<td colspan="3">
 				<input type="text" name="email" style="width:96%;" required />
 			</td>
 		
 		</tr>
 		</table>
 				<input type="submit" name="Login" >

 		</div>


 			<div class="error">
 			<?php
 			if(isset($_GET['error1'])){
 				echo "Email is not valid!";
 				echo "<br>"; 			
 			}
 			
 			elseif(isset($_GET['error2'])){
 				echo "Invalid Input!&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br>";
 				
 				echo "White spaces <br> are not allowed!";
 				
 			}		
 			?>
 			</div>
 			
 	</form>		
 	
 	</div>

 	<div id="popup5" class="overlay">
  <div class="popup1">
  <a class="close" href="register.php">&times</a>
  <h1 align="center">Username, Password or Email is Already exists! </h1>
  </div>
 </div>

 <div id="popup6" class="overlay">
  <div class="popup1">
  <a class="close" href="register.php">&times</a>
  <h1 align="center">Email Already Exists!</h1>
  </div>
 </div>

  <div id="popup7" class="overlay">
  <div class="popup1">
  <a class="close" href="admin.php">&times</a>
  <h1 align="center">Number Already Exists!</h1>
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
header{
	background-color: #979A9A;
	opacity: 0.5;
	height: 60px;

}
header img{
	border-radius: 100px;
	margin-left: 80px;
}
h3{

	left: 200px;
	top: 40px;
	font-size: 20px;
	position: absolute;

}
.myform table{
	margin: 0 auto;
}
.position{
	width: 100%;
	height: 140%;
}


input , select{
	padding: 5px;
	height: 15px;
	width: 140px;
	background-color: #0B3C5D;
}
.myform table label{
	text-align: left;

}
td{
	padding: 5px;

}
.middlename{
	margin-left: 10px;
}

.gender{
	width: 100%;
	height: 29px;
}


.container{
	width: 820px;
	height: 390px;
	box-shadow: 10px 10px 5px;
	text-align: center;
	background-color: #0B1834;	
	border-radius: 4px;
	margin: 0 auto;
	margin-top: 100px;
	font-size: 18px;
	font-family: arial;


}
.wrapper{
	margin-top: 20px;
	width: 100%;
	height: 320px;
	
	background-color: #04506B;
}

 .image{
	width: 100px;
	height: 100px;
	position: absolute;
	left: 435px;
	
	border-radius: 100px;

}
.myform p{
	margin-top:10px;
	color: #040404;
	text-shadow: 5px 5px 8px #00AB99;
	font-family: Times New Roman;
	font-size: 28px;

}

label{
 text-align: left;
 color:  #030526;
}



input[type="submit"]{
 	width: 115px;
 	height: 50px;
	color: #fff;
	border: none;
	background-color: #2eCC71;
	border-radius: 5px;
	margin-top: 10px;
	text-align: center;
	
}
.navi{
	width: 500px;
	margin: 0 auto;
	margin-left: 800px;
	margin-top: 50px;
}
.navi ul li{
	float: left;
	margin-right: 50px;

	
}
.navi ul{
	list-style: none;

}
.navi ul li a{
	text-decoration: none;
	font-weight: bold;
	color: #212F3C;

}
.navi ul li a:hover{
	color: black ;
	background-color: #85929E;
	padding: 10px 15px;
	border-radius: 5px;
}
/*ERROR*/


.error{
	margin: 0 auto;
	position: absolute;
	left: 60%;
	top: 69%;
	color: red;
	border-radius: 5px;
}

/*popup*/
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(81, 90, 90, 0.7);
  transition: opacity 100ms;
  visibility: hidden;
  opacity: 0;
}
.overlay h1{
  position: absolute;
  left: 16%;
  top: 25%;
  color: #17202A;
}


.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup1 {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 500px;
  height: 110px;
  position: relative;
  background-color: #2E86C1;
  
}

.popup1 h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup1 h1{
	right: 100px;
}

.popup1 .close {
  position: absolute;
  top: 20px;
  right: 30px;

  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup1 .close:hover {
  color: #06D85F;
}
.popup1 .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup1{
    width: 70%;
  }
}

.popup1 td{
  width: 80px;
}
.popup1 td select{
  width: 90px;
  height: 30px;
  background-color: #1A5276;

}


</style>