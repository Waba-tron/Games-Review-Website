<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Link CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url('application/css/style.css')?>" rel="stylesheet" type="text/css" />

	<title><?php echo $title?></title>
	<!-- These classes onlywork if you attach Bootstrap. -->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">

		<a class="navbar-brand" href="#">Game Reviews</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav mr-auto">


				<li class="nav-item">

					<a class="nav-link" href=<?php echo base_url() ."index.php/home" ?>>Home</a>
				</li>

				<?php 

					//Toggle navigation if the user is not logged in display ability for the user to login

				if($show){
					echo '<li class="nav-item"> <a class="nav-link" href= "'.base_url() .'index.php/login">Login</a></li>';
				}
				else{

					//Toggle navigation if the user logged in display link to allow user to view their account or logout
					echo '<li class="nav-item"> <a class="nav-link" href= "'.base_url() .'index.php/logout">Logout</a></li>';
					echo '<li class="nav-item"> <a class="nav-link" href= "'.base_url() .'index.php/account">My account</a></li>';
				}
  
      			?>

			</ul>

			<!--
				Display search bar in navigation
			-->
			<form class="form-inline my-2 my-lg-0" action=<?php echo base_url()."index.php/home/searchgame"?> method="POST">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" name="searchgamereview">
				<button class="btn btn-success" type="submit">Search</button>
			</form>
			
		</div>
	</nav>
</head>

<body>
