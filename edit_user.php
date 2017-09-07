<?php
	include("inc/header.php");
?>

	 
	<div class="container">
      <form class="form-signin" name="signup-form" action="includes/addUser.inc.php" method="POST">
        <h2 class="form-signin-heading">Edit User page</h2>

        <label class="sr-only">Firstname</label>
        <input type="text" name="new_fname" class="form-control" value="<?php echo $row["user_id"]; ?>" placeholder="Firstname" autofocus>
       
        <label class="sr-only">Lastname</label>
        <input type="text" name="new_lname" class="form-control" placeholder="Lastname">
        
        <label class="sr-only">Email</label>
        <input type="email" name="new_email" class="form-control" placeholder="Email">

        <label class="sr-only">Username</label>
        <input type="text" name="new_username" class="form-control" placeholder="Username">

        <label class="sr-only">Password</label>
        <input type="password" name="new_pwd" class="form-control" placeholder="Password">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Update</button>
      </form>

    </div>


<?php
	include("inc/footer.php");
?>