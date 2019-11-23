<?php include("includes/header.php") ?>

<?php  

if((isset($_SESSION['admin'])) && (!isset($_SESSION['user']))) {

		// GRANT ACCESS
	
	} else {

		redirect("login.php");
	}
?>

<?php include("includes/nav.php") ?>

<!-- Content Section -->

<div class="row">
<div class="col-md-12">
	<h1 class="text-center">PHP and MySQL CRUD Operations</h1>
	<div>
		<button class="btn btn-dark float-right" data-toggle="modal" data-target="#add_new_restaurant_modal">New Restaurant</button>
	</div>
	<div>
		<button class="btn btn-dark float-right" data-toggle="modal" data-target="#add_new_event_modal" disabled>New Event</button>
	</div>
</div>
</div>

<div class="row">
	<div class="col-md-12">
	<h4>Records:</h4>
	<div class="records_content"></div>
	</div>
</div>

<!-- /Content Section -->

<!-- Link for the pop-up modal comes here: -->

<?php include("modals/add_new_restaurant_modal.php") ?>

<?php include("modals/add_new_event_modal.php") ?>

<?php include("includes/footer.php") ?>