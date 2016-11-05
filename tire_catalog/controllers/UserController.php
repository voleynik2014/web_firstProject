<?php


class UserController
{

    public function actionLogin()
    {
        $name = false;
        $password = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            $userId = User::checkUserData($name, $password);

            if ($userId == false) {
                $errors[] = 'Ну и ну, похоже кто-то забыл пароль...';
            } else {
                User::auth($userId);

                header("Location: /admin/index");
            }
        }

        require_once(ROOT . '/views/admin/signIn.php');
        return true;
    }


    public function actionLogout()
    {
        session_start();

        unset($_SESSION["user"]);

        header("Location: /");
    }

}