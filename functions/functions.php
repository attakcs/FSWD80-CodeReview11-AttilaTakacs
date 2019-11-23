<?php

/************************** BASIC RE-USEABLE FUNCTIONS *******************************/

//this one "clean up" strange characters, so users cannot insert harmful HTML codes into a site
function clean($string){

	return htmlentities($string);
}  

//this one redirect to an other page --> curly bracket to make it clear it's a variable
function redirect($location){

	return header("Location: {$location}");
}

//this one for session messages, so you don't have to use echo...
function set_message($message){

//first check if it's empty, put in $var if it's not

	if(!empty($message)){
		$_SESSION['message'] = $message;
	} else {
		$message = ""; 
	}
}

//...and if there is a message we'll display it here:
function display_message(){

// with unset your message won't stay there  

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];

		unset($_SESSION['message']);
	} 
}


/************************** FORM VALIDATION *******************************/

function validate_user_registration(){

	$errors = [];
	$min = 3;
	$max = 20;

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		//time to pull out the values :)

		$username 		= clean($_POST['username']);
		$email 			= clean($_POST['email']);
		$password 		= clean($_POST['password']);

		if(strlen($username) < $min) {

			$errors[] =  "Your username cannot be less than {$min} characters!";
		}

		if(strlen($username) > $max) {

			$errors[] =  "Your username cannot be more than {$max} characters!";
		}

		if(email_exists($email)){

			$errors[] = "Sorry that email already exists!";
		}

		if(username_exists($username)){

			$errors[] = "Sorry that username already exists!";
		}

		if(!empty($errors)) {

			foreach ($errors as $error) {
				
				echo '
				<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Warning:  </strong>  '.$error.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
		}
		} else {

				if(register_user($username, $email, $password)) {
					set_message('<div class="alert alert-success" role="alert">
  Successful registration!</div>');

					redirect('login.php');
				} else {

					set_message('<div class="alert alert-success" role="alert">
  Sorry We could not register the user!</div>');

					redirect('register.php');
				}
		} 
	}
}


/************************** CHECK EMAIL/USERNAME EXISTS *******************************/

function email_exists($email){

	$sql = "SELECT id FROM users WHERE email = '$email'";
	$result = query($sql);

	if(row_count($result) == 1){

		return true;

	} else {

		return false;
	}
}

function username_exists($username){

	$sql = "SELECT id FROM users WHERE name = '$username'";
	$result = query($sql);

	if(row_count($result) == 1){

		return true;

	} else {

		return false;
	}
}


/***************************** REGISTER USER *****************************/

function register_user($username, $email, $password){

	$username = escape($username);
	$email = escape($email);
	$password = escape($password);

	if(email_exists($email)) {

		return false;

	} else if (username_exists($username)) {

		return false;

	} else {

		$password = hash('sha256',$password);

		$sql = "INSERT INTO users(name, email, password)";
		$sql.="VALUES('$username','$email','$password')";
		$result = query($sql);
		confirm($result);

		return true;
	}
} 

/********************************* USER LOGIN *********************************/

// basic validation, feel free to change the email to username for i.e. (don't forget the login.php!)
function validate_user_login(){

	$errors = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$email 			= clean($_POST['email']);
		$password 		= clean($_POST['password']);

		if(empty($email)){

			$errors[] = "Email field cannot be empty!";
		}

		if(empty($password)){

			$errors[] = "Password field cannot be empty!"; 
		}

		if(!empty($errors)) {

			foreach ($errors as $error) {
				
				echo validation_errors($error);
			}

		} else {

				login_user($email, $password);

		}
	}
}

function validation_errors($error_message) {

$error_message = '<div class="alert alert-danger alert-dismissible" role="alert">
		  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  			<strong>Warning! Incorrect credentials!</strong>
				</div>';

return $error_message;
		
}

/* here we double-check if all the given data are matching (email and password in this case), then SET UP THE SESSIONS!
once the user/admin logged in, we can control the access on every single site (top of sites) */

function login_user($email, $password) {

	$sql = "SELECT id, name, password, role FROM users WHERE email = '".escape($email)."'";
	$result = query($sql);

	if(row_count($result) == 1) {

		$row = fetch_array($result);

		$db_password = $row['password'];

		if(hash('sha256',$password) == $db_password) {

			if($row['role'] == "admin"){

				      $_SESSION['admin'] = $row['id'];

				      redirect("adminpanel.php");

				    } else {

				      $_SESSION['user'] = $row['id'];

				      redirect("home.php");
				    } 

		} else {

			$errors[] = "Wrong password!";
		}
	}
}

				
?>
 


