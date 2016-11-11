<?php


class AdminBase
{

    public static function checkAdmin()
    {
        $userId = Admin::checkLogged();

        $user = Admin::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        }

        header("Location: /admin/login");
    }

}