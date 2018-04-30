<?php
// this class will be responsible for requesting information about the current browser request
class Request
{
    public static function uri(){
        // dd($_SERVER);
        // /names?name=Richard   we need to strip off the query string
        // trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));// says yes i want you to parse the Request uri, and I want the part called url path
        // this specifies what segment of the parse url we are interested in
        // return trim($_SERVER['REQUEST_URI'],'/');
        // dd(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/'));
        return trim(
            parse_url(
                $_SERVER['REQUEST_URI'],
                PHP_URL_PATH)
            ,'/');
    }


    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];  // GET or POST
    }
}