<!DOCTYPE html>
<?php

session_start();
include "../functions/function.php";
$db = connect();

 if(isset($_GET['action']) && $_GET['action']=='delete'){
 	$db = connect();
 	$sth = $db->prepare("delete FROM registration Where id = :id");
 	$sth->bindValue('id',$_GET['id']);
 	$sth->execute();
 }

?>
<html>
	<head>
	<title>mehaw</title>
	
	</head>
<body>
	<header>
		<div class="text">
		<img src="../images/business-779542_640.jpg">
		
		<h3>EMPLOYEES RECORD SYSTEM</h3>
		
		</div>
	</header>
	<div class="navi">
		<nav>
			<ul>
			  	<li><a href="admin.php">| HOME</a></li>
				<li><a href="../motivatemejadeplease/register.php">| ADD EMPLOYEE</a></li>
				<li><a href="../functions/logout.php">| LOG OUT</a></li>
			</ul>
		</nav>
	</div>
	
 	<div class="container">
 	
	<div class="wrapper">
	
 		 <table class="table2" border="2">

	<tr class="font1">
		<th class="nim">Name</th>
		<th class="nim">Address</th>
		<th>Birthday</th>
		<th>Gender</th>
		<th>Phone</th>
		<th>Position</th>
		<th class="nim">Company</th>	
		<th>Department</th>
		<th>Username</th>
		<th>Password</th>
		<th>DateHired</th>
		<th>E-mail</th>
		<th>Option</th>
	
	</tr>
	<?php foreach (getemp() as $g):?>
	<tr class="font">
		<td><?php echo  $g->fname.' '; echo $g->minitial.' '; echo $g->lname.' '; ?></td>
		<td><?php echo  $g->address; ?></td>
		<td><?php echo  $g->bday; ?></td>
		<td><?php echo  $g->gender; ?></td>
		<td><?php echo  $g->phone; ?></td>
		<td><?php echo  $g->position; ?></td>
		<td><?php echo  $g->company; ?></td>			
		<td><?php echo  $g->department; ?></td>
		<td><?php echo  $g->username; ?></td>
		<td><?php echo  $g->password; ?></td>
		<td><?php echo  $g->date_hired; ?></td>
		<td><?php echo  $g->e_mail; ?></td>
		
		<td><a href="../functions/updateerror.php?id=<?php echo $g->id;?>">Edit</a> | 
		<a href="admin.php?id=<?php echo $g->id;?>
		&action=delete" onclick="return confirm('Are you sure?')">Delete</a>
		</td> 
	</tr>
	<?php endforeach;?>
	</table>
	</div>
	</div>

