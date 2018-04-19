<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale =1.0" />
	<title>
		<?php echo SITENAME; ?>
	</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo URLROOT?>/Assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo URLROOT?>/Assets/css/sweetalert.css" />
	<script src="<?php echo URLROOT; ?>/Assets/js/sweetalert.js"></script>
	

</head>

<body>

	<div class="wrapper-page">
	
		<div class="text-center">
			<a href="index.html" class="logo-lg">
				<i class="fa fa-book"></i>
				<span>Wyred Learning</span>
			</a>
		</div>

		<form class="form-horizontal m-t-20" action="<?php echo URLROOT; ?>/AccountController/userRegister" method="post">
			<div class="form-group row">
				<div class="col-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<input class="form-control <?php echo (!empty($data['firstNameError'])) ? 'is-invalid' : '' ?>" type="text" name="firstName" required="" placeholder="First Name" value="<?php echo $data['firstName'] ; ?>" />
						<span class="invalid-feedback">
							<?php echo $data['firstNameError']?>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<input class="form-control <?php echo (!empty($data['lastNameError'])) ? 'is-invalid' : '' ?>" type="text" name="lastName" required="" placeholder="Last Name" value="<?php echo $data['lastName'] ; ?>" />
						<span class="invalid-feedback">
							<?php echo $data['lastNameError']?>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-envelope"></i>
							</span>
						</div>
						<input class="form-control <?php echo (!empty($data['emailError'])) ? 'is-invalid' : '' ?>" type="email" name="email" required="" placeholder="Email" value="<?php echo $data['email'] ; ?>" />
						<span class="invalid-feedback">
							<?php echo $data['emailError']?>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-key"></i>
							</span>
						</div>
						<input class="form-control <?php echo (!empty($data['passwordError'])) ? 'is-invalid' : '' ?>" type="password" name="password" required="" placeholder="Password" value="<?php echo $data['password'] ; ?>" />
						<span class="invalid-feedback">
							<?php echo $data['passwordError']?>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-check-square"></i>
							</span>
						</div>
						<input class="form-control <?php echo (!empty($data['confirmPasswordError'])) ? 'is-invalid' : '' ?>" type="password" name="confirmPassword" required="" placeholder="Confirm Password" value="<?php echo $data['confirmPasswordError'] ; ?>" />
						<span class="invalid-feedback">
							<?php echo $data['confirmPasswordError']?>
						</span>
					</div>
				</div>
			</div>
			<div class="form-group text-right m-t-20">
				<div class="col-xs-12">
					<button class="btn btn-primary btn-custom waves-effect waves-light w-md" type="submit">Register</button>
				</div>
			</div>


			<div class="form-group row m-t-30">
				<div class="col-12 text-center">
					<a href="<?php echo URLROOT ?>/AccountController/userLogin" class="text-muted">Already have account?</a>
				</div>
			</div>

		</form>
	</div>



	<!--<div class="footer .text-secondary ">
      <div class="footer-copyright py-3 text-center ">
            � 2018 Copyright

        </div>
    </div>-->
	<!-- Footer -->


	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>