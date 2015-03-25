<?php

// This is the database connection configuration.
return array(

	'connectionString' => 'mysql:host=localhost;dbname=alcoholic',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '1',
	'charset' => 'utf8',

    // включаем профайлер
    'enableProfiling'=>true,
    // показываем значения параметров
    'enableParamLogging' => true,

);
