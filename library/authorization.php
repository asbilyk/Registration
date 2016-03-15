<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 12:12
 */
if (isset($_POST['name']) && isset($_POST['password'])){
    require_once "user_class.php";
    $user = User_class::getObject();
    include 'configdb.php';
    $name=$_POST['name'];
    $password = $_POST['password'];



    $error=false;
    $errortext = "<h4 style='text-align:center; color:#6ce1d8'> The following errors has been occurred:</h4>";
    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Click to hide </h6>";
    if (empty($name)) {
        $error = true;
        $errortext .= "<br> Please fill in the name field.";
    }
    if (empty($password)){
        $error = true;
        $errortext .= "<br> Please fill in the password field.";
    }
    if ($error){
        echo ($errortext.$hint);
    } else {
        $query=mysqli_query($connection,"SELECT uid, password, status  FROM users WHERE name='$name'");
        if(mysqli_num_rows($query) == 1){
            $data = mysqli_fetch_assoc($query);
            if($data['password'] == md5($password)){
                if($data['status'] == 1){
                    $errortext = "<br> <h2>Succesfull.</h2>";

                    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Please reload your page </h6>";
                    header("Location: change.php");
                    $user->login($name, $password);
                }else {
                    $errortext .= "<br> Your account is not activated.";
                }
            }else {
                $errortext .= "<br> Wrong password.";
            }
        }else {
            $errortext .="<br> Invalid name.";
        }
        echo ($errortext.$hint);
    }


}