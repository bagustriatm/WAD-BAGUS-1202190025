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
				<li><a href="#">Booking</a></li>
			</div>
		</ul>
		</nav>
		<?php
			$image="https://ice-indonesia.com/assets/uploads/banner_image-images-3-1.jpg";
			if (isset($_POST['image'])){
				$image=$_POST['image'];
		}
		?>
	</header>
	<br>
	<br>
	<br>
	<div style="text-align: center">
		<h3>WELCOME TO ESD VENEU RESERVATION</h3>
	</div>
	<main>
		<div class="container p-2 bg-dark shadow text-white text-center">
			<p>Reserve Your Veneu Now!</p>
		</div>
		<section class="container p-2 bg-light shadow">
				<div class="row">
					<div class="col-6">
						<?php 
							if (isset($_POST['image'])) :
						?><img src="<?= $image ?>" alt="nusantara hall" width="500px" style="">
						<?php else: ?>
						<img class="rounded mx-auto d-block" src="https://i2.wp.com/hoteldesawisata.co.id/wp-content/uploads/2019/07/Hall-1.jpg" height="350px">
						<?php endif;?>
						
					</div>
					<div class="col-6">
						<form action="mybooking.php" method="post">
							<div class="mb-3">
								  <label for="nameofcustomer" class="form-label">Name</label>
								  <input type="text" class="form-control" id="nameofcustomer" value="bagus_1202190025" aria-describedby="nameofcustomer" name="nameofcustomer" readonly>
							</div>
							<div class="mb-3">
								<label for="eventname" class="form-label">Event Date</label>
								<input type="date" class="form-control" id="eventname" aria-describedby="event" name="event" required>
							</div>
							<div class="mb-3">
								<label for="time" class="form-label">Start Time</label>
								<input type="time" class="form-control" id="time" aria-describedby="time" name="time" required>
							</div>
							<div class="mb-3">
                            	<label for="duration" class="form-label">Duration (Hours)</label>
                            	<input type="number" class="form-control" id="duration" aria-describedby="duration" name="duration" required>
                        	</div>
							<div class="mb-3">
                            <label for="building" class="form-label">Building Type</label>
                                <select class="form-control" id="building" name="building">
                                    <option value="">Choose..</option>
                                    <option value="Nusantara Hall">Nusantara Hall</option>
                                    <option value="Garuda Hall">Garuda Hall</option>
                                    <option value="Gedung Serba Guna">Gedung Serba Guna</option>
                                </select>
                        	</div>
							<div class="mb-3">
								<label for="phonenumber" class="form-label">Phone Number</label>
								<input type="text" class="form-control" id="phonenumber" aria-describedby="phone" name="phone" required>
                        	</div>
							<div class="mb-3">
								<label for="Service" class="form-label">Add Service(s)</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="service" id="Catering">
									<label class="form-check-label" for="Catering">Catering /$700</label><br>
									<input class="form-check-input" type="checkbox" value="service" id="Decoration">
									<label class="form-check-label" for="Decoration">Decoration /$450</label><br>
									<input class="form-check-input" type="checkbox" value="service" id="Sound_System">
									<label class="form-check-label" for="Sound_System">Sound System /$250</label>
								</div>
							</div>
							
							<button type="submit" class="btn btn-primary" style="width: 500px">Book</button>
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
