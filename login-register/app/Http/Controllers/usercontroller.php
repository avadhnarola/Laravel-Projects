<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usercontroller extends Controller
{
    public function index(Request $res)
    {

        if ($res->session()->has('admin_id')) {

            return redirect('/dashboard');

        } else {

            if ($res->submit) {

                $email = $res->email;
                $password = $res->password;

                $arr = DB::table("admin")->where("email", $email)->where("password", $password)->first();
                // print_r($arr); die;
                session(['admin_id' => $arr->id]);
                return redirect('/dashboard');
            }

            return view('welcome');
        }
    }

    public function dashboard(Request $res)
    {

        $admin_id = $res->session()->get('admin_id');

        $arr['data'] = DB::table('admin')->where('id', $admin_id)->get();

        return view('dashboard')->with($arr);
    }

    public function logout(Request $res)
    {
        $res->session()->flush();
        return redirect('/');
    }


}


