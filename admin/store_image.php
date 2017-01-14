<?php
 function connect(){
 	$db = new PDO("mysql:host=localhost;dbname=employees_record_system","root","");
 	return $db;
 }

$upload_image=$_FILES["myimage"][ "name" ];

$folder="uploads/";

move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);

$insert_path="INSERT INTO user VALUES('$folder','$upload_image')";


?>