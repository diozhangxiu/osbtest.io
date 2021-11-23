<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.about');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function club()
    {
        return view('pages.club');
    }


    public function blog()
    {
        return view('pages.blog');
    }

    public function blog2()
    {
        return view('pages.blog-2');
    }

    public function schedule()
    {
        return view('pages.schedule');
    }

    public function join()
    {
        return view('pages.join');
    }
}
