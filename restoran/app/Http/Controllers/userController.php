<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function service() {
        return view('service');
    }
    public function menu() {
        return view('menu');
    }
    public function team() {
        return view('team');
    }
    
    public function booking() {
        return view('booking');
    }
    public function testimonial() {
        return view('testimonial');
    }
    public function contact() {
        return view('contact');
    }
}
