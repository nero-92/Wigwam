<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Configure your PC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	<script src="../js/customize.js"></script>

	<script>
		var parts = <?php echo get_parts_list('102'); ?>;
	</script>

	<link rel="stylesheet" href="../css/stylesheet.css">
	<link rel="icon" href="../images/favicon3.png" type="image/png" sizes="16x16">
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row nav-container">
				<h1 class="col-md-4">
					<a href="../index.php" title="Home page">
						<img src="../images/wigwam-logo.png" alt="Wigwam logo" class="logo" />
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
		<form method="get" name="orderform" action="../submitconfig.php" class="row" id="form">
			<input type="hidden" name="product" id="product" value="102">
			<div class="col-md-9">
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<h3>System Core</h3>
					</div>
				</div>
				<hr>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						Motherboard
					</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<input type="hidden" name="mobo" id="mobo" value="11002">
							<a target="_blank" href="#">Gigabyte Z370N WiFi (Intel z370 mini-ITX)</a>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						CPU
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="cpu" id="cpu" onchange="get_options('cpu'); get_total();">
								<optgroup>
									<option value="12001"></option>
									<option value="12002"></option>
									<option value="12004"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing a CPU." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						RAM
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="ram" id="ram" onchange="get_options('ram'); get_total();">
								<optgroup>
									<option value="13004"></option>
									<option value="13001"></option>
									<option value="13002"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing a RAM." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						Video Card
					</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<input type="hidden" name="gpu" id="gpu" value="14001">
							<a target="_blank" href="#">Intel UHD Graphics 630 1050 Mhz DX12</a>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						Sound Card
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="sound" id="sound" onchange="get_options('sound'); get_total();">
								<optgroup>
									<option value="15001"></option>
								</optgroup>
								<optgroup>
									<option value="15008"></option>
									<option value="15005"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing a Sound Card." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						Networking
					</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<input type="hidden" name="net" id="net" value="16001">
							<a target="_blank" href="#">Integrated WiFi+Bluetooth</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<h3>Storage</h3>
					</div>
				</div>
				<hr>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						PCI-E M.2 SSD
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="m21" id="m21" onchange="get_options('m21'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="17003"></option>
									<option value="17004"></option>
									<option value="17012"></option>
									<option value="17013"></option>
									<option value="17014"></option>
									<option value="17015"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing an M.2 Drive." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<input type="hidden" name="m22" id="m22" value="0">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						SATA SSD / HDD #1
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="drive1" id="drive1" onchange="get_options('drive1'); get_total();">
								<optgroup>
									<option value="17001"></option>
									<option value="17002"></option>
									<option value="17018"></option>
									<option value="17019"></option>
									<option value="17020"></option>
									<option value="17021"></option>
									<option value="17022"></option>
									<option value="17023"></option>
									<option value="17024"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing a Hard Drive." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						SATA SSD / HDD #2
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="drive2" id="drive2" onchange="get_options('drive2'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="17016"></option>
									<option value="17017"></option>
								</optgroup>
								<optgroup>
									<option value="17001"></option>
									<option value="17002"></option>
									<option value="17018"></option>
									<option value="17019"></option>
									<option value="17020"></option>
									<option value="17021"></option>
									<option value="17022"></option>
									<option value="17023"></option>
									<option value="17024"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing a Hard Drive." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<input type="hidden" name="drive3" id="drive3" value="0">
				<input type="hidden" name="drive4" id="drive4" value="0">
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						DVD / BLU-Ray
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="optic" id="optic" onchange="get_options('optic'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="18004"></option>
									<option value="18005"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing an Optical Drive." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<h3>Case / Cooling</h3>
					</div>
				</div>
				<hr>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						Case
					</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<input type="hidden" name="chassis" id="chassis" value="19002">
							<a target="_blank" href="#">Antec ISK 110 VESA EC-U3 Mini-ITX (black)</a>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						Power Supply
					</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<input type="hidden" name="psu" id="psu" value="20003">
							<a target="_blank" href="#">LEICKE 150W Power Supply</a>
							<a target="_blank" href="#">Mini-Box picoPSU-160-XT</a>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						CPU Cooling
					</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<input type="hidden" name="cooler" id="cooler" value="21002">
							<a target="_blank" href="#">Noctua NH-19i</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<h3>Software</h3>
					</div>
				</div>
				<hr>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						OS
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="os" id="os" onchange="get_options('os'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option selected value="22001"></option>
									<option value="22002"></option>
								</optgroup>
								<optgroup>
									<option value="22003"></option>
								</optgroup>
							</select>
							<span class="input-group-append">
								<a target="_blank" title="Get information on choosing a Sound Card." href="#">
									<i class="fas fa-question-circle"></i>
								</a>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<h3>Peripherals</h3>
					</div>
				</div>
				<hr>
				<div class="form-group row">
					<label class="col-md-3 col-form-label">
						Monitor
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="monitor" id="monitor" onchange="get_options('monitor'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="23001"></option>
									<option value="23004"></option>
									<option value="23002"></option>
									<option value="23005"></option>
									<option value="23003"></option>
								</optgroup>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-form-label">
						Speakers
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="speakers" id="speakers" onchange="get_options('speakers'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="24001"></option>
									<option value="24002"></option>
									<option value="24003"></option>
								</optgroup>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-form-label">
						Keyboard
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="keyboard" id="keyboard" onchange="get_options('keyboard'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="25002"></option>
									<option value="25003"></option>
									<option value="25001"></option>
									<option value="25004"></option>
									<option value="25005"></option>
								</optgroup>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-3 col-form-label">
						Mouse
					</label>
					<div class="col-sm-9">
						<div class="input-group input-group-sm">
							<select class="form-control" name="mouse" id="mouse" onchange="get_options('mouse'); get_total();">
								<optgroup>
									<option value="0"></option>
								</optgroup>
								<optgroup>
									<option value="26001"></option>
									<option value="26002"></option>
									<option value="26003"></option>
								</optgroup>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<h3>Comment / Questions</h3>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-9 offset-sm-3">
						<textarea name="comments" id="comments" class="form-control" rows="4" placeholder="If you have any specific requests, information about your needs or questions about this system, put them here."></textarea>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="total-price-panel">
					<h4>Total Cost</h4>
					<h3 id="total-price"></h3>
					<input type="submit" class="btn" value="Checkout">
					<hr>
					Have Questions?<br>
					<a href="#" target="_blank"><i class="fas fa-envelope"></i> Email Us</a>
				</div>
			</div>
		</form>
	</div>
</body>

</html>