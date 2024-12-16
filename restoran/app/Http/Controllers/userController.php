<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    public function index(Request $res)
    {
        // array ma store krvana variable and ->with(array)
        $id = $res->id;
        $arr['data'] = DB::table('service')->limit(4)->get();
        $arr['food_data'] = DB::table('food')->get();

        return view('index')->with($arr);
    }

    public function about()
    {
        return view('about');
    }

    public function service(Request $res)
    {
        $arr['data'] = DB::table('service')->get();

        return view('service')->with($arr);
    }
    public function menu()
    {
        $arr['menu_data'] = DB::table('food')->get();
        return view('menu')->with($arr);
    }
    public function team()
    {
        return view('team');
    }

    public function booking()
    {
        return view('booking');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function contact()
    {
        return view('contact');
    }
}
