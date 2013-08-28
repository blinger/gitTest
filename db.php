<?php

//database connection

define('DB_HOST', 'localhost');
define('DB_USER', 'yabish');
define('DB_PASSWORD', 'mamoru1');
define('DB_SCHEMA', 'yabish');
define('DB_TBL_PREFIX', 'DB_');

//establigh connection to db
if (!$GLOBALS['DB'] = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)) {
	# code...
	die('Error: Unable to connect');
}
if (!mysql_select_db(DB_SCHEMA, $GLOBALS['DB'])) {
	# code...
	mysql_close($GLOBALS['DB']);
	die('Error: Unable to select schema');
}

?>