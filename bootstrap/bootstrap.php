<?php

// define the constants for directories
define('SYSTEM_DIR', __DIR__ . '/..'); // system directory
define('APP_DIR', SYSTEM_DIR . '/app'); // application directory
define('PUBLIC_DIR', SYSTEM_DIR . '/public'); // public director
define('ROUTES_DIR', SYSTEM_DIR . '/routes'); // route definitions directoryy
define('VENDOR_DIR', SYSTEM_DIR . '/vendor'); // vendor directory

// require_once all necessary libraries
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php'; // database
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php'; // helper functions
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php'; // request handling
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php'; // configuration loading