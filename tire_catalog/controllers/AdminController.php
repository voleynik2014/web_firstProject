<?php


class AdminController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }


    public function actionSignIn()
    {
        require_once(ROOT. '/views/admin/signIn.php');
        return true;
    }

}