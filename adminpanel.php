<?php include("includes/header.php") ?>

<?php  

if((isset($_SESSION['admin'])) && (!isset($_SESSION['user']))) {

		// GRANT ACCESS
	
	} else {

		redirect("login.php");
	}
?>

<?php include("includes/nav.php") ?>

<h1 class="text-center">Welcome Master</h1>

<?php include("includes/footer.php") ?>