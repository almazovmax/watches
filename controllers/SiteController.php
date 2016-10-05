<?php

class SiteController
{
    public function actionIndex()
    {

        $latestProduct = array();
        $latestProduct = Product::getLatestProducts($page = 1, $brand = false, $sex = 'all',  8);

        require_once ROOT.'/views/site/index.php';
        return true;
    }

    public function actionContact()
    {
        $userName = '';
        $userEmail = '';
        $userText = '';
        $userPhone = '';

        $result = false;

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userName = $_POST['email'];
            $userName = User::stripTags($userName);

            $userEmail = $_POST['email'];
            $userEmail = User::stripTags($userEmail);

            $userText = $_POST['message'];
            $userText =User::stripTags($userText);

            if (isset($_POST['phone'])) {
                $userPhone = $_POST['phone'];
                $userPhone =User::stripTags($userPhone);
            }
            else {
                $userPhone = 'undefined';
            }

            $errors = false;

            if(!User::checkEmail($userEmail)) {
                $errors[] = 'Invalid email';
            }

            if($errors == false) {
                $adminEmail = 'crea.tiv@tut.by';
                $message = "Message: {$userText}. From: {$userName}, {$userEmail}, $userPhone";
                $subject = "Message from Luxury Watches";
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }




        require_once ROOT.'/views/site/contact.php';
        return true;
    }
}