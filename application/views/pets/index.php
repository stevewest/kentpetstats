<div>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<?php $first = true; ?>
		<?php foreach ($owner['pets'] as $pet): ?>
		<li role="presentation" class="<?php echo ($first)?'active':'';?>">
			<a href="#pet_<?php echo $pet['name_slug']; ?>"
			   role="tab"
			   data-toggle="tab">
				<?php echo $pet['name']; ?>
			</a>
		</li>
			<?php $first = false; ?>
		<?php endforeach; ?>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<?php $first = true; ?>
		<?php foreach ($owner['pets'] as $pet): ?>
			<div role="tabpanel"
				 class="tab-pane <?php echo ($first)?'active':'';?>"
				 id="pet_<?php echo $pet['name_slug']; ?>"
				 aria-controls="pet_<?php echo $pet['name_slug']; ?>"
				>
				<?php echo View::forge('pets/info', $pet) ?>
			</div>
			<?php $first = false; ?>
		<?php endforeach; ?>
	</div>

</div>
