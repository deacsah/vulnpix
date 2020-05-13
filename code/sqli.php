<?php
$user_id = !empty($_GET['name']) ? $_GET['name'] : 'admin';
$sql = "SELECT * FROM user WHERE username = '$user_id'";
$prepared = $mysqli->prepare($sql);
$prepared->execute();
$result = $prepared->get_result();
?>
<div class="well">
	<p>Click on a user to view his/her information:</p>
	<ul>
		<li><a href="index.php?page=sqli.php&name=admin">Admin</a></li>
		<li><a href="index.php?page=sqli.php&name=user1">User 1</a></li>
		<li><a href="index.php?page=sqli.php&name=user2">User 2</a></li>
	</ul>
	<?php if (!empty($_GET['name'])): ?>
		<hr/>
		<p class="text-center">Query executed: <?php echo $sql  ?></p>
		<hr/>
		<table class="table table-bordered">
			<tr>
				<th>Username</th>
				<th>Is admin?</th>
			</tr>
			<?php 
				while ($row = $result->fetch_object()) {
					echo "<tr><td>".$row->username."</td><td>".$row->admin."</td></tr>";
				}
			?>
		</table>
	<?php endif ?>
</div>