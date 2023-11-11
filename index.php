<?php
require_once __DIR__.'/app/controlers/UserControler.php';
require_once __DIR__.'/app/models/UserModel.php';
require_once __DIR__.'/config/config.php';
require_once __DIR__.'/lib/DB/MysqliDb.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$config = require 'config/config.php';
$db = new MysqliDb (
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
use model\UserModel;
$model = new UserModel($db);
use controler\UserController;
$controller = new UserController($model);

if (method_exists($controller, $action)) 
// هنا الانديكس وظيفتها ان توجه العمل على أي تابع بالكونترولر وضمن الكونترولر اقوم بتضمين احد ملفات الفيو اللازمة للفانكشن
{   $controller->$action();
} else {
    echo "Action not Found";
}

//** */