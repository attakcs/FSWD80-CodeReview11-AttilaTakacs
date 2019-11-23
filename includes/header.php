<?php include("functions/init.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>WannaBeThere</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="container">

    <div class="jumbotron">

        <h1 class="text-center"></h1>

        <?php if((isset($_SESSION['admin'])) || (isset($_SESSION['user']))) {

            echo  '<div class="float-right text-center m-0" id="logout">
                    <a class="nav-link text-white" href="logout.php?logout"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M169.34609,86c0,-46.02344 -37.32266,-83.34609 -83.34609,-83.34609c-46.02344,0 -83.34609,37.32266 -83.34609,83.34609c0,46.02344 37.32266,83.34609 83.34609,83.34609c46.02344,0 83.34609,-37.32266 83.34609,-83.34609z" fill="#ffffff"></path><path d="M128.05937,54.69063c-6.58437,-8.80156 -15.92344,-15.45312 -26.3375,-18.74531c-0.26875,-0.06719 -0.5375,-0.03359 -0.73906,0.13437c-0.20156,0.16797 -0.33594,0.40313 -0.33594,0.67188l0.06719,13.53828c0,0.36953 0.16797,0.70547 0.43672,0.87344c10.64922,6.55078 22.33984,15.78906 22.33984,34.66875c0,20.66016 -16.79687,37.49063 -37.49063,37.49063c-20.66016,0 -37.49062,-16.79687 -37.49062,-37.49062c0,-19.71953 11.825,-28.45391 22.70937,-34.90391c0.26875,-0.16797 0.47031,-0.50391 0.47031,-0.87344l0.06719,-13.40391c0,-0.26875 -0.13438,-0.50391 -0.33594,-0.67187c-0.20156,-0.16797 -0.50391,-0.20156 -0.73906,-0.13438c-10.51484,3.225 -19.95469,9.87656 -26.60625,18.71172c-6.88672,9.1375 -10.51484,20.02188 -10.51484,31.47734c0,28.92422 23.51562,52.43984 52.47344,52.43984c28.92422,0 52.43984,-23.51562 52.43984,-52.43984c-0.03359,-11.38828 -3.59453,-22.23906 -10.41406,-31.34297z" fill="#000000"></path><path d="M87.27656,25.16172h-2.51953c-3.96406,0 -7.18906,3.225 -7.18906,7.18906v60.87188c0,3.96406 3.225,7.18906 7.18906,7.18906h2.51953c3.96406,0 7.18906,-3.225 7.18906,-7.18906v-60.87187c0,-3.96406 -3.225,-7.18906 -7.18906,-7.18906z" fill="#000000"></path></g></g></svg></a><div class="text-white">Logout
                    </div>
                    </div>'; } ?>
    </div>