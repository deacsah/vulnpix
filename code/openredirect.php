<div class="well">
	<p>Redirect using GET parameter 'url'</p>
	<?php if (!empty($_GET['url'])): ?>
		<p>Redirecting to <?php echo $_GET['url'] ?></p>
		<script>
			document.location = "<?php echo $_GET['url']; ?>";
		</script>
	<?php endif ?>
</div>