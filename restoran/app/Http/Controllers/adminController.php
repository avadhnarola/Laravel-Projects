<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{

    public function index(Request $res)
    {

        if ($res->session()->has('admin_id')) {
            return redirect('/dashboard');

        } else {

            if ($res->submit) {

                $email = $res->email;
                $password = $res->password;

                $arr = DB::table('admin')->where('email', $email)->where('password', $password)->first();
                session(['admin_id' => $arr->id]);
                return redirect('/dashboard');
            }
            return view('admin/index');

        }

    }
    public function dashboard(Request $res)
    {
       if(!$res->session()->has('admin_id')){
            return view('admin/index');
       }else{

       
            return view('admin/dashboard');
        }
        
    }
    public function logout(Request $res)
    {
        $res->session()->flush();
        return redirect('admin/index');
    }

    
}
