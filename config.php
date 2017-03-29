<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

define('APP_ID', '*******');
define('APP_SECRET', '*******');
define('APP_VERSION', 'v2.8');

define('DSN', 'mysql:host=localhost;dbname=dotinstall_fb_connect_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'htmr821');

define('CALlBACK_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/login.php');

session_start();

require_once(__DIR__ . '/functions.php');
