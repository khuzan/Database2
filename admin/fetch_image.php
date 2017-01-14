<?php
 function connect(){
 	$db = new PDO("mysql:host=localhost;dbname=employees_record_system","root","");
 	return $db;
 }

$select_path="select * from user";



while($row=mysql_fetch_array($select_path))
{
 $image_name=$row["imagename"];
 $image_path=$row["imagepath"];
 echo "img src=".$image_path."/".$image_name." width=100 height=100";
}
?>