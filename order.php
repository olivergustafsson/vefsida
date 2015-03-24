<?php 
include 'include/config.php';
?>
<!doctype html>
<html lang="en">

<head>
	<title><?php echo($all['titill']); ?></title>
	<?php style(); ?>
</head>

<body>
<div id="preloader">
	<div id="status"></div>
</div>
<div>
	<header>
	<?php nav(); ?>
	</header>
	<body>
	
		<div class="container-fluid marketing ">
			<div class="bil"></div>

			<form action="email.php" method="post"><div style="margin:0;padding:0;display:inline">    
			<div class="row contact-form mt80">
       		 <div class="col-md-6">
       		   <label>First Name:</label>
       		   <input type="text" name="firstname" class="form-control" required patttern="[a-zA-Z0-9]+"/>
       		   <label>Last Name: </label>
       		   <input type="text" name="lastname" class="form-control" required patttern="[a-zA-Z0-9]+"/>
       		   <label>Email:</label>
       		   <input type="email" name="email" class="form-control" required/>
       		 </div>
       		 <div class="col-md-6">
       		 	<label>Phone:</label>
       		   	<input type="phone" name="phone number" class="form-control" required />  
       		 	<label>Color:</label>
       		   	<input type="text" name="car color" class="form-control" required/>  
       		   	<label>Type:</label>
       		   	<input type="text" name="BMW type" class="form-control" required/> 
       		   <div class="bil"></div>
       		   <input type="submit" value="Submit" class="btn btn-danger btn-lg" required/>      
       		 </div>

      			</div>
			</form>


			<div class="bil"></div>
	      </div>
      <footer>

      </footer>
      
	</body>
</div>

<?php script(); ?>

</body>
</html>