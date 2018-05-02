<?php
// this is a basic dependency injection container
//      will be a place to register or bind dependencies into it
//      just as a storage place ...like a registry
//      then when we need to fetch those values we can resolve values out of our container
class App
{
    protected static $registry = [];  // each time we bind into our application container...we are just going to associate a key to whatever we are binding to and store it in this array
    // I don't know what the methods should be called.
    // I don't know how this should feel to interact with...so when that is the case
    // recommend...before you create the class or its methods,
    //      design how you will interact with it
    //          so instead of doing all of this code...I want to
    public static function bind($key, $value)
    {
        // when we are dealing with a static method we are not working with an instance
        static::$registry[$key] = $value;
    }

    public static function resolve($key)
    {
        if(! array_key_exists($key,static::$registry)){
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$registry[$key];
    }
}