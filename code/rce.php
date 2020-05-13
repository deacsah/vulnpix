<?php
$output = [];
$cmd = "ping -c 4 ";
if (!empty($_POST['ip'])) {
	exec($cmd.$_POST['ip'], $output);
}
?>
<div class="well">
	<div class="row">
		<div class="col-md-2">
			<p>Execute a ping:</p>
		</div>
		<div class="col-md-10">
			<form method="POST">
				<input type="text" name="ip" class="form-control" />
			</form>
		</div>
	</div>
	<?php if (!empty($output)): ?>
		<hr/>
		<p class="text-center">Command executed: <?php echo $_POST['ip']  ?></p>
		<hr/>
		<div>
			<?php foreach ($output as $line): ?>
				<?php echo $line; ?>
				<br/>
			<?php endforeach ?>
		</div>
	<?php endif ?>
</div>