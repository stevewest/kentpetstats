<ul class="nav nav-sidebar">
	<li class="<?php echo ($_SERVER['REQUEST_URI'] == '/')?'active':''; ?>">
		<a href="<?php echo Uri::create('/'); ?>">Overview</a>
	</li>
</ul>
<ul class="nav nav-sidebar">
	<?php foreach ($owners as $owner): ?>
	<li class="<?php echo ($owner['active'])? 'active':''; ?>">
		<a href="<?php echo Uri::create('pets/'.$owner['_id']); ?>"><?php echo $owner['_id']; ?></a>
	</li>
	<?php endforeach; ?>
</ul>
