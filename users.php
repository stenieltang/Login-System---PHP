<?php
  include("inc/header.php");
?>

<div class="container">
	<div class="row">
		<div class="col">
	      <h2 class="text-left title-member">Users Page</h2>
	    </div>
	    <div class="col">
	      <a href="add_user.php" class="btn btn-primary add-user">Add User</a>
	    </div>

	</div>
	 
	     <table class="table table-hover table-inverse">
	     	 <thead class="thead-inverse">
	     		<tr>
		     		<th>First Name</th>
		     		<th>Last Name</th>
		     		<th>Email Address</th>
		     		<th>Username</th>
		     		<th>Action</th>
		     	</tr>
	     	</thead>

	     	
	     	<?php
	     		include 'includes/dbh.php';

	     		$sql = "SELECT * FROM users";
	     		$result = mysqli_query($conn, $sql);
	     		if(mysqli_num_rows($result) > 0) {
	     			while ($row = mysqli_fetch_assoc($result)) {

	     	?>
	     			<tbody class="text-left">
	     				<tr>
		     				<td><?php echo $row['user_first']; ?></td>
		     				<td><?php echo $row['user_last']; ?></td>
		     				<td><?php echo $row['user_email']; ?></td>
		     				<td><?php echo $row['user_uid']; ?></td>
		     				<td>	     					
						        <a href='edit.php?edit=$row[user_id];'>Edit</a>	
						        <a href="#">Delete</a>					    
		     				</td>
		     			</tr>
	     			</tbody>

	     	<?php	
	     			}
	     		} else {
	     			echo "there are no data";
	     		}
	     	?>

	     		
	     	
	    	 </tbody>
	     </table>
    
</div>


<?php
  include("inc/footer.php");
?>