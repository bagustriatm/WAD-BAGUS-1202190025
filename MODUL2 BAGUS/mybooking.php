<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ESD Veneu</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
	
<?php
$bookingnumber 	= rand(1000000000, 9999999999);
$nameofcustomer = $_POST['nameofcustomer'];
$comingDate 	= $_POST['event'] . " " . $_POST['time'];
$checkoutDate 	= date("d-m-Y H:i", (strtotime($comingDate) + 60 * 60 * $_POST['duration']));
$building 		= $_POST['building'];
$phonenumb		= $_POST['phone'];
$dur 		=$_POST['duration'];

$invoice = 0;
if ($building == 'Nusantara Hall'){
	$invoice += (2000 * $duration);
}else if($building == 'Garuda Hall'){
	$invoice += (2000 * $duration);
}else if($building == 'Gedung Serba Guna'){
	$invoice += (500 * $duration);
}
	

if (isset($_POST['service'])) {
    foreach ($_POST['service'] as $service) {
    if ($service == 'Catering') {
		$invoice += 700;
	}
    if ($service == 'Decoration'){ 
		$invoice += 450;
	}
    if ($service == 'Sound System'){
		$invoice += 250;} 
      }
}
?>
	
<body>
	<header>
		<nav class="navbar navbar-expand-lg fixed-top bg-dark">
		<ul class="text-white-50 m-auto" type="none">
			<div class="">
				<li><a href="home.php">Home</a></li>
				<li><a href="booking.php">Booking</a></li>
			</div>
		</ul>
		</nav>
	</header>
	<br>
	<br>
	<br>
	<div style="text-align: center">
		<h3>Thankyou bagus_1202190025 for Reserving</h3>
		<h4>Please double check your reservation details</h4>
		<br>
		<br>
	</div>
	<div class="container p-0 bg-light shadow">
		<table class="table">
		  <thead>
			<tr>
			  	<th scope="col">Booking Number</th>
			  	<th scope="col">Name</th>
			  	<th scope="col">Check-in</th>
			  	<th scope="col">Check-out</th>
				<th scope="col">Building type</th>
				<th scope="col">Phone Number</th>
				<th scope="col">Service</th>
				<th scope="col">Total Price</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row"><?php echo $bookingnumber?></th>
			  	<td><?php echo $nameofcustomer ?></td>
			 	<td><?php echo $comingDate ?></td>
			  	<td><?php echo $checkoutDate ?></td>
			  	<td><?php echo $building ?></td>
				<td><?php echo $phonenumb ?></td>
				<td> <ul><?php
                            if (isset($_POST['service'])) {
                                for ($_POST['service'] as $service) {
                                    echo "<li>$service</li>";
                                }
                            } else {
                                echo "No Service";
                            }
                            ?>
                     </ul>
				</td>
				<td><?= '$' . $invoice ?></td>
			</tr>
		  </tbody>
		</table>
		</div>
	<main>
	</main>
	<br>
	<br>
	<br>
	<br>
	<footer class="fixed-bottom">
		<p>Dibuat oleh BAGUS TRI ATMAJA_1202190025</p>
	</footer>
</body>
	<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>
</html>
