<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 14:18
 */
if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['confpassword']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['website'])) {
    include_once 'configdb.php';

    $name=$_POST['name'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $website = $_POST['website'];

    $error=false;
    $errortext = "<h4 style='text-align:center; color:#e1924b'> The following errors has been occurred:</h4>";
    $hint = "<h6 style='text-align:center; color:#1d1d1d;'> Click to hide </h6>";
    if (empty($name)) {
        $error = true;
        $errortext .= "<br> Please fill in the name field.";
    }

    if (empty($password)){
        $error = true;
        $errortext .= "<br> Please fill in the password field.";
    }

    if (empty($confpassword)){
        $error = true;
        $errortext .= " <br>Please fill in the password-confirmation field.";
    } else {
        if ($password != $confpassword){
            $error = true;
            $errortext .= " <br>Enter valid password confirmation.";
        }
    }

    if (empty($email)){
        $error = true;
        $errortext .= "<br> Please fill in the email field.";
    } else {
        if (!preg_match("/^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,4}$/i",$email)){
            $error = true;
            $errortext .= " <br>Enter valid email.";
        }
    }

    if (empty($tel)){
        $error = true;
        $errortext .= " <br>Please fill in the phone field.";
    } else {
        if (!preg_match('/^\+?[0-9]{12}$/',$tel)){
            $error = true;
            $errortext .= "<br> Enter valid phone number.";
        }
    }

    if (empty($website)){
        $error = true;
        $errortext .= " <br>Please fill in the website field.";
    } else {
        if (!preg_match("/^[-0-9a-z_\.]+\.[a-z]{2,4}$/",$website)){
            $error = true;
            $errortext .= " <br>Enter valid website.";
        }
    }
    if ($error){
        echo ($errortext.$hint);
    } else {
        $password=md5($password); // Encrypted password
        $activation=md5($email.time()); // Encrypted email+timestamp
        //Checking the same names
        $countname=mysqli_query($connection,"SELECT uid FROM users WHERE name='$name'");
        if(mysqli_num_rows($countname) < 1){
            //Checking the same emails
            $countemail=mysqli_query($connection,"SELECT uid FROM users WHERE email='$email'");
            if(mysqli_num_rows($countemail) < 1){
                //Insert information into database
                mysqli_query($connection,"INSERT INTO users(name,email,tel,website,password,activation) VALUES('$name','$email','$tel','$website','$password','$activation');");
                //Sending activation letter
                $to=$email;
                $subject="Email verification";
                $header = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $message='Hello,' .$name. '! This is activation message. Please verify your email and get started using your Website account.  '.$base_url.'activation/'.$activation;
                $message = $header . $message;
                mail($to,$subject,$message); //run sendmail agent in your server before using this function/
                $errortext= "<h3>Registration successful, please activate email.</h3>";

            }
            else{
                $errortext= '<h3>This email is already exist, please try another one.</h3>';
            }
        }
        else {
            $errortext= '<h3>This name is already exist, please try another one.</h3>';
        }
        echo ($errortext.$hint);
    }
}
    ?>