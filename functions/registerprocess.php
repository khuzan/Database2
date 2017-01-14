<?php
session_start();
include "../functions/function.php";
$db = connect();
if(isset($_POST['Login'])){

		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middleinitial = $_POST['middleinitial'];
		$address = $_POST['address'];
		$birthday = $_POST['bday'];
		$position = $_POST['position'];
		$company = $_POST['company'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$department = $_POST['department'];
		$datehired = $_POST['datehired'];
		$email = $_POST['email'];
		
		
		$username = $_POST['username'];
		$password = $_POST['password'];

	
		
			if(preg_match("/\d/",$firstname) || preg_match("/W/", $firstname))
		   {
 			header("Location:../motivatemejadeplease/register.php?error2");
 			
			}
			elseif(preg_match("/\s/", $lastname) || preg_match("/\d/",$lastname) || preg_match("/W/", $lastname)) {
				header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif(preg_match("/\s/", $middleinitial) || preg_match("/\d/",$middleinitial) || preg_match("/W/", $middleinitial)) {
				header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif(preg_match("/\d/",$address) || preg_match("/W/", $address)) {
				header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif(preg_match("/\d/",$company) || preg_match("/W/", $company)) {

				header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif(preg_match("/\s/", $phone) || preg_match("/[a-zA-Z]/",$phone) || preg_match("/W/", $phone))
			 {
			header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif(preg_match("/\s/", $department) || preg_match("/\d/",$department) || preg_match("/W/", $department)) {
				header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif (preg_match("/\s/",$username)) {
				header("Location:../motivatemejadeplease/register.php?error2");
			}
			elseif (preg_match("/\s/",$password)) {
				header("Location:../motivatemejadeplease/register.php?error2");
			
			}
			elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location:../motivatemejadeplease/register.php?error1");
   					 
			}
		    elseif(userExists($username,$password)) {
			header("Location:../motivatemejadeplease/register.php#popup5");
		   }
		      elseif(emailExists($email)) {
			header("Location:../motivatemejadeplease/register.php#popup6");
		   }
		       elseif(phoneExists($phone)) {
			header("Location:../motivatemejadeplease/register.php#popup7");
		   }
		
		else
		{
			$query = $db->prepare("INSERT INTO registration SET 
							fname = :firstname,
			 				lname = :lastname,
			 				minitial = :middleinitial,
			   				address =:address,
							bday = :bday,
							position = :position,
							company = :company,
							gender = :gender,
							phone = :phone, 
							department = :department,
							date_hired = :datehired,
							e_mail = :email,
							username = :username,
							password = :password");

		$execute_query = [':firstname' => $firstname,
		 					':lastname' => $lastname,
		 					':middleinitial' => $middleinitial,
							':address' => $address,
							':bday' => $birthday,
						 	':position' => $position,
						 	':company' => $company,
							':gender' => $gender,
						 	':phone' => $phone, 
						 	':department' => $department,
						 	':datehired' => $datehired,
							':email' => $email,
							':username' => $username,
							':password' => $password];


		
	
			if($query->execute($execute_query)){
					header('Location:../admin/admin.php');
				}
			else{
			header("Location:../motivatemejadeplease/register.php?dberror2");
				}

}
}
	


	
	// if(userExists($user)){
	// 	header("Location:../page/register.php?error1=1");
	// 	echo "user already exist!";
	// }
	// elseif(strlen($email) > 50 || strlen($email) < 10)
	// {
	// 	header("Location:../motivatemejadeplease/register.php?error3=1");
	// 	echo "invalid Email";
	// }
	// elseif(emailExists($email)){
	// 	header("Location:../motivatemejadeplease/register.php?error6=1");
	// 	echo "email already exist!";
	// }
	// else{

	// 	if(is_numeric($id_number)){

		

		

 ?>
