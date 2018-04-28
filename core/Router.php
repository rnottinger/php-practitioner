<?php

class Router
{
    protected $routes = [];

    // public function __construct($routes){
    //     $this->routes = $routes;        
    // }

    // a static function is not an instance method
    //      so its kind of like a global method that can be called at any time
    //          if I want a new instance of router I can use the keyword static/or self
    public static function load($file){
        $router = new self;  // this says create a new Router instance
        require $file;  // require routes.php expects $router object to be available

        // can't use $this because this method is not an instance method but its a static method
        // return $this;
        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    // this method will check the routes array and match to a controller that is associated with it
    public function direct($uri){
        // key = about/culture.php
        if (array_key_exists($uri,$this->routes)) {
            // dd($this->routes[$uri]);
            return $this->routes[$uri];  // this will be used to require the controller
        }

        // if we didn't find anything throw an exception
        throw new Exception("No routes for this uri {$uri}");
    }
}