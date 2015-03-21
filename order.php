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
	
		<div class="container marketing ">
			<div class="bil"></div>



				<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-10">
				   		<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						  </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				    	<div class="input-group">
						   	<span class="input-group-addon">* </span>
				      		<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				  		</div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
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