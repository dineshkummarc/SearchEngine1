<?php
error_reporting(0);
define('FIR', true);

define('DB_HOST', 'localhost');
define('DB_USER', 'searchengine');
define('DB_NAME', 'root');
define('DB_PASS', '12345');

define('URL_PATH', 'https://localhost');

define('PUBLIC_PATH', 'public');
define('THEME_PATH', 'themes');
define('STORAGE_PATH', 'storage');
define('UPLOADS_PATH', 'uploads');

define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH).'/');