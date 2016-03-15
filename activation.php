<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 15:32
 */
include 'library/configdb.php';;
$errortext='';
//Getting code with htacces
if(!empty($_GET['code']) && isset($_GET['code'])){
    $code=mysql_real_escape_string($_GET['code']);
    //sending code from htacces to activation code from database
    $c=mysqli_query($connection,"SELECT uid FROM users WHERE activation='$code'");
    // Code validation, if that is the same activation code in database
    if(mysqli_num_rows($c) > 0) {
        $count=mysqli_query($connection,"SELECT uid FROM users WHERE activation='$code' and status='0'");
        //if the activation status is '1' already
        if(mysqli_num_rows($count) == 1) {
            mysqli_query($connection,"UPDATE users SET status='1' WHERE activation='$code'");
            $errortext="Thank you! Your account is activated";
        }
        else{
            $errortext ="Your account is already active";
        }
    }
    else{
        $errortext ="Something wrong with activation code.";
    }
    echo "<br><br><h1 style='text-align:center'>$errortext</h1><h2 style='text-align:center'><br><a href = 'index.php'>Back</a></h2>";
}