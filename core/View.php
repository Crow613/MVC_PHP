<?php

namespace Core;

class View
{
    /**
     *
     */
    public static function view($view, $data = [])
    {
        return include "../resources/view/" . $view . ".blade.php";
    }
    /**
     *
     */
    public static function router($view, $data = [])
    {
    }
    /**
     *
     */
    public static function redireqt(string $view,?array $data = []):string|array|false
    {
        return header(
            "Location" .
                "/resources/view" .
                $view .
                ".blade.php" .
                json_encode($data)
        );
    }
}
