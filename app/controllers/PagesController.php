<?php
namespace App\Controllers;
class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutCulture()
    {
        $coname = "Mule Kick Systems";
        return view('about-culture', compact('coname'));
    }

}