<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class FrontViewController extends Controller
{
    public function index()
    {
        $page = Page::where('title','home')->firstOrFail();
        return view('welcome')->with('page',$page);
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
