<?php

return [
	'security' => [
		'uri_filter' => ['htmlentities'],
		'output_filter' => ['Security::htmlentities'],
		'whitelisted_classes' => [
			'Fuel\\Core\\Presenter',
			'Fuel\\Core\\Response',
			'Fuel\\Core\\View',
			'Fuel\\Core\\ViewModel',
			'Closure',
		],
	],
	'controller_prefix' => 'Controller\\',
	'package_paths' => [
		PKGPATH
	],
	'always_load' => [
		'packages' => [
			'auth',
			'orm'
		],
	],
];
