<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 15:00
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once 'smarty/libs/Smarty.class.php';
require_once "library/user_class.php";
$smarty = new Smarty();
$user = User_class::getObject();

$smarty->template_dir = 'smarty/templates/';
$smarty->compile_dir = 'smarty/templates_c/';
$smarty->config_dir = 'smarty/configs/';
$smarty->cache_dir = 'smarty/cache/';

// if user authorized - show him user room, if not show him main page

if ($user->isAuth()) {
    $smarty->display('user.tpl');
} else {
    $smarty->display('index.tpl');
}
