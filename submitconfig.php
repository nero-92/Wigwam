<?php
function get_name($id) {
	require 'start.php';

	$parts_query = "
		SELECT parts.part_id, name
		FROM config_options
		INNER JOIN parts
		ON config_options.part_id = parts.part_id
		WHERE product_id = '".$_GET['product']."';
	";
	$parts = $mydb->query($parts_query);

	foreach($parts->fetchAll() as $row) {
		if($row['part_id'] == $id) {
			return $row['name'];
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wigwam Advanced Computer Systems</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="/wigwam/css/stylesheet.css">
	<link rel="icon" href="/wigwam/images/logo/favicon2.png" type="image/png" sizes="32x32">
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row nav-container">
				<h1 class="col-md-4">
					<a href="/wigwam" title="Wigwam Advanced Computer Systems">
						<img src="/wigwam/images/logo/logo3.png" alt="Wigwam logo" class="logo" />
					</a>
				</h1>
				<div class="col-md-8">
					<nav class="navbar navbar-expand-sm">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link" href="/wigwam/products/" data-hover="dropdown">Products</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/wigwam/products/atom/">Atom</a>
									<a class="dropdown-item" href="/wigwam/products/keystone/">Keystone</a>
									<a class="dropdown-item" href="/wigwam/products/flair/">Flair</a>
									<a class="dropdown-item" href="/wigwam/products/spirit/">Spirit</a>
									<a class="dropdown-item" href="/wigwam/products/serenity/">Serenity</a>
									<a class="dropdown-item" href="/wigwam/products/surge/">Surge</a>
									<a class="dropdown-item" href="/wigwam/products/cascade/">Cascade</a>
									<a class="dropdown-item" href="/wigwam/products/evoke/">Evoke</a>
									<a class="dropdown-item" href="/wigwam/products/apex/">Apex</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="/wigwam/solutions/" data-hover="dropdown">Solutions</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Solution 1</a>
									<a class="dropdown-item" href="#">Solution 2</a>
									<a class="dropdown-item" href="#">Solution 3</a>
								</div>
							</li>
							<li class="nav-item"><a class="nav-link" href="/wigwam/support/">Support</a></li>
							<li class="nav-item"><a class="nav-link" href="/wigwam/about/">About Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container main-container">
		<form method="post" name="orderform" action="orderconfirmation.php">
			<h2>Review your order</h2>
			<input type="submit" class="btn" value="Checkout">
			<hr>
			<input type="hidden" name="product" value="<?php echo $_GET['product']; ?>">
			<div class="order-row row">
				<div class="order-label col-sm-3">Motherboard</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['mobo']); ?></div>
				<input type="hidden" name="mobo" value="<?php echo $_GET['mobo']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">CPU</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['cpu']); ?></div>
				<input type="hidden" name="cpu" value="<?php echo $_GET['cpu']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">RAM</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['ram']); ?></div>
				<input type="hidden" name="ram" value="<?php echo $_GET['ram']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Video Card</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['gpu']); ?></div>
				<input type="hidden" name="gpu" value="<?php echo $_GET['gpu']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Sound Card</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['sound']); ?></div>
				<input type="hidden" name="sound" value="<?php echo $_GET['sound']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Networking</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['net']); ?></div>
				<input type="hidden" name="net" value="<?php echo $_GET['net']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Storage</div>
				<div class="order-item col-sm-9">
					<?php
						echo get_name($_GET['drive1']).'<input type="hidden" name="drive1" value="'.$_GET['drive1'].'">';
						if($_GET['drive2'] != '0') {
							echo '<br>'.get_name($_GET['drive2']);
						}
						echo '<input type="hidden" name="drive2" value="'.$_GET['drive2'].'">';
						if($_GET['drive3'] != '0') {
							echo '<br>'.get_name($_GET['drive3']);
						}
						echo '<input type="hidden" name="drive3" value="'.$_GET['drive3'].'">';
						if($_GET['drive4'] != '0') {
							echo '<br>'.get_name($_GET['drive4']);
						}
						echo '<input type="hidden" name="drive4" value="'.$_GET['drive4'].'">';
					?>
				</div>
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">CD / DVD</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['optic']); ?></div>
				<input type="hidden" name="optic" value="<?php echo $_GET['optic']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Case</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['chassis']); ?></div>
				<input type="hidden" name="chassis" value="<?php echo $_GET['chassis']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Power Supply</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['psu']); ?></div>
				<input type="hidden" name="psu" value="<?php echo $_GET['psu']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">CPU Cooler</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['cooler']); ?></div>
				<input type="hidden" name="cooler" value="<?php echo $_GET['cooler']; ?>">
			</div>
			<div class="order-row row">
				<div class="order-label col-sm-3">Operating System</div>
				<div class="order-item col-sm-9"><?php echo get_name($_GET['os']); ?></div>
				<input type="hidden" name="os" value="<?php echo $_GET['os']; ?>">
			</div>
		</form>
		<hr>
	</div>

	<div class="footer">
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 footer-blurb">
						<h4>Our mission</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed mi quam. Aliquam erat ante, pretium eu consequat eu, mattis sit amet ipsum. Mauris ex velit, volutpat ut lorem sit.</p>
					</div>
					<div class="col-md-3 footer-links">
						<ul>
							<h5>Optimised Solutions</h5>
							<li><a href="/wigwam/solutions/content-creation">Content Creation</a></li>
							<li><a href="/wigwam/solutions/engineering">Engineering</a></li>
							<li><a href="/wigwam/solutions/scientific">Scientific Computing</a></li>
							<li><a href="/wigwam/solutions/gaming">Gaming / Streaming</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-links">
						<ul>
							<h5>About Us</h5>
							<li><a href="/wigwam/about">About Us</a></li>
							<li><a href="/wigwam/support">Support</a></li>
							<li><a href="/wigwam/policies">Policies</a></li>
							<li><a href="/wigwam/careers">Careers</a></li>
							<li><a href="/wigwam/contact">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<div class="container">
				© Copyright 2019 - Wigwam Systems, All Rights Reserved.
			</div>
		</div>
	</div>
</body>

</html>
</body>