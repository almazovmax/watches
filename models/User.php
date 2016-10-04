<?php

class User
{
    public static function register ()
    {

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
        if(strlen($phone) >= 10 && filter_var($phone, FILTER_VALIDATE_INT)) {
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