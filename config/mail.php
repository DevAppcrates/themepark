<?php

return array(

	'driver' => 'smtp',
	'host' => 'mail.themeparkalerts.com',
	'port' => 587,
	'from' => array(
		'address' => 'alert@themeparkalerts.com',
		'name' => 'ThemeParkAlerts-Contact Center',
	),
	'encryption' => 'tls',
	'username' => 'alert@themeparkalerts.com',
	'password' => 'Abcd!234',
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => false,

);
