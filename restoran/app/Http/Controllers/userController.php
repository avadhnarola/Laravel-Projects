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
        $arr['chef_data'] = DB::table('chef')->limit(4)->get();

        return view('index')->with($arr);
    }

    public function about()
    {
        $arr['chef_data'] = DB::table('chef')->limit(4)->get();

        return view('about')->with($arr);
    }

    public function service(Request $res)
    {
        $arr['service_data'] = DB::table('service')->get();

        return view('service')->with($arr);
    }
    public function menu()
    {
        $arr['menu_data'] = DB::table('food')->get();
        return view('menu')->with($arr);
    }
    public function team()
    {
        $arr['team_data'] = DB::table('chef')->get();

        return view('team')->with($arr);
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
