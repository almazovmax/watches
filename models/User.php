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




}