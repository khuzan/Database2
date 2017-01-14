<?php
session_start();
include "../functions/function.php";
$db = connect();

	if(isset($_POST['save'])){
		// $_SESSION['updateerror']='0';

		 $id = $_POST['id'];
		 $firstname = $_POST['firstname'];
		 $minitial = $_POST['middleinitial'];
 		 $lastname = $_POST['lastname'];
		 $address = $_POST['address'];
		 $bday = $_POST['bday'];
		 $gender = $_POST['gender'];
		 $phone = $_POST['phone'];
		 $position = $_POST['position'];
		 $company = $_POST['company'];
		 $department = $_POST['department'];
		 $date = $_POST['datehired'];
		 $email = $_POST['email'];

		 $username = $_POST['username'];
		 $password = $_POST['password'];
	

		 
		
		
			if(preg_match("/\d/",$firstname) || preg_match("/W/", $firstname))
		   {
 			header("Location:../admin/admin.php?error2");
 			
			}
			elseif(preg_match("/\s/", $lastname) || preg_match("/\d/",$lastname) || preg_match("/W/", $lastname)) {
				header("Location:../admin/admin.php?error2");
			}
			elseif(preg_match("/\s/", $middleinitial) || preg_match("/\d/",$middleinitial) || preg_match("/W/", $middleinitial)) {
				header("Location:../admin/admin.php?error2");
			}
			elseif(preg_match("/\d/",$address) || preg_match("/W/", $address)) {
				header("Location:../admin/admin.php?error2");
			}
			elseif(preg_match("/\d/",$company) || preg_match("/W/", $company)) {

				header("Location:../admin/admin.php?error2");
			}
			elseif(preg_match("/\s/", $phone) || preg_match("/[a-zA-Z]/",$phone) || preg_match("/W/", $phone))
			 {
			header("Location:../admin/admin.php?error2");
			}
			elseif(preg_match("/\s/", $department) || preg_match("/\d/",$department) || preg_match("/W/", $department)) {
				header("Location:../admin/admin.php?error2");
			}
			elseif (preg_match("/\s/",$username)) {
				header("Location:../admin/admin.php?error2");
			}
			elseif (preg_match("/\s/",$password)) {
				header("Location:../admin/admin.php?error2");
			
			}
			elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location:../admin/admin.php?error1");
   					 
			}
			   
		
		else
		{

			$stmt = $db->prepare("UPDATE registration SET
								fname = :firstname,
								lname = :lastname,
								minitial = :middleinitial,
								address = :address,
								bday = :bday,
								position = :position,
								company = :company,
								gender = :gender,
								phone = :phone,
								department = :department,
								date_hired = :datehired,
								e_mail = :email,
								username = :username,
								password = :password
		                 		WHERE id = :id");

			$stmt->bindValue('firstname',$firstname);
			$stmt->bindValue('lastname',$lastname);
			$stmt->bindValue('middleinitial',$minitial);
			$stmt->bindValue('address',$address);
			$stmt->bindValue('bday',$bday); 
			$stmt->bindValue('position',$position);
			$stmt->bindValue('company',$company);
			$stmt->bindValue('gender',$gender);
			$stmt->bindValue('phone',$phone);
			$stmt->bindValue('department',$department);
			$stmt->bindValue('datehired',$date);
			$stmt->bindValue('email',$email);
			$stmt->bindValue('username',$username);
			$stmt->bindValue('password',$password);
			$stmt->bindValue('id',$id);

			if($stmt->execute($execute_query)){
				header('Location:../admin/admin.php#popup4');
			}
		
			

			
			
	
		}
	}
?>