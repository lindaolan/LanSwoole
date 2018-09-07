<?php
define("BIN_DIR", __DIR__);
define("APP_DIR", BIN_DIR . "/..");
define('FW_ROOT', APP_DIR . "/..");

require_once FW_ROOT . '/vendor/autoload.php';

date_default_timezone_set('Asia/Shanghai');
Framework\Server\Start::run();