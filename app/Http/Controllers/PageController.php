<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function gallery2(){
        return view('pages.gallery2');
    }
}
