<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use DB;

class userlogin extends Controller
{
    public function login(Request $res)
    {
        if ($res->session()->has('user_id')) {

            return redirect('/dashboard');

        } else {

            if ($res->submit) {
                // echo "called function";

                $name = $res->name;
                $email = $res->email;
                $password = $res->password;

                $arr = DB::table("alluser")->where('email', $email)->where('password', $password)->first();
                session(['user_id' => $arr->id]);

                return redirect('/dashboard');
            }
            return view('userLoginForm');
        }


    }

    public function newUserRegister(Request $res)
    {
        if ($res->submit) {

            $name = $res->name;
            $email = $res->email;
            $password = $res->password;
            $gender = $res->gender;
            $contact = $res->contact;

            $data = array('name' => $name, 'email' => $email, 'password' => $password, 'gender' => $gender, 'contact' => $contact);

            $res = DB::table("alluser")->insert($data);
            return redirect('/');
        }

        return view('newUserRegister');
    }

    public function dashboard(Request $res)
    {
        if (!$res->session()->has('user_id')) {

            return redirect('/');

        } else {

            $user_id = $res->session()->get('user_id');

            $arr['data'] = DB::table("alluser")->where('id', $user_id)->get();
            return view('dashboard')->with($arr);
        }
    }

    public function addcontact(Request $res)
    {
        if (!$res->session()->has('user_id')) {

            return redirect('/');

        } else {

            $user_id = $res->session()->get('user_id');

            if ($res->submit) {
                $user_id = $res->session()->get('user_id');


                $name = $res->name;
                $contact = $res->contact;
                $save = $res->save;
                $cur_user = $user_id;


                $data = array('name' => $name, 'contact' => $contact, 'user' => $cur_user, 'save' => $save);
                $res = DB::table('contact')->insert($data);

                $arr['data'] = DB::table("alluser")->where('id', $user_id)->get();
                return view('addContact')->with($arr);
            }
            $arr['data'] = DB::table("alluser")->where('id', $user_id)->get();

            return view('addContact')->with($arr);
        }

    }

    public function viewcontact(Request $res)
    {

        if (!$res->session()->has('user_id')) {
            return redirect('/');

        } else {

            $user_id = $res->session()->get('user_id');
            $viewArr['data'] = DB::table("contact")->where('user', $user_id)->get();


            return view('viewContact')->with($viewArr);
        }
    }

    public function getUpdateData(Request $res)
    {

        $id = $res->id;
        $arr['data'] = DB::table('contact')->where('id', $id)->get();
        return view('updateContact')->with($arr);

    }

    public function updateContact(Request $res)
    {
        if ($res->submit) {

            $id = $res->id;
            $name = $res->name;
            $contact = $res->contact;
            $save = $res->save;


            $data = array('name' => $name, 'contact' => $contact, 'save' => $save);
            $res = DB::table("contact")->where('id', $id)->update($data);


            return redirect('viewContact');
        }

    }

    public function deleteContact(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table("contact")->where('id', $id)->delete();
        return redirect('viewContact');
    }

    public function getAccountData(Request $res)
    {

        if (!$res->session()->has('user_id')) {

            return redirect('/');

        } else {

            $user_id = $res->session()->get('user_id');

            $arr['data'] = DB::table("alluser")->where('id', $user_id)->get();
            return view('manageAccount')->with($arr);
        }
    }
    public function logout(Request $res)
    {

        $res->session()->flush();
        return redirect('/');
    }
}

