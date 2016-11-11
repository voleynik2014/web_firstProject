<?php


class AdminController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        require_once(ROOT . '/views/admin_product/index.php');
        return true;
    }

    public function actionLogin()
    {

        $name = false;
        $password = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            $userId = Admin::checkUserData($name, $password);

            if ($userId == false) {
                $errors[] = 'Ну и ну, похоже кто-то забыл пароль...';
            } else {
                Admin::auth($userId);

                header("Location: /admin/index");
            }
        }

        require_once(ROOT . '/views/admin/login.php');
        return true;
    }


    public function actionLogout()
    {
        session_start();

        unset($_SESSION["user"]);

        header("Location: /admin/login");
    }

}