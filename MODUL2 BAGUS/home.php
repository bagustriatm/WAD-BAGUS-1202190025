<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ESD Veneu</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
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
		<h3>WELCOME TO ESD VENEU RESERVATION</h3>
	</div>
	<main>
		<div class="container p-2 bg-dark shadow text-white text-center">
			<p>Find your best deal for your event. Here!</p>
		</div>
		<section class="container p-2 bg-light shadow">
				<div class="row" style="margin-top:20px">
					<br>
					<div class="col-4">
						<form action="booking.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://ice-indonesia.com/assets/uploads/banner_image-images-3-1.jpg" alt="nusantara hall" height="150px">
                      		<input name="image" value="https://ice-indonesia.com/assets/uploads/banner_image-images-3-1.jpg" hidden>
						  <div class="card-body">
							<h5 class="card-title">Nusantara Hall</h5>
                      		<input name="buildingname" value="Nusantara Hall" hidden>
							  <p>$2000 /hour<br>5000 capacity</p>
							</div>
							  <ul class="list-group list-group-flush">
								<li class="list-group-item listready" style="text-align: center"><strong>Free Parking</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Full AC</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Cleaning Service</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Covid-19 Health Protocol</strong></li>
								<li class="list-group-item" style="text-align: center"><button class="btn btn-primary">Book Now</button></li>
							  </ul>
						</div>
						</form>
					</div>
					<div class="col-4">
						<form action="booking.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://media-cdn.tripadvisor.com/media/photo-s/1a/25/06/c5/garuda-hall.jpg" alt="Garuda hall" height="150px">
                      		<input name="image" value="https://media-cdn.tripadvisor.com/media/photo-s/1a/25/06/c5/garuda-hall.jpg" hidden>							
						  <div class="card-body">
							<h5 class="card-title">Garuda Hall</h5>
							  <input name="buildingname" value="Garuda Hall" hidden>
							  <p>$1000 /hour<br>2000 capacity</p>
							</div>
							  <ul class="list-group list-group-flush">
								<li class="list-group-item listready" style="text-align: center"><strong>Free Parking</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Full AC</strong></li>
								<li class="list-group-item listnotready" style="text-align: center"><strong>No Cleaning Service</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Covid-19 Health Protocol</strong></li>
								<li class="list-group-item" style="text-align: center"><button class="btn btn-primary">Book Now</button></li>
							  </ul>
						</div>
						</form>
					</div>
					<div class="col-4">
						<form action="booking.php" method="post">
						<div class="card shower" style="width: 300px">
							<img class="card-img-top" src="https://i2.wp.com/hoteldesawisata.co.id/wp-content/uploads/2019/07/Hall-1.jpg" alt="Gedung Serbaguna" height="150px">
                      		<input name="image" value="https://i2.wp.com/hoteldesawisata.co.id/wp-content/uploads/2019/07/Hall-1.jpg" hidden>	
						  <div class="card-body">
							<h5 class="card-title">Gedung Serbaguna</h5>
							  <input name="buildingname" value="Gedung Serbaguna" hidden>
							  <p>$500 /hour<br>500 capacity</p>
							</div>
							  <ul class="list-group list-group-flush">
								<li class="list-group-item listnotready" style="text-align: center"><strong>No Free Parking</strong></li>
								<li class="list-group-item listnotready" style="text-align: center"><strong>No Full AC</strong></li>
								<li class="list-group-item listnotready" style="text-align: center"><strong>No Cleaning Service</strong></li>
								<li class="list-group-item listready" style="text-align: center"><strong>Covid-19 Health Protocol</strong></li>
								<li class="list-group-item " style="text-align: center"><button class="btn btn-primary">Book Now</button></li>
							  </ul>
						</div>
						</form>
					</div>
				</div>
		</section>
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
