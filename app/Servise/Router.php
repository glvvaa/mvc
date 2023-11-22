<?php

namespace App\Servise;


class Router
{
    private static $list = [];

    public static function page ($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function post($uri,$class,$method,$formdata = false, $files = false)
    {
        self::$list[] = [
            "uri" => $uri,
            "class"=>$class,
            "method"=>$method,
            "post"=>true,
            "formdata" => $formdata,
            "files"=>$files

        ];
    }




    public static function enable()
    {
        $query = isset ($_GET['q']) ? $_GET['q'] : null;
//        $query = $_GET['q'];



        foreach (self::$list as $route) {
            if ($route["uri"] === '/' . $query) {

            if (isset($route["post"]) ? $route["post"] : false === true && $_SERVER ["REQUEST_METHOD"] === "POST") {
                $action = new $route ["class"];
                $method = $route ["method"];
                if ($route["formdata"] && $route ["files"]) {
                    $action->$method($_POST, $_FILES);
                } elseif ($route["formdata"] && !$route ["files"]) {
                    $action->$method($_POST);
                } else {
                    $action->$method();
                }
                $method = $route ["method"];
                $action -> $method();
                die();
            }
            else {
                require_once "views/pages/" . $route ['page'] . ".php";
                die();
            }

            }
        }



        self::error('404');
    }

    private static function error ($error)
    {
        require_once "views/errors/". $error . ".php";
    }

    public static function redirect($uri)
    {
       header('Location: ' . $uri);
    }
    
}

?>