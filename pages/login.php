<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/login.css"/>
<title>login</title>
</head>

<body>
	<form action="login.php" method="post">
	<br><br>
	<table width="50%" height="112%" border="0" align="center">
	  <tbody>
	    <tr>
	      <td height="269" colspan="2"><img src="../images/cover.jpeg" width="100%" height="316" alt=""/></td>
        </tr>
	    <tr>
	      <td height="88" style="padding: 15px;">Username :</td>
	      <td><label for="textfield"></label>
          <input type="text" name="txtuname" id="txtuname"></td>
        </tr>
	    <tr>
	      <td height="82" style="padding: 15px;">Password</td>
	      <td><input type="password" name="txtpassword" id"txtpassword"></td>
        </tr>
		<tr>
		  <td style="padding: 15px;"></td>
		  <td><input type="submit" id="btnsubmit" name="btnsubmit" value="Submit"></td>
	    </tr>
		<tr>
	      <td colspan="2" style="padding: 15px;"> 
			
			  
		              <p><?php 
				if(isset($_POST["btnsubmit"]))
				{
					$userName=$_POST["txtuname"];
					$password=$_POST["txtpassword"];
					
					$con=mysqli_connect("localhost","root","","bloom");
					if(!$con)
					{
						die("cannot connect DataBase !!!");
					}
					$sql="SELECT * FROM `userdb` WHERE `userName`='".$userName."' AND `password`='".$password."';";
					
					$results=mysqli_query($con,$sql);
					
					
					if(mysqli_num_rows($results)>0)
					{
						$_SESSION["userName"]=$userName;
						header('Location:viewMine.php');
					}
					else
					{
						echo"Please enter a correct user name and password";	
					}
				}
				?></p>
			
			</td>
        </tr>
      </tbody>
		
	  </table>

	</form>
</body>
</html>
