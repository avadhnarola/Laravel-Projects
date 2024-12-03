<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    public function home(Request $res)
    {
        $data = array('name' => '', 'age' => '');

        if($res->submit){
            $data['name']=$res->name;
            $data['age']=$res->age;
        }
        return view("home")->with(key: $data);
    }

    public function second()
    {
        return view("secpage");
    }
}
