<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/calc.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand navbar-dark bg-dark">

			<?php
				if(isset($_SESSION['u_id'])) {
					echo ' <a class="navbar-brand" href="#">Welcome</a>
						      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
						        <span class="navbar-toggler-icon"></span>
						      </button>

						      <div class="collapse navbar-collapse" id="navbarsExample02">
						        <ul class="navbar-nav mr-auto">
						          <li class="nav-item active">
						            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" href="calculator.php">Calculator</a>
						          </li>
						           <li class="nav-item">
						            <a class="nav-link" href="#">Link</a>
						          </li>
						        </ul>
						        <form class="form-inline my-2 my-md-0" action="includes/logout.inc.php" method="POST">
						          <button class="btn-logout" type="submit" name="logout"> Logout </button>
						        </form>
						      </div>';

				} else {
					echo '<a class="navbar-brand" href="#">Welcome</a>
						      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
						        <span class="navbar-toggler-icon"></span>
						      </button>

						      <div class="collapse navbar-collapse" id="navbarsExample02">
						        <ul class="navbar-nav mr-auto">
						          <li class="nav-item active">
						            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						          </li>          
						        </ul>
						      </div>';
				}
			?>

	     
	    </nav>
	</header>




<!--  NEW STYLE OF NAVBAR -->

<!-- // <?php
// 	session_start();
// ?>

// <!DOCTYPE html>
// <html>
// <head>
// 	<meta charset="utf-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
// 	<title></title>
// 	<link rel="stylesheet" type="text/css" href="css/style.css">
// 	<link rel="stylesheet" type="text/css" href="css/nav.css">
// 	<link rel="stylesheet" type="text/css" href="css/calc.css">
// 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
// </head>
// <body>
// 	<header>
// 		<nav class="navbar navbar-expand navbar-dark bg-dark">
// 	      <a class="navbar-brand" href="#">Always expand</a>
// 	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
// 	        <span class="navbar-toggler-icon"></span>
// 	      </button>

// 	      <div class="collapse navbar-collapse" id="navbarsExample02">
// 	        <ul class="navbar-nav mr-auto">
// 	          <li class="nav-item active">
// 	            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
// 	          </li>
// 	          <li class="nav-item">
// 	            <a class="nav-link" href="calculator.php">Calculator</a>
// 	          </li>
// 	           <li class="nav-item">
// 	            <a class="nav-link" href="#">Link</a>
// 	          </li>
// 	        </ul>
// 	        <form class="form-inline my-2 my-md-0">
// 	          <input class="form-control" type="text" placeholder="Search">
// 	        </form>
// 	      </div>
// 	    </nav>
// 	</header> -->