<div class="well">
	<p>Include a page:</p>
	<ul>
		<li><a href="index.php?page=lfi.php&info=lfi-info">LFI info</a></li>
		<li><a href="index.php?page=lfi.php&info=rfi-info">RFI info</a></li>
	</ul>
	<?php if (!empty($_GET['info'])): ?>
		<div class="info">
			<?php include($_GET['info'].".php"); ?>
		</div>
	<?php endif ?>
</div>