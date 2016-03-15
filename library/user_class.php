<?php
/**
 * Created by PhpStorm.
 * User: Алекс
 * Date: 15.03.2016
 * Time: 13:13
 */
class User_class {
    private $db;
    private static $user = null;


    private function __construct() {
        $this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $this->db->query("SET NAMES 'utf8'");
    }

    public static function getObject() {
        require_once "configdb.php";
        if (self::$user === null)
            self::$user = new User_class();
        return self::$user;
    }
    //if user password the same password from DB
    private function checkUser($name, $password) {
        $result_set = $this->db->query("SELECT password FROM users WHERE name = '$name'");
        $user = $result_set->fetch_assoc();
        $result_set->close();
        if (!$user) {
            return false;
        } else {
            return $user["password"] === $password;
        }
    }
    //if user authorized
    public function isAuth() {
        session_start();
        $name = $_SESSION["name"];
        $password = $_SESSION["password"];
        return $this->checkUser($name, $password);
    }
    //if everything is ok - start session for that user
    public function login($name, $password) {
        $password = md5($password);
        if ($this->checkUser($name, $password)) {
            session_start();
            $_SESSION["name"] = $name;
            $_SESSION["password"] = $password;
            return true;
        } else {
            return false;
        }
    }
    public function findName($name) {
        $result = $this->db->query("SELECT name FROM users WHERE name='$name'");
        return $result->num_rows;
    }
    //updating name in DB
    public function changeName($name) {
        session_start();
        $result = $this->db->query("UPDATE users SET name = '$name' WHERE name = '" . $_SESSION['name'] . "'");
        if ($result)
            $_SESSION["name"] = $name;
        return $result;
    }
    //updating email in DB
    public function changeEmail($email) {
        session_start();
        $result = $this->db->query("UPDATE users SET email = '$email' WHERE name = '" . $_SESSION['name'] . "'");
        return $result;
    }
    //updating tel number in DB
    public function changeTel($tel) {
        session_start();
        $result = $this->db->query("UPDATE users SET tel = '$tel' WHERE name = '" . $_SESSION['name'] . "'");
        return $result;
    }
    //updating website in DB
    public function changeWebsite($website) {
        session_start();
        $result = $this->db->query("UPDATE users SET website = '$website' WHERE name = '" . $_SESSION['name'] . "'");
        return $result;
    }
    //updating password in DB
    public function changePassword($password, $newpassword) {
        session_start();
        $newpassword = md5($newpassword);
        $result = $this->db->query("UPDATE users SET password = '$newpassword' WHERE name = '" . $_SESSION['name'] . "' AND password = '$password'");
        if ($result) {
            $_SESSION["password"] = $password;
            return $result;
        }
    }

    public function __destruct() {
        if ($this->db)
            $this->db->close();
    }
}
?>