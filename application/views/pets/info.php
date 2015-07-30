<h1><?php echo $name; ?> - Level <?php echo $level; ?></h1>

<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<?php foreach ($stats as $name => $value): ?>
						<tr>
							<td><?php echo ucfirst($name); ?></td>
							<td><?php echo $value; ?></td>
						</tr>
					<?php endforeach; ?>
					<tr>
						<td>Sound</td>
						<td><?php echo $sound; ?></td>
					</tr>
					<tr>
						<td>Colour</td>
						<td><?php echo $colour; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-6">Pet image here!</div>
</div>

<div class="row">
	<div class="col-md-1">Food:</div>
	<div class="col-md-11">
		<div class="progress">
			<div
				class="progress-bar"
				role="progressbar"
				aria-valuenow="<?php echo $food; ?>"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width: <?php echo $food; ?>%;"
				>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-1">Health:</div>
	<div class="col-md-11">
		<div class="progress">
			<div
				class="progress-bar"
				role="progressbar"
				aria-valuenow="<?php echo $hp; ?>"
				aria-valuemin="0"
				aria-valuemax="100"
				style="width: <?php echo $hp; ?>%;"
				>
			</div>
		</div>
	</div>
</div>