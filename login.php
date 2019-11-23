<?php include("includes/header.php") ?>

<?php  
if(isset($_SESSION["user"])){
  redirect("home.php");
}
if(isset($_SESSION["admin"])){
  redirect("adminpanel.php");
}?>

<?php include("includes/nav.php") ?>
	
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6 col-lg-offset-3">

					<?php display_message(); ?>

          <?php validate_user_login(); ?>	
		</div>
	</div>
    	
<div class="row d-flex justify-content-center">
	<div class="card text-center align-middle">
  	<div class="card-header">
    	<ul class="nav nav-tabs card-header-tabs">
      		<li class="nav-item">
        	<a class="nav-link active" href="login.php">Login</a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="register.php">Register</a>
      		</li>
    	</ul>
 	</div>
  	<div class="card-body">
  <form id="login-form" method="POST" role="form">
    <div class="form-group">
    	<input type="email" name="email" id="login-email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="form-group">
  		<input type="password" name="password" id="login-password" class="form-control" placeholder="Password" value="<?php echo $password; ?>" required>
  	</div>
  		<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-primary" value="Login">
	</form>
	</div>
</div>
</div>


<?php include("includes/footer.php") ?>

