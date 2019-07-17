<?php
require '../../../config.php';
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
	<script src="/wigwam/js/customize.js"></script>

	<script>
		var parts = <?php echo get_parts_list(); ?>;
	</script>

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
				<div class="col-md-8 customize-main-image" id="customize-main-image">
					<img src="/wigwam/images/systems/atom2.jpg" data-toggle="modal" data-target="#customize-modal">
					<img src="/wigwam/images/systems/antec-isk-110-1.jpg" data-toggle="modal" data-target="#customize-modal" style="display:none;">
					<img src="/wigwam/images/systems/h.png" data-toggle="modal" data-target="#customize-modal" style="display:none;">
				</div>
				<div class="col-md-4">
					<p>some text here?</p>
				</div>
			</div>
			<div class="customize-thumbs" style="display: flex">
				<img src="/wigwam/images/systems/atom2.jpg" onclick="gallery_set_image('0');">
				<img src="/wigwam/images/systems/antec-isk-110-1.jpg" onclick="gallery_set_image('1');">
				<img src="/wigwam/images/systems/h.png" onclick="gallery_set_image('2');">
			</div>
			<div class="modal customize-modal" id="customize-modal">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body" id="gallery-images">
							<img src="/wigwam/images/systems/atom2.jpg">
							<img src="/wigwam/images/systems/antec-isk-110-1.jpg" style="display:none;">
							<img src="/wigwam/images/systems/h.png" style="display:none;">
						</div>
						<div class="modal-footer">
							<img src="/wigwam/images/systems/atom2.jpg" onclick="gallery_set_image('0');">
							<img src="/wigwam/images/systems/antec-isk-110-1.jpg" onclick="gallery_set_image('1');">
							<img src="/wigwam/images/systems/h.png" onclick="gallery_set_image('2');">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<form method="get" name="orderform" action="/wigwam/submitconfig.php" class="row" id="form">
				<input type="hidden" name="product" id="product" value="PDT001">
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
								<input type="hidden" name="mobo" id="mobo" value="MBD006">
								<a target="_blank" href="#">MSI X299M Pro Carbon AC (Intel X299 mATX DDR4)</a>
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
										<option value="CPU016"></option>
										<option value="CPU017"></option>
										<option value="CPU018"></option>
										<option value="CPU019"></option>
										<option selected value="CPU020"></option>
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
										<option value="RAM002"></option>
										<option value="RAM003"></option>
									</optgroup>
								</select>
								<span class="input-group-append">
									<a target="_blank" title="Get information on choosing RAM." href="#">
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
							<div class="input-group input-group-sm">
								<select class="form-control" name="gpu" id="gpu" onchange="get_options('gpu'); get_total();">
									<optgroup>
										<option value="GPU028"></option>
										<option value="GPU029"></option>
										<option value="GPU030"></option>
										<option value="GPU031"></option>
									</optgroup>
									<optgroup>
										<option value="GPU013" selected></option>
										<option value="GPU014"></option>
										<option value="GPU032"></option>
										<option value="GPU015"></option>
										<option value="GPU033"></option>
										<option value="GPU016"></option>
										<option value="GPU034"></option>
										<option value="GPU035"></option>
										<option value="GPU017"></option>
									</optgroup>
									<optgroup>
										<option value="GPU022"></option>
										<option value="GPU023"></option>
										<option value="GPU024"></option>
										<option value="GPU036"></option>
										<option value="GPU037"></option>
										<option value="GPU038"></option>
										<option value="GPU039"></option>
										<option value="GPU040"></option>
									</optgroup>
								</select>
								<span class="input-group-append">
									<a target="_blank" title="Get information on choosing a Video Card." href="#">
										<i class="fas fa-question-circle"></i>
									</a>
								</span>
							</div>
							<div class="alert alert-info alert-condensed">
								<p>Many 3D Design applications only officially support NVIDIA Quadro cards, although in some instances (primarily game development and GPU rendering) a GeForce card may be desired.</p>
								<p>Multiple video cards provide additional performance when using GPU-based rendering engines such as V-Ray RT, Octane Render, Iray, Furryball RT, Redshift, etc.</p>
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
										<option value="SND006"></option>
									</optgroup>
									<optgroup>
										<option value="SND002"></option>
										<option value="SND003"></option>
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
								<input type="hidden" name="net" id="net" value="NET001">
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
							Hard Drive
						</label>
						<div class="col-sm-9">
							<div class="input-group input-group-sm">
								<select class="form-control" name="drive1" id="drive1" onchange="get_options('drive1'); get_total();">
									<optgroup>
										<option value="SSD001"></option>
										<option value="SSD002"></option>
										<option value="SSD003"></option>
										<option selected value="SSD004"></option>
										<option value="SSD005"></option>
										<option value="SSD006"></option>
										<option value="SSD007"></option>
										<option value="SSD008"></option>
									</optgroup>
									<optgroup>
										<option value="SSD009"></option>
										<option value="SSD010"></option>
										<option value="SSD011"></option>
										<option value="SSD012"></option>
										<option value="SSD013"></option>
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
							Second Hard Drive
						</label>
						<div class="col-sm-9">
							<div class="input-group input-group-sm">
								<select class="form-control" name="drive2" id="drive2" onchange="get_options('drive2'); get_total();">
									<optgroup>
										<option value="NONE"></option>
										<option value="HDD006"></option>
										<option value="HDD001"></option>
										<option value="HDD007"></option>
										<option value="HDD002"></option>
										<option value="HDD008"></option>
										<option value="HDD003"></option>
										<option value="HDD009"></option>
										<option value="HDD004"></option>
										<option value="HDD010"></option>
										<option value="HDD005"></option>
										<option value="HDD011"></option>
										<option value="HDD012"></option>
										<option value="HDD013"></option>
									</optgroup>
									<optgroup>
										<option value="SSD009"></option>
										<option value="SSD010"></option>
										<option value="SSD011"></option>
										<option value="SSD012"></option>
										<option value="SSD013"></option>
									</optgroup>
								</select>
								<span class="input-group-append">
									<a target="_blank" title="Get information on choosing a Hard Drive." href="#">
										<i class="fas fa-question-circle"></i>
									</a>
								</span>
							</div>
							<div class="alert alert-info alert-condensed">
								Optional long-term storage drive
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">
							Third Hard Drive
						</label>
						<div class="col-sm-9">
							<div class="input-group input-group-sm">
								<select class="form-control" name="drive3" id="drive3" onchange="get_options('drive3'); get_total();">
									<optgroup>
										<option value="NONE"></option>
									</optgroup>
									<optgroup>
										<option value="SSD001"></option>
										<option value="SSD002"></option>
										<option value="SSD003"></option>
										<option value="SSD004"></option>
										<option value="SSD005"></option>
										<option value="SSD006"></option>
										<option value="SSD007"></option>
										<option value="SSD008"></option>
										<option value="SSD015"></option>
										<option value="SSD016"></option>
									</optgroup>
								</select>
								<span class="input-group-append">
									<a target="_blank" title="Get information on choosing a Hard Drive." href="#">
										<i class="fas fa-question-circle"></i>
									</a>
								</span>
							</div>
							<div class="alert alert-info alert-condensed">
								Optional active projects drive
							</div>
						</div>
					</div>
					<input type="hidden" name="drive4" id="drive4" value="NONE">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">
							DVD / Blu-Ray
						</label>
						<div class="col-sm-9">
							<div class="input-group input-group-sm">
								<select class="form-control" name="optic" id="optic" onchange="get_options('optic'); get_total();">
									<optgroup>
										<option value="NONE"></option>
									</optgroup>
									<optgroup>
										<option value="OPT005"></option>
										<option value="OPT001"></option>
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
								<input type="hidden" name="chassis" id="chassis" value="CHS002">
								<a target="_blank" href="#">SilverStone SG10 (black)</a>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">
							Power Supply
						</label>
						<div class="col-sm-9">
							<div class="checkbox">
								<input type="hidden" name="psu" id="psu" value="PSU003">
								<a target="_blank" href="#">EVGA SuperNOVA P2 850W (80 PLUS Platinum)</a>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">
							CPU Cooling
						</label>
						<div class="col-sm-9">
							<div class="checkbox">
								<input type="hidden" name="cooler" id="cooler" value="CLR004">
								<a target="_blank" href="#">Noctua NH-U12DX i4 Socket Cooler</a>
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
										<option value="NONE"></option>
									</optgroup>
									<optgroup>
										<option value="OS001"></option>
										<option selected value="OS002"></option>
									</optgroup>
									<optgroup>
										<option value="OS003"></option>
										<option value="OS004"></option>
									</optgroup>
								</select>
								<span class="input-group-append">
									<a target="_blank" title="Get information on choosing an Operating System." href="#">
										<i class="fas fa-question-circle"></i>
									</a>
								</span>
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

<script src="/wigwam/js/gallery.js"></script>

</html>