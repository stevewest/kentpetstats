<div class="row">
	<?php
	foreach ($messages as $message)
	{
		?>
		<div class="alert alert-dismissable alert-<?php echo $message['type']; ?>" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo $message['body']; ?>
		</div>
		<?php
	}
	?>
</div>
