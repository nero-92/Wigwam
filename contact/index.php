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
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Contact Support</h3>
					<hr />
					<p>Use this form to submit your questions directly to our support staff. Please include as much detail as possible, to allow the most expedient and thorough answer to your question.</p>
					<form method="get" name="orderform" action="submitsupportform.php" method="post">
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Name</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-9">
								<input class="form-control" type="email" name="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Phone</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="phone" placeholder="Optional">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Order Number</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="order">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 col-form-label">Issue</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="issue" id="issue"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-9 offset-sm-3">
								<input type="submit" class="btn" value="Submit Request">
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<h3>Contact Details</h3>
					<hr />
					<dl class="row">
						<dt class="col-sm-3">Email</dt>
						<dd class="col-sm-9">
							<a href="mailto:info@wigwam-systems.com">info@wigwam-systems.com</a>
						</dd>
						<dt class="col-sm-3">Phone</dt>
						<dd class="col-sm-9">
							<a href="tel:+353860612118">086-061-2118</a>
						</dd>
						<dt class="col-sm-3">Phone hours</dt>
						<dd class="col-sm-9">Mon - Fri, 9am - 5pm GMT</dd>
						<dt class="col-sm-3">Address</dt>
						<dd class="col-sm-9" style="margin-bottom: 0;">71 Kylemore Avenue</dd>
						<dd class="col-sm-9 offset-sm-3" style="margin-bottom: 0;">Ballyfermot, Dublin</dd>
						<dd class="col-sm-9 offset-sm-3">D10 XC99</dd>
					</dl>
				</div>
			</div>
		</div>
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