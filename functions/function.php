<?php
 function connect(){
 	$db = new PDO("mysql:host=localhost;dbname=employees_record_system","root","");
 	return $db;
 }

  function finduser($user, $password){
  	if($user=="admin"){
  		$db = connect();
		$query = $db->prepare("Select * From login WHERE user = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
  	}
  	else{
  		$db = connect();
		$query = $db->prepare("Select * From registration WHERE username = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
  	}
 	
 }
 function getemp(){
	$db = connect();
	$sth = $db->prepare("Select * From registration order by id");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
}

function getdata($id){
	$db = connect();
	$sth = $db->prepare("Select * FROM registration WHERE id = ?");
	$sth->bindParam(1,$id);
	$sth->execute();
	$results = $sth->fetch(PDO::FETCH_OBJ);
	return $results;
}

function userExists($username, $password){
 $db = connect();
 $query = $db->prepare("SELECT * from registration WHERE  username = ? AND password = ?");

 
 $query->bindParam(1,$username);
 $query->bindParam(2,$password);
 
 
 if($query->execute()){
		if($query->rowCount()>0){
			return true;
		}
		else{
			return false;
		}
	}

}

function emailExists($email){
	$db = connect();
	$query = $db->prepare("SELECT * from registration WHERE e_mail = ?");

	$query->bindParam(1,$email);

	if ($query->execute()) {
		if ($query->rowCount()>0) {
			return true;
		}
		else{
			return false;
     	}
	}
}
function phoneExists($phone){
	$db = connect();
	$query = $db->prepare("SELECT * from registration WHERE phone = ?");

	$query->bindParam(1,$phone);

	if ($query->execute()) {
		if ($query->rowCount()>0) {
			return true;
		}
		else{
			return false;
     	}
	}
}