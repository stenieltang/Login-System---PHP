<?php
	include("inc/header.php");
?>
	 
	<div class="container">
      <form class="form-signin" name="signup-form" action="includes/addUser.inc.php" method="POST">
        <h2 class="form-signin-heading">Add User page</h2>

        <label class="sr-only">Firstname</label>
        <input type="text" name="fname" class="form-control" placeholder="Firstname" autofocus>
       
        <label class="sr-only">Lastname</label>
        <input type="text" name="lname" class="form-control" placeholder="Lastname">
        
        <label class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email">

        <label class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username">

        <label class="sr-only">Password</label>
        <input type="password" name="pwd" class="form-control" placeholder="Password">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add</button>
      </form>

    </div>


<?php
	include("inc/footer.php");
?>