<?php

class UserController
{

    public function actionRegister()
    {

        $firstName = '';
        $lastName = '';
        $phone = '';
        $email = '';
        $password = '';

        $result = false;
        $errors = false;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstName = $_POST['firstName'];
            $firstName = User::stripTags($firstName);

            $lastName = $_POST['lastName'];
            $lastName = User::stripTags($lastName);

            $phone = $_POST['phone'];
            $phone = User::stripTags($phone);

            $email = $_POST['email'];
            $email = User::stripTags($email);

            $password = $_POST['password'];
            $password = User::stripTags($password);

            $password2 = $_POST['password2'];
            $password2 = User::stripTags($password2);

            if(!User::checkName($firstName,$lastName)) {
                $errors[] = 'Имя и фамилия должны состоять не менее, чем из 2 символов';
            }

            if(!User::checkEmail($email)) {
                $errors[] = "Неверно введенный E-mail";
            }

            if(!User::checkPhone($phone)) {
                $errors[] = "Неверно введенный телефон. Телефон должен содержать только цифры";
            }

            if($password == $password2) {
                if(!User::checkPassword($password)) {
                    $errors[] = "Пароль должен состоять из букв и цифр любого регистра и содержать не менее 7 символов";
                }
            }
            else {
                $errors[] = 'Введенные пароли не совпадают';
            }

            if(User::checkEmailExists($email)) {
                $errors[] = "Указанный E-mail уже существует";
            }

            if($errors == false) {
                $result = User::register($firstName, $lastName, $phone, $email, $password);
            }

        }

        include_once ROOT.'/views/user/register.php';
        return true;
    }
}