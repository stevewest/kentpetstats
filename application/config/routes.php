<?php
return array(
	'_root_'  => 'dashboard/index',
	'_404_'   => 'dashboard/notfound',

	'pets/image/(:segment)' => 'pets/image/$1',
	'pets/(:segment)' => 'pets/index/$1',
);
