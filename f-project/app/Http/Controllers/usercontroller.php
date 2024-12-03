<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usercontroller extends Controller
{
    public function index(Request $res)
    {

        if ($res->submit) {
            $name = $res->name;
            $email = $res->email;
            $password = $res->password;
            $gender = $res->gender;
            $city = $res->city;
            $contact = $res->contact;

            $data = array('name' => $name, 'email' => $email, 'password' => $password, 'gender' => $gender, 'city' => $city, 'contact' => $contact);

            $res = DB::table("user")->insert($data);

            return redirect('/');
        }

        $arr['data'] = DB::table("user")->get();

        return view('form')->with($arr);
    }

    public function Delete(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table('user')->where('id', $id)->delete();
        return redirect('/');
    }

    public function getData(Request $res)
    {

        $id = $res->id;
        $arr['data'] = DB::table('user')->where('id', $id)->get();
        return view("update")->with($arr);
    }

    public function updateData(Request $res)
    {
        if ($res->submit) {

            $id = $res->id;
            $name = $res->name;
            $email = $res->email;
            $password = $res->password;
            $gender = $res->gender;
            $city = $res->city;
            $contact = $res->contact;

            $data = array('name' => $name, 'email' => $email, 'password' => $password, 'gender' => $gender, 'city' => $city, 'contact' => $contact);

            $res = DB::table('user')->where('id', $id)->update($data);
            return redirect('/');

        }
    }
}
