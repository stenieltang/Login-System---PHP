<?php
	include_once 'inc/header.php'
?>
	 
	<div class="container">
      <form class="form-signin" action="includes/signup.inc.php" method="POST">
        <h2 class="form-signin-heading">Sign up page</h2>

        <label class="sr-only">Firstname</label>
        <input type="text" name="fname" class="form-control" placeholder="Firstname" required autofocus>
       
        <label class="sr-only">Lastname</label>
        <input type="text" name="lname" class="form-control" placeholder="Lastname" required>
        
        <label class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required>

        <label class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required>

        <label class="sr-only">Password</label>
        <input type="password" name="pwd" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
      </form>

    </div>


<?php
	include_once 'inc/footer.php'
?>