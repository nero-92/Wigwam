<?php
require 'start.php';
require 'configure/logger.php';

$id_query = '
	SELECT order_id
	FROM orders
';
$order_list = $mydb->query($id_query);

a:
$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$order_id = $today . $rand;
foreach($order_list->fetch() as $id) {
	if($id == $order_id) {
		goto a;
	}
}

$order_query = '
	INSERT INTO orders
	VALUES (\''.$order_id.'\', \'open\', '.$today.', '.$_POST['product'].', '.$_POST['mobo'].', '.$_POST['cpu'].', '.$_POST['ram'].', '.$_POST['gpu'].', '.$_POST['sound'].', '.$_POST['net'].', '.$_POST['drive1'].', '.$_POST['drive2'].', '.$_POST['drive3'].', '.$_POST['drive4'].', '.$_POST['optic'].', '.$_POST['chassis'].', '.$_POST['psu'].', '.$_POST['cooler'].', '.$_POST['os'].');
';

mylog($order_query);
$mydb->query($order_query);

$msg = 'Order received. '.$order_id;
mail('jackfinan2@gmail.com', 'Order Received', $msg);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>my site</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="icon" href="images/favicon3.png" type="image/png" sizes="16x16">
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row nav-container">
				<h1 class="col-md-4">
					<a href="index.php" title="Home page">
						<img src="images/wigwam-logo.png" alt="Wigwam logo" class="logo" />
					</a>
				</h1>
				<div class="col-md-8">
					<nav class="navbar navbar-expand-sm">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" data-toggle="dropdown">Workstations</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Link 1</a>
									<a class="dropdown-item" href="#">Link 2</a>
									<a class="dropdown-item" href="#">Link 3</a>
								</div>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Gaming PCs</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Support</a></li>
							<li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2>Thank you for your order</h2>
		<p>You should receive an email confirmation shortly.</p>
		<hr>
		<p>Your order number is <strong><?php echo $order_id ?></strong></p>
	</div>
</body>