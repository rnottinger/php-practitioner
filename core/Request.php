<?php
// this class will be responsible for requesting information about the current browser request
class Request
{

    public static function uri(){
        return trim($_SERVER['REQUEST_URI'],'/');
    }
}