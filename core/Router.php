<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){
        $router = new self;
        require $file;
        return $router;
    }

    public function get($uri_path,$controller) {
        $this->routes['GET'][$uri_path] = $controller; 
    }

    public function post($uri_path,$controller) {
        $this->routes['POST'][$uri_path] = $controller; 
    }

    public function direct($uri, $requestType){
        if (array_key_exists($uri,$this->routes[$requestType])) {
            // return $this->routes[$requestType][$uri]; 

            // dd($this->routes[$requestType][$uri]); //--> PagesController@home
            // Parse it
            // new up the controller PagesController
            // and call the method
            
            return $this->callControllerAction(
                ...explode('@',$this->routes[$requestType][$uri])  // each piece will become an item in a array
                // ... splat operator..if you have an array then each item will be converted to function arguments
            );// says I want to call the Controller Action & then return that
        }
        throw new Exception("No routes for this uri {$uri}");
    }

    public function routes() {
        return $this->routes;
    }

    protected function callControllerAction($controller, $actionMethodToTrigger)
    {
        // var_dump($controller,$actionMethodToTrigger);
        if (! method_exists($controller,$actionMethodToTrigger)) {  // if the controller does not have a method called about
            throw new Exception(
                "{$controller} does not respond to the {$actionMethodToTrigger} action."
            );
        }
        return (new $controller)->$actionMethodToTrigger();// we could have a situation where the controller does not have a method

    }

}