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
        $arr['testimonial_data'] = DB::table('testimonial')->get();

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
        $arr['testimonial_data'] = DB::table('testimonial')->get();
        return view('testimonial')->with($arr);
    }
    public function contact(Request $res)
    {

        if ($res->submit) {

            $name = $res->name;
            $email = $res->email;
            $subject = $res->subject;
            $message = $res->message;

            $data = array('name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message);

            $res = DB::table('contact')->insert($data);
        }
        return view('contact');
    }

    public function cart() {
        return view("cart");
    }
}
