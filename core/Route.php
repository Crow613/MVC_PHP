<?php

namespace Core;


class Route
{

    public static function get(string $path, array $param)
    {

        return file_chacker_route($path, $param);

    }

    public static function post(string $path, array $param)
    {
        $request = new Request();

        if ($request->method() === 'POST') {
            return file_chacker_route($path, $param);
        }

    }
    public static function put($path, $param)
    {

        /**
         * TUDU
         */

    }
    public static function patch(string $path, array $param)
    {
        $request = new Request();
        dd($request->method());
        if ($request->method() === 'PATCH') {

        }
    }
    public static function delete(string $path, array $param)
    {
        $request = new Request();
        dd($request->method());
        if ($request->method() === 'DELETE') {
            return file_chacker_route($path, $param);
        }
    }



}