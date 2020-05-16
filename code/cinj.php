<?php
$output = [];
$cmd = "ping -c 4 ";
if (!empty($_POST['ip'])) {
	exec($cmd.$_POST['ip'], $output);
}
?>
<div class="well">
	<form method="POST">
		<div class="row">
			<div class="col-md-2">
				<p>Execute a ping:</p>
			</div>
			<div class="col-md-8">
				<input type="text" name="ip" class="form-control" />
			</div>
			<div class="col-md-2">
				<input type="submit" name="submit" class="btn btn-info" value="Execute" />
			</div>
		</div>
	</form>
	<?php if (!empty($_POST['ip'])): ?>
		<hr/>
		<p class="text-center">Command executed: <?php echo $cmd.$_POST['ip']  ?></p>
		<hr/>
		<div>
			<?php foreach ($output as $line): ?>
				<?php echo $line; ?>
				<br/>
			<?php endforeach ?>
		</div>
	<?php endif ?>
</div>