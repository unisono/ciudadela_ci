<?php

$config['opauth_twitter'] = array(
	'path' => '/',
	'callback_url' => 'callback',
	'security_salt' => 'LDFmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',
	'callback_transport'	=> 'session',
	'Strategy' => array(
		'Twitter' => array(
		    'key' => '',
		    'secret' => ''
		)
	)
);
$config['opauth_facebook'] = array(
    
    'Facebook' => array(
        'app_id' => '550808281',
        'app_secret' => 'APP_SECRET'
    ),

);

?>