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
        // require 'views/index.view.php'; 
        // return view('index'); 
        // return view('index', [
        //     'users' => $users
        // ]); 
        return view('index', compact('users'));
        // create view() helper method in core/bootstrap.php
    }

    public function about()
    {
        // require 'views/about.view.php';
        return view('about');
    }

    public function contact()
    {
        // require 'views/contact.view.php';
        return view('contact');
    }

    public function aboutCulture()
    {
        $coname = "Mule Kick Systems";

        // require 'views/about-culture.view.php';
        return view('about-culture', compact('coname'));
    }

    public function addName()
    {
        App::resolve('database')->insert('users', [
            'first_name'    => $_POST['first_name'],
            'last_name'     => $_POST['last_name']
        ]);
        // require 'views/users.view.php'; 
        
        header('Location: /');
    }
}