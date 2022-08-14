<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<title>Login | WatchZone</title>
</head>
	<body class="pt-4 mt-4">
		<div class="container pt-5 mt-5">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="card border-primary rounded-0">
						<div class="card-body">
							<h1 class="text-center text-uppercase"><span class="font-weight-bold text-primary">Login</span><br> WatchZone</h1>
							<p class="text-center">You are not authorized to access this page at the moment. <br>Try logging in to add or edit products.</p>
							<div class="row">
								<div class="col-md-6 offset-md-3 text-center">
									<form action="<?= base_url('login/signin'); ?>" method="post">
										<div class="form-group">
											<input type="text" name="username" id="username" class="form-control rounded-0" placeholder="Username" required onchange="validateInput()" value="<?= set_value('username'); ?>">
										</div>
										<div class="input-group mb-2">
											<input type="password" name="password" class="form-control rounded-0" id="showPassword" placeholder="Password" required>
											<div class="input-group-prepend" id="showPassword" onclick="showPassword()" title="Show Password">
												<div class="input-group-text">&twoheadrightarrow;</div>
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block rounded-0">Login</button>
										</div>
									</form>
									<?php if($failed = $this->session->flashdata('failed')): ?>
										<div class="alert alert-danger"><?= $failed; ?></div>
									<?php endif; ?>
									<small class="text-center">Copyright &copy; <a href="<?= base_url(); ?>" class="text-primary">WatchZone</a> All rights reserved. Yes, all of them.</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script>
		// Show password function
		function showPassword() {
			let passField = document.getElementById("showPassword");
			if(passField.type === "password"){
				passField.type = "text";
			}else{
				passField.type = "password";
			}
		}
		// validate input
		function validateInput(){
			let username = document.getElementById("username");
			if(username.value.length < 5 || username == " "){
				username.classList.add("is-invalid");
			}else{
				username.classList.remove("is-invalid");
				username.classList.add('is-valid');
			}
		}
	</script>
</html>
