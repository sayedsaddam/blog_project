<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<title><?= $title; ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>" title="Agro Labs - Government of Khyber Pakhtunkhwa">WatchZone</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('products'); ?>">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about'); ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('blog'); ?>">Articles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-danger font-weight-bold" href="<?= base_url('losers'); ?>">Losers</a>
					</li>
				</ul>
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="" title="Create an account if you don't have one?">Register</a>
					</li>
					<li class="nav-item">
						<?php if($this->session->userdata('username')): ?>
							<a class="nav-link" href="<?= base_url('login/signout'); ?>" title="Login to publish a story...">Logout</a>
						<?php else: ?>
							<a class="nav-link" href="<?= base_url('login'); ?>" title="Terminate session and logout...">Login</a>
						<?php endif; ?>
					</li>
				</ul>
			</div>
		</div>
		
	</nav>
	