<div id="popup1" class="overlay">

	<?php
	$name = $_SESSION['try'];
	$db = connect();
	$stmt = $db->prepare("SELECT * from registration where id = :id");
	$stmt->bindValue('id',$name);
	$stmt->execute();
	$account = $stmt->fetch(PDO::FETCH_OBJ);	
	?>
	<div class="popup">
					<a class="close" href="admin.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&times</a>
					
						<form action="../functions/update.php" method="POST">
						<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSet New Employee Information</h2>
						<input required="Required Field" type="hidden" name="id"
					 	value="<?php echo $account->id; ?>">
	 <table class="poptable">
	 	<tr>
 			<td>
 				<label>Firstname:</label>
 			</td>
 			<td>
 				 
 				<input type="text" name="firstname" value="<?php echo $account->fname; ?>" required />
 			
 			</td>
 			<td align="right">
 				<label>Lastname:</label>
 			</td>
 			<td >
 				<input type="text" name="lastname" value="<?php echo $account->lname; ?>"  required / >
 			</td>
 			<td align="left" colspan="2">
 				<label>Middle Initial:<input class="middlename" type="text" value="<?php echo $account->minitial; ?>"  name="middleinitial" style="width:30px" maxlength="1" required / ></label>
 			</td>
 			
 			
 		
 		</tr>
 		<tr>
 			<td align="left">	
 				<label>Address:</label>
 			</td>
 			<td colspan="6" align="left">
 				<input type="text" name="address" value="<?php echo $account->address; ?>"  style="width: 430px;" required /><br>
 			</td>
 			
 		</tr>
 		<tr>
 			<td align="left">
 				<label>Birthday:</label>
 			</td>
 			<td>
 				<input type="date" name="bday" value="<?php echo $account->bday; ?>" style="width: 97%;"  required / >
 			</td>
 			<td align="left">
 				<label>Position:</label>	
 			</td>
 			<td>
 				<select name="position"  style="width:99%;" required>
 					<option><?php echo $account->position; ?></option>
 					<option>Instructor</option>
 					<option>Dean of College</option>
 				</select>
 			</td>
 			<td align="left">
 				<label>Company:</label>
 			</td>
 			<td>
 				<input class="company" type="text" name="company"  value="<?php echo $account->company; ?>" required >
 			</td>
 		</tr>
 		<tr>
 			<td align="left">
 				<label>Gender:</label>
 			</td>
 			<td>
 				<select class="gender" style="width:98%;" name="gender"  required>
 					<option><?php echo $account->gender; ?></option>
 					<option>Male</option>
 					<option>Female</option>
 				</select>
 			</td>
 				<td align="left">
 				<label>Phone:</label>
 			</td>
 			<td>
 				<input type="number" name="phone"  value="<?php echo $account->phone; ?>" required>
 			</td>
 			<td><label>Department:</label></td>
 			<td><input class="department" type="text" name="department" value="<?php echo $account->department; ?>"  required /></td>
 		</tr>
 		
 		<tr>
 			<td>
 			<label>Username:</label>
 			</td>
 			<td>
 				<input type="text" name="username" value="<?php echo $account->username; ?>" required />
 			</td>
 			<td align="left">		
 				<label>Password:</label>
 			</td>
 			<td>
 				<input type="password" name="password" maxlength="20"  value="<?php echo $account->password; ?>" required />
 			</td>
 			<td align="left">
 				<label>Date Hired:</label>
 			</td>
 			<td>
 				<input class="deet"  type="date" name="datehired" value="<?php echo $account->date_hired; ?>" style="width: 97%;" required />
 			</td>
 			
 			
 		
 		</tr>
 		<tr>
 			<td align="left">
 				<label>E-mail:</label>
 			</td>
 			<td colspan="3">
 				<input type="text" name="email" style="width:99%;" value="<?php echo $account->e_mail; ?>" required />
 			</td>
 		
 		</tr>
         
        <tr>
        	<td><input type="submit" name="save" value="Save"></td>
		</tr>

	
	</table>

 		
 	</form>
 	
 	</div>
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
 	
</body>


<div id="popup4" class="overlay">
  <div class="popup1">
  <a class="close" href="admin.php">&times</a>
  <h1 align="center">Successfully Updated</h1>
  </div>
 </div> 




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
	text-align: top;
	position: absolute;
	font-size: 20px;
	color: black;
}
.text{
	background-color: #979A9A;
	opacity: 0.5;
	height: 60px;
}
.container{
	width: 1305px;
	height: 430px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(23, 32, 42,0.7);	
	border-radius: 4px;
	margin: 0 auto;
	margin-top: 90px;
	box-shadow: 10px 10px 5px;
	overflow: auto;
}
th{
	background-color: #1B2631;
}
td{
	background-color: #10354B;
}
.wrapper{
	width: 138%;
	padding: 10px;
	background-color: #000000;
}

.bord{
	border: solid;
}
.table2{
	margin: 0 auto;
	position: relative;
	color: black;

}
.font{
	color: #C4DFF7;
	padding: 0px 25px 0px 25px;

}

.font1 .nim{
	padding: 0px 60px 0px 60px;
}

.font1 th{
	color: #379000;
	padding: 15px 25px 15px 25px;
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

.popup {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 58%;
  height: 250px;
  position: relative;
  background-color: #2E86C1;
  transition: all 1s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}

.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

.popup td{
  width: 80px;
}
.popup td select{
  width: 90px;
  height: 30px;
  background-color: #1A5276;

}
input[type="submit"]{
  position: absolute;
  margin-top: 10px;
  left: 47%;
  padding: 5px 15px;
  background-color: #17202A;
  color: #fff;
}



/*popup*/

.popup1 {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 400px;
  height: 100px;
  position: relative;
  background-color: #2E86C1;
  transition: all 1s ease-in-out;
}

.popup1 h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}

.popup1 .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 100ms;
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





/*popup12 */
.popup12 {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 580px;
  height: 110px;
  position: relative;
  background-color: #2E86C1;
  transition: all 1s ease-in-out;
}

.popup12 h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup12 h1{
	left: 10px;
}

.popup12 .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup12 .close:hover {
  color: #06D85F;
}
.popup12 .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup12{
    width: 70%;
  }
}

.popup12 td{
  width: 80px;
}
.popup12 td select{
  width: 90px;
  height: 30px;
  background-color: #1A5276;

}


/*error1*/
/*ERROR*/


.error{
	margin: 0 auto;
	position: absolute;
	top: 80px;
	left: 50%;
	color: red;
	border-radius: 5px;
}


</style>