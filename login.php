<?php
   ob_start();
   session_start();
?>

<?php
	include("inc/header.php");
?>

<div class = "container form-signin">
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['uid']) 
               && !empty($_POST['pwd'])) {
				
               if ($_POST['uid'] == 'steniel' && 
                  $_POST['pwd'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['uid'] = 'steniel';
                  
                  echo 'You have entered valid username and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
 </div>
	 
	<div class="container">
      <form class="form-signin" name="myForm" onsubmit="return validateForm()" 
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">
      	<!-- error message -->
      	<h4 class = "form-signin-heading"><?php echo $msg; ?></h4>

        <h2 class="form-signin-heading">Login Page with Javascript function  </h2>

        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" name="uid" class="form-control" placeholder="Username/email" autofocus>
       
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
          <div>
            <a href="signup.php">Sign up</a>
          </div>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
      </form>

    </div>

 <script>
	function validateForm() {
	    var uid = document.forms["myForm"]["uid"].value;
	    var pwd = document.forms["myForm"]["pwd"].value;
	    if (uid == "") {
	        alert("Username must be filled out");
	        return false;
	    }
	    if (pwd == "") {
	        alert("Password must be filled out");
	        return false;
	    }
	    // else{
	    // 	alert("Successfully Login");
	    // }
	}
</script>

<?php
	include("inc/footer.php");
?>