<?php
declare(strict_types=1);
define('APP_DIR', __DIR__ . '/');


require_once APP_DIR . 'ErrorLog.php';
require_once APP_DIR . 'UserLogin.php';
require_once APP_DIR . 'UserRename.php';
require_once APP_DIR . 'UserRegister.php';

try {
    $login = new HW_9_trait\UserLogin();
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

if (isset($login)) {
    $login->login('PAVLO');
}