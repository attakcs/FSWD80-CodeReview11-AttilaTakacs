<?php include("includes/header.php") ?>

<?php  

if((isset($_SESSION['admin'])) || (isset($_SESSION['user']))) {

		// GRANT ACCESS

	} else {

		redirect("login.php");
	}
?>

<?php include("includes/nav.php") ?>

<h1 class="text-center">Events</h1>

<div class="row d-flex justify-content-around">
<?php
           $sql = "SELECT * FROM event";
           $result = query($sql);

            if(row_count($result) > 0) {

                while($row = $result->fetch_assoc()) {

            echo
            '
            <div class="card col-lg-4 d-inline" style="width: 18rem;">
                <img src="'.$row["image"].'"" class="card-img-top">
                <div class="card-body">
              	 <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>'.$row["name"].'</b></li>
                  <li class="list-group-item"><b>Date: </b>'. $row["date"].'</li>
                  <li class="list-group-item"><b>Time: </b>'. $row["time"].'</li>
                  <li class="list-group-item"><b>Address: </b>'. $row["address"].'</li>
                  <li class="list-group-item"><b>Price: </b>'. $row["price"].' &euro;</li>
                  <li class="list-group-item text-truncate"><b>Website: </b>'. $row["web"].'</li>
              	 </ul>
            </div>
            </div>
            '; }

           } else {

               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>"; }     
 ?></div>

<?php include("includes/footer.php") ?>