<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class printcontroller extends Controller
{
    public function index(Request $res) 
    {

        $data = array('name' => '');

        if ($res->submit) {
            $data['name'] = $res->name;
        }

        return view("welcome")-> with(key: $data);  // welcome is file
    }

    public function second()
    {
        return view("secondpage");
    }
}
