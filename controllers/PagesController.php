<?php

// Generally a controller is responsible for
//      receiving a request
//      delegating in some form
//      & returning a response
class PagesController
{
    //in our case if we had a home page...we that would receive a request..which could be data from a form request
    public function home()
    {
        // dd('home');
        // THIS IS GENERALLY the DOMAIN for a controller
        // Receive the request

        // Delegate.  ask the database for a handful of records
        $users = App::resolve('database')->selectAll('users', 'User');

        // Return a response
        require 'views/index.view.php'; 
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }

    public function aboutCulture()
    {
        $coname = "Mule Kick Systems";

        require 'views/about-culture.view.php';
    }
}