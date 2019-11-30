<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexPage()
    {
        $text = 'Welcome to Iruobes App!';
        return view('pages.index', compact('text'));
        // return view('pages.index')->with('title', $title);
    }

    public function aboutPage()
    {
        $desc = 'About Us Page';
        return view('pages.about')->with('desc', $desc);
    }

    public function servicesPage()
    {
        $data = array(
            'title' => 'Services Page',
            'services' => ['Web Design', 'Programming', 'Seo']
        );
        return view('pages.services')->with($data);
    }

    public function WelcomePage()
    {
        return view('welcome');
    }
}

