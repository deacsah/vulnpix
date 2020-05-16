<div class="well">
	<form method="POST">
		<div class="form-group field-loginform-username required has-success">
			<input type="text" name="search" class="form-control" placeholder="Search" />
			<br/>
			<input type="submit" name="submit" class="btn btn-info" value="Search" />
		</div>
	</form>
	<?php if (!empty($_POST['search'])): ?>
		Results for: <strong><?php echo $_POST['search'] ?></strong>
		<br/>
		<em>No results found</em>
	<?php endif ?>
</div>
