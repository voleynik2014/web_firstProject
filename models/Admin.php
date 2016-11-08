<?php


class Admin
{

    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

    }


    public static function getUserById($id)
    {

        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }


    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }


    public static function checkUserData($name, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE name = :name AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();

        if ($user) {
            return $user['id'];
        }
        return false;
    }

}