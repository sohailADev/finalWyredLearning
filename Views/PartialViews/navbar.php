<?php
/**
 * Created by PhpStorm.
 * Users: sohail
 * Date: 1/25/2018
 * Time: 3:03 PM
 */?>



<nav class="navbar navbar-expand-lg  p-0">
	<div class="container">
		<a class="navbar-brand" href="<?php echo URLROOT?>">
			<?php echo SITENAME?>
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item px-2">
					<a href="index.html" class="nav-link active">Dashboard</a>
				</li>
				<li class="nav-item px-2">
					<a href="<?php echo URLROOT?>/Posts/index" class="nav-link">Posts</a>
				</li>
				<li class="nav-item px-2">
					<a href="categories.html" class="nav-link">Categories</a>
				</li>
				<li class="nav-item px-2">
					<a href="users.html" class="nav-link">Users</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown mr-3">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user"></i> Welcome Brad
					</a>
					<div class="dropdown-menu">
						<a href="profile.html" class="dropdown-item">
							<i class="fa fa-user-circle"></i> Profile
						</a>
						<a href="settings.html" class="dropdown-item">
							<i class="fa fa-gear"></i> Settings
						</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="<?php echo URLROOT?>/AccountController/userLogout" class="nav-link">
						<i class="fa fa-user-times"></i> Logout
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo URLROOT ?>/AccountController/userRegister">
						<i class="fa fa-user-plus"></i> Register
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URLROOT ?>/AccountController/userLogin">
						<i class="fa fa-sign-in"></i> Login
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>



<!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
	<div class="container">
		<a class="navbar-brand" href="<?php echo URLROOT?>">
			<?php echo SITENAME?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo URLROOT?>">
						Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URLROOT?>/Posts/index">Tutorials</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto ">
				<?php if(isset($_SESSION['userId'])):  ?>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo URLROOT ?>/Posts/index">
						Welcome    <?php echo $_SESSION['userName'];  ?>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URLROOT?>/Users/logout">Log out</a>
				</li>
				<?php else:  ?>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo URLROOT ?>/Users/register">Register </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URLROOT?>/Users/Login">Login</a>
				</li>
				<?php endif;  ?>
			</ul>
		</div>
	</div>
</nav>-->
