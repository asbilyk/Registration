<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 14:04
 */
session_start();
unset($_SESSION["name"]);
unset($_SESSION["password"]);
header("Location: ../index.php");
exit;