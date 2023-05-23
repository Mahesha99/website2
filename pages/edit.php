<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}
?>
<!doctype html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
	  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Edit</title>
      <link rel="stylesheet" type="text/css" href="../css/edit.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	   <script src="../js/add.js">  </script>
   </head>
   <body>
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                          <img
          src="../images/logo.jpeg"
          alt="logo" width="67"
          height="65"
          loading="lazy"
							   
        />
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="#"></a></li>
                     <li><a href="#"></a></li>
                     <li><a href="#"></a></li>
                     <li><a href="viewMine.php">View My Feed</a></li>
                     <li><a href="#"></a></li>
                     <li><a href="viewAll.php">Our Collection</a></li>
                  </ul>
               </div>
            </nav>
         </header>
		  
		  <?php
		$con=mysqli_connect("localhost","root","","bloom");
					if(!$con)
					{
						die("cannot connect DataBase !!!");
					}
		  
		  	$sql="SELECT * FROM `gift` WHERE `giftID`='".$_GET['id']."';";
			$image ="";
					$results=mysqli_query($con,$sql);
					if(mysqli_num_rows($results)>0)
					{
			$row = mysqli_fetch_assoc($results);
			$image =$row['imagePath'];
		?>
		
		  
         <div class="content">
          <form action="edit.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data" method="post">
           <table width="50%" height="112%" border="0" align="center">
	  <tbody>
	    <tr>
	      <td height="88" style="padding: 15px;"><strong>Title </strong></td>
	      <td><label for="textfield"></label>
	        <input type="text" name="txtTitle" id="txtTitle" value="<?php echo $row['title']; ?>" ></td>
	    </tr>
		 <tr>
	      <td height="88" style="padding: 15px;"><strong>Image </strong></td>
	      <td><label for="textfield"></label>
	        <input type="file" name="fileImage" id="fileImage" /></td>
	    </tr>
		<tr>
	      <td height="88" style="padding: 15px;"><strong>Description</strong></td>
	      <td><label for="textfield"></label>
	      <input type="text" name="txtDescription" id="txtDescription" value="<?php echo $row['des']; ?>" ></td>
			
	    </tr>
	    <tr>
	      <td height="82" style="padding: 15px;"><strong>status</strong></td>
	      <td>
			
			  <label class="container">
  			  <input type="checkbox" name="chkPublish" id="chkPublish" <?php if($row['status']==1)
			{
				echo "checked";
			} 
			?> /> Publish this
              <span class="checkmark"></span>
              </label>
		  </td>
        </tr>
		<tr>
		  <td colspan="2" style="padding: 15px;"><strong>
			  
			  			  			<?php
				if(isset($_POST["btnSubmit"]))
			{
				if(is_uploaded_file($_FILES['fileImage']['tmp_name']))
				{
   				$image = "../images/uploads/".basename($_FILES["fileImage"]["name"]);
				move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				}  
					
				$title = $_POST["txtTitle"];
				$description = $_POST["txtDescription"];
				
				if(isset($_POST["chkPublish"]))
				{
					$status = 1;
				}
				else
				{
					$status = 0; 
				}
			
			$con = mysqli_connect("localhost","root","","bloom");
			if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}
			
	 $sql = "UPDATE `gift` SET `title` = '".$title."', `des` = '".$description."',`imagePath` = '".$image."', `status` = '".$status."' 
	 WHERE `gift`.`giftID` = ".$_GET['id'].";"; 
	if(  mysqli_query($con,$sql))
	{
		echo " Update Successfully";
		
	}
	else
		echo "Opps something is wrong, Please select the file again";
			}
			  
			?>
			  
			  </strong></td>
		  </tr>
		<tr>
		  <td style="padding: 15px;"></td>
		  <td ><input type="submit" id="btnSubmit" name="btnSubmit" value="Submit"></td>
	    </tr>
		<tr>
	      <td colspan="2" style="padding: 15px;"> 

			</td>
        </tr>
      </tbody>
		
	  </table>
           </form>
         </div>
		  <?php 
					}
			  ?>
      </div>
   </body>
</html>