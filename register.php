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

			<?php validate_user_registration(); ?>
      				
		</div>
	</div>

<div class="row d-flex justify-content-center">   	
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="register.php">Register</a>
      </li>
    </ul>
 </div>
  <div class="card-body">
  <form id="register-form" method="POST" role="form">
    <div class="form-group">
    	<input type="text" name="username" id="username" class="form-control" placeholder="Username"  required>
 	  </div>
 	  <div class="form-group">
    	<input type="email" name="email" id="register_email" class="form-control" placeholder="Email Address"  required>
  	</div>
    <div class="form-group">
    	<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
  	</div>
 	    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="btn btn-primary" value="Register Now">
	</form>
  </div>
</div>
</div> 

<?php include("includes/footer.php") ?>