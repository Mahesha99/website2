<?php
session_start(); 
if (!isset($_SESSION["userName"]))
{
	header('Location:login.php');

}
$con = mysqli_connect("localhost","root","","bloom");
			if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}
			$sql = "DELETE FROM `gift` WHERE `gift`.`giftID` = ".$_GET["id"]; 
	   
	  	mysqli_query($con,$sql);	
		header('Location:viewMine.php');
	

	?>