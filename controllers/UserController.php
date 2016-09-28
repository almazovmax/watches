<?php

class UserController
{
    public function actionRegister()
    {
        include_once ROOT.'/views/user/register.php';
        return true;
    }
}