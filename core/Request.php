<?php
// this class will be responsible for requesting information about the current browser request
class Request
{

    public static function uri(){
        // dd($_SERVER);
        return trim($_SERVER['REQUEST_URI'],'/');
    }
}