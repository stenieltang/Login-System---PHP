 <?php
 	include 'includes/dbh.php';
	    if(isset($_GET['delete'])){
	     $delete_id = $_GET['delete'];

	     $sql = "DELETE FROM users WHERE user_id='$delete_id'";
	     $result = mysqli_query($conn, $sql);
	     		
	     // mysqli_query($conn, "DELETE FROM users WHERE user_id='$delete_id'");

	     header("Location: users.php?msg=success");

	     	}
  ?>