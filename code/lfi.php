<div class="well">
	<p>Include a page:</p>
	<ul>
		<li><a href="index.php?page=lfi.php&info=lfi-info.php">LFI info</a></li>
		<li><a href="index.php?page=lfi.php&info=rfi-info.php">RFI info</a></li>
	</ul>
	<?php if (!empty($_GET['info'])): ?>
		<?php $includePage = $_GET['info']; ?>
		<hr/>
		<p class="text-center">Included file: <?php echo $includePage  ?></p>
		<hr/>
		<?php
			include($includePage); 
		?>
	<?php endif ?>
</div>