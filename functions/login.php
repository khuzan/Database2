
<?php
session_start();
include "function.php";
$db = connect();

if(isset($_POST['submit'])){

		$user = $_POST['username'];
		$password = $_POST['password'];
		
		if(finduser($user,$password)){
			if($user==admin){
				$stmt2 = $db->prepare("select * from login where user = :user ");
				$stmt2->bindValue(':user',$user);
				$stmt2->execute();
				$account2 = $stmt2->fetch(PDO::FETCH_OBJ);

				$_SESSION['login']=$account2->id;

				header("Location:../admin/admin.php");
			}
		else{
				$stmt2 = $db->prepare("select * from registration where username = :user");
				$stmt2->bindValue(':user',$user);
				$stmt2->execute();
				$account2 = $stmt2->fetch(PDO::FETCH_OBJ);

				$_SESSION['login']=$account2->id;

				header("Location:../admin/user.php");
		}
	
	}
	else{
		header("Location:../index.php?error=1");
	}}

?>

