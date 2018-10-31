<?php 
if (!empty($_SESSION['loggedIn'])) {
	$success = 'You are already logged in!';
} else {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
		$prepared = $mysqli->prepare($sql);
		$prepared->execute();
		$result = $prepared->get_result();
		if ($result->num_rows > 0) {
			$success = "Success! You are logged in as $username";
			$_SESSION['loggedIn'] = $username;
		} else {
			$error = "Login failed";
		}
	}
}
?>
<div class="row">
	<div class="col-lg-4 offset-lg-4">
		<?php if (!empty($success)): ?>
			<div class="alert alert-success" style="margin-top: 20px"><?php echo $success ?></div>
		<?php endif ?>
		<?php if (!empty($error)): ?>
			<div class="alert alert-danger" style="margin-top: 20px"><?php echo $error ?></div>
		<?php endif ?>
		<form method="POST" name="loginForm">
			<div class="well">	
				<div class="form-group field-loginform-username required has-success">
					<label class="control-label" for="loginform-username">Username</label>
					<input id="loginform-username" class="form-control" name="username" autofocus="" required="true" aria-required="true" aria-invalid="false" type="text">
				</div>
				<div class="form-group field-loginform-password required">
					<label class="control-label" for="loginform-password">Password</label>
					<input id="loginform-password" class="form-control" name="password" value="" required="true" aria-required="true" type="password">
				</div>
				<div class="text-center" style="width:305px; margin: 0 auto;">
					<button type="submit" class="btn btn-md btn-success" name="login-button">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>
