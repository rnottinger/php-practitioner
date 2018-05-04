<?php
namespace App\Controllers;
use App\Core\App;
class UsersController
{


    public function index()
    {
        $users = App::resolve('database')->selectAll('users', 'User');
        return view('users', compact('users'));
    }

    public function store(){
        // Insert the user associated with the request
        App::resolve('database')->insert('users', [
            'first_name'    => $_POST['first_name'],
            'last_name'     => $_POST['last_name']
        ]);
        // and then redirect back to all users
        // header('Location: /users');
        return redirect('users');
    }
}