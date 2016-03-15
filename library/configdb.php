<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 13:57
 */
define('DB_SERVER', 'localhost');// change to domain or IP of your DB server.
define('DB_USERNAME', 'root');// change to your user
define('DB_PASSWORD', ''); //paste the password of your database user.
define('DB_DATABASE', 'test'); //create previously database 'test' or change this name to your!
$connection = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$base_url='localhost/My_reg_app/';