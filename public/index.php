<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Accept, Content-Type');
  
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') { // pre-flight request
    exit;
}

chdir(dirname(__DIR__));

if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

require 'init_autoloader.php';
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
