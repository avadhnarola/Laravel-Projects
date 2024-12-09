<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index() {
        return view('index');
    }

    public function services(){
        return view('services');
    }

    public function clients(){
        return view('clients');
    }
    public function blogGrid(){
        return view('blog-grid');
    }
    public function blogSingle(){
        return view('blog-single');
    }
    public function about(){
        return view('about');
    }
    public function threeColumn(){
        return view('three-column');
    }
    public function fourColumn(){
        return view('four-column');
    }
    public function singleProject(){
        return view('single-project');
    }
    public function contact(){
        return view('contact');
    }
}
