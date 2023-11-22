<?php

namespace App\Controllers;
use App\Servise\Router;


class Auth
{

    public function logout()
    {
        unset ($_SESSION ["user"]);
        Router::redirect('login');
    }


    public function login($data)
    {
        $email = $data ["email"];
        $password = $data ["password"];

        $user = \R::findOne('users', 'email = ?', [$email]);

        if (!$user) {
            die ('такого джуна нет');
        }

        if (password_verify($password, $user->password)) {
            session_start();
            $_SESSION ["user"] = [
                "id" => $user->id,
                "full_name" => $user->full_name,
                "username" => $user->username,
                "group" => $user->group,
                "email" => $user->email,
                "avatar" => $user->avatar
            ];

            Router::redirect('/profile');

        } else {
            die ('не верный логии или пароль');
        }

    }

    public static function register($data, $files)
    {
        $email = $data ["email"];
        $full_name = $data ["full_name"];
        $password = $data ["password"];
        $password_confirm = $data ["password_confirm"];

        if ($password !== $password_confirm) {

        }

        $avatar = $files ["avatar"];

        $filename = time() . '_' . $avatar["name"];
        $path = "uploads/avatars/" . $filename;

        if (move_uploaded_file($avatar["tmp_name"], "uploads/avatar" . $filename)) {

            $user = \R::dispense('users');
            $user->email = $email;
            $user->full_name = $full_name;
            $user->avatar = "/" . $path;
            $user->group = 1;
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->password_confirm = $password_confirm;
            \R::store($user);

            Router::redirect('/login');

        } else {
            die('Фотография не загрузилась');

        }
    }
}