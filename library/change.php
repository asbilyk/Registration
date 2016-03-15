<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 13:07
 */
//name changing
if (isset($_POST['name'])) {
    require_once "user_class.php";
    $user = User_class::getObject();

    $name = $_POST['name'];

    $errortext = "<h4 style='text-align:center; color:deepskyblue'> The following errors has been occurred:</h4>";
    $hint = "<h6 style='text-align:center; color:darkslategray;'> Click to hide </h6>";
    //if user name field not empty
    if (!empty($name)) {
        //and if user name belong to that user
        if ($user->findName($name) == 0) {
            //call updating name function in DB
            $action = $user->changeName($name);
            if ($action) {
                $errortext = "<h4 style='text-align:center; color:deepskyblue'>The name was changed'</hr>";
            } else {
                $errortext .= '<br>An error occurred when connecting to the database';
            }
        } else {
            $errortext .= '<br>Invalid name';
        }
    }
    echo($errortext.$hint);
}

if (isset($_POST['password']) && isset($_POST['newpassword'])) {
    require_once "user_class.php";
    $user = User_class::getObject();
    include 'configdb.php';

    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $newpasswordconfirm = $_POST['newpasswordconfirm'];
    $errortext = "<h4 style='text-align:center; color:deepskyblue'> The following errors has been occurred:</h4>";
    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Click to hide </h6>";
    $password=md5($password);

    //if password fields not empty
    if (!empty($password) && !empty($newpassword)&&!empty($newpasswordconfirm) ){
        //if new password was confirmed
        if ($newpassword == $newpasswordconfirm){
            session_start();
            //and if old password belong to that user
            $query=mysqli_query($connection,"SELECT password  FROM users WHERE name='" . $_SESSION['name'] . "'");
            $data = mysqli_fetch_assoc($query);
            if($data['password']==$password){
                $action = $user->changePassword($password, $newpassword);
                if ($action) {
                    $errortext = "<h4 style='text-align:center; color:deepskyblue'>The password was changed'</h4>";
                } else {
                    $errortext .= 'An error occurred when connecting to the database';
                }
            }else {
                $errortext .= 'Wrong password';
            }
        }else {
            $errortext .= 'your passwords doesnt match';
        }
    }else {
        $errortext = 'Empty fields';
    }
    echo($errortext.$hint);
}

if (isset($_POST['email'])) {
    require_once "user_class.php";
    $user = User_class::getObject();
    $email = $_POST['email'];

    $errortext = "<h4 style='text-align:center; color:deepskyblue'> The following errors has been occurred:</h4>";
    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Click to hide </h6>";
    //if user email field not empty
    if (!empty($email)) {
        //and if new user email is valid
        if (preg_match("/^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i", $email)){
            $action = $user->changeEmail($email);
            if ($action) {
                $errortext = "<h4 style='text-align:center; color:deepskyblue'>The email was changed'</hr>";
            } else {
                $errortext .= '<br>An error occurred when connecting to the database';
            }
        }
        echo($errortext.$hint);
    }
}

if (isset($_POST['tel'])) {
    require_once "user_class.php";
    $user = User_class::getObject();
    $tel = $_POST['tel'];

    $errortext = "<h4 style='text-align:center; color:deepskyblue'> The following errors has been occurred:</h4>";
    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Click to hide </h6>";

    if (!empty($tel)) {
        if (preg_match('/^\+?[0-9]{12}$/',$tel)){
            $action = $user->changeTel($tel);
            if ($action) {
                $errortext = "<h4 style='text-align:center; color:deepskyblue'>The telephone number was changed'</hr>";
            } else {
                $errortext .= '<br>An error occurred when connecting to the database';
            }
        }
        echo($errortext.$hint);
    }
}

if (isset($_POST['website'])) {
    require_once "user_class.php";
    $user = User_class::getObject();
    $website = $_POST['website'];

    $errortext = "<h4 style='text-align:center; color:deepskyblue'> The following errors has been happened:</h4>";
    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Click to hide </h6>";
    if (!empty($website)) {
        if (preg_match("/^[-0-9a-z_\.]+\.[a-z]{2,4}$/",$website)){
            $action = $user->changeWebsite($website);
            if ($action) {
                $errortext = "<h4 style='text-align:center; color:deepskyblue'>The website was changed'</hr>";
            } else {
                $errortext .= '<br>An error occurred when connecting to the database';
            }
        }
        echo($errortext.$hint);
    }
}