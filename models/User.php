<?php

class User
{

    public static function checkUserData ($email, $passsword)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE email = :email AND passsword = :password';

        $result = $db -> prepare();
        $result -> bindParam(':email', $email, PDO::PARAM_STR);
        $result -> bindParam(':password', $password, PDO::PARAM_STR);
        $result -> execute();

        $user = $result -> fetch();
        if($user) {
            return $user['id'];
        }
        return false;
    }

    public static function auth($userId)
    {
        session_start();
        $_SESSION['user'] = $userId;
    }


    public static function stripTags($var)
    {
        $var = strip_tags($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        $var = trim($var);
        return $var;

    }

    public static function register ($firstName, $lastName, $phone, $email, $password)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO user (firstName, lastName, email, phone, password) ' .
        'VALUES (:firstName, :lastName, :email, :phone, :password) ';

        $result = $db -> prepare($sql);
        $result -> bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $result -> bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $result -> bindParam(':email', $email, PDO::PARAM_STR);
        $result -> bindParam(':phone', $phone, PDO::PARAM_STR);
        $result -> bindParam(':password', $password, PDO::PARAM_STR);

        return $result -> execute();
    }

    public static function checkName ($firstName, $lastName)
    {
        if(strlen($firstName) >= 2 && strlen($lastName) >= 2) {
            return true;
        }
        return false;
    }
    public static function checkEmail ($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    public static function checkPhone ($phone)
    {
        if(strlen($phone) >= 10) {
            return true;
        }
        return false;
    }
    public static function checkPassword ($password)
    {
        if(strlen($password) >= 6 && preg_match('(^[a-zA-Z0-9]+$)', $password)) {
            return true;
        }
        return false;
    }
    public static function checkEmailExists ($email)
    {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db -> prepare($sql);
        $result -> bindParam(':email', $email, PDO::PARAM_STR);
        $result -> execute();

        if($result -> fetchColumn()) {
            return true;
        }
        return false;
    }




}