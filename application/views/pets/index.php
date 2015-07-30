<div>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<?php foreach ($owner['pets'] as $pet): ?>
		<li role="presentation">
			<a href="#pet_<?php echo $pet['_id']; ?>"
			   role="tab"
			   data-toggle="tab">
				<?php echo $pet['name']; ?>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<?php foreach ($owner['pets'] as $pet): ?>
			<div role="tabpanel"
				 class="tab-pane"
				 id="pet_<?php echo $pet['_id']; ?>"
				 aria-controls="pet_<?php echo $pet['_id']; ?>"
				>
				<?php echo View::forge('pets/info', $pet) ?>
			</div>
		<?php endforeach; ?>
	</div>

</div>
