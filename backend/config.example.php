<?php

// Example of config file, add your own values here, all are imaginary

$config = array(

	'stripe_sk' => 'sk_test_hoigesrjgoisrhgilgjrsfjs',
	'stripe_pk' => 'pk_test_hoigesrjgoisrhgilgjrsfjs',

	// code name used for the entire site
	'os-codename' => 'freya',

	// salt enrcytion decryption keys 32bit length
	'salt' => '9iwjwj455aufj4669gkfmdfkl244h45t',

	//dsn for PDO acces mysql example
	'stripe_cusid_dsn' => 'sqlite:' . __DIR__ . '/../data/stripe_cusid.db',

	//twitter integration api keys
	'twitter_consumer_key' => 'test_ckey',
	'twitter_consumer_secret' => 'test_csecret',
	'twitter_access_token' => 'test_atoken',
	'twitter_access_secret' => 'test_asecret',

	//download links from hosting web site
	'sourceforge_iso_i386' => 'http://sourceforge.net/projects/elementaryos/files/stable/elementaryos-freya-i386.20150411.iso/download',
	'sourceforge_iso_amd64' => 'http://sourceforge.net/projects/elementaryos/files/stable/elementaryos-freya-amd64.20150411.iso/download',

);
