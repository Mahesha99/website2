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
      <title>View All</title>
    <link rel="stylesheet" type="text/css" href="../css/all.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					 
					  <li> <p>copyright &copy; <a href="https://www.linkedin.com/in/mahesha-madugalle/">Cristal Developers</a>  </p></li>
					  <li><a href=""></a></li>
                    
                     <li><a href="viewMine.php">Back</a></li>
                  </ul>
               </div>
            </nav>
         </header>
         
           <form action="" method="post" enctype="multipart/form-data">
           <table width="50%" height="112%" border="0" align="center">
	  <tbody>
	   <div class = "container mt-2" > 
		   				<?php 
				$con=mysqli_connect("localhost","root","","bloom");
					if(!$con)
					{
						die("cannot connect DataBase !!!");
					}
					$sql="SELECT * FROM `gift` WHERE `status`='1';";
					
					$results=mysqli_query($con,$sql);
					
					
					if(mysqli_num_rows($results)>0)
					{
						while($row = mysqli_fetch_assoc($results))
						{
						  
				?>
		   
	            <div class="image">
				  <a href="<?php echo $row['imagePath'];?>"><img src="<?php echo $row['imagePath'];?>" width="195" height="192" alt=""/> </a>
					<div class="title"><?php echo $row['title'];?><br>
					<div class="desc"><?php echo $row['des'];?><br>
				   </div>
				   </div>
				</div>
									  
				 <?php 
						}
					}
				 mysqli_close($con);
				?>
		</div>		  

      </tbody>
		
	  </table>
           </form>
         
   </div>
   </body>
</html>