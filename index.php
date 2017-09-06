<?php
  include("inc/header.php");
?>

<div class="container">
  
      <form class="form-signin" name="myForm" action="includes/login.inc.php" method="post">

        <h4 class = "form-signin-heading" style="color:red">
        <?php if(isset($_GET['login'])) {
                echo $_GET['login'];
                   }

                  ?>
        </h4>
                
        <h2 class="form-signin-heading">Please sign in</h2>

        <label for="uid" class="sr-only">Username</label>
        <input type="text" id="inputEmail" name="uid" class="form-control" placeholder="Username/email" autofocus>
       
        <label for="pwd" class="sr-only">Password</label>
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

 
<?php
  include("inc/footer.php");
?>
