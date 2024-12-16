<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {


            return view('admin/dashboard');
        }

    }

    public function addService(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            if ($res->submit) {

                $icon = $res->icon;
                $title = $res->title;
                $description = $res->description;

                $data = array('icon' => $icon, 'title' => $title, 'description' => $description);

                $res = DB::table('service')->insert($data);


                return redirect('/viewService');

            }

            return view('admin/addService');
        }
    }

    public function viewService(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $arr['data'] = DB::table('service')->get();
            return view('admin/viewService')->with($arr);
        }
    }

    public function getServiceData(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table('service')->where('id', $id)->get();
        return view('admin/updateService')->with($arr);
    }

    public function updateService(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {
            if ($res->submit) {
                $id = $res->id;
                $icon = $res->icon;
                $title = $res->title;
                $description = $res->description;


                $data = array('icon' => $icon, 'title' => $title, 'description' => $description);
                $res = DB::table('service')->where('id', $id)->update($data);
                return redirect('/viewService');
            }
        }

    }
    public function delete(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $id = $res->id;

            $arr['data'] = DB::table('service')->where('id', $id)->delete();

            return redirect('/viewService');
        }

    }

    public function addFood(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            if ($res->submit) {

                $name = $res->name;
                $description = $res->description;
                $price = $res->price;
                $foodType = $res->foodType;
                $image = $res->file('image')->getClientOriginalName();
                $res->file('image')->move(public_path('food_images'), $image);

                $data = array('name' => $name, 'description' => $description, 'price' => $price, 'image' => $image, 'foodType' => $foodType);

                $res = DB::table('food')->insert($data);


                return redirect('/viewFood');

            }

            return view('admin/addFood');
        }
    }

    public function viewFood(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $arr['data'] = DB::table('food')->get();
            return view('admin/viewFood')->with($arr);
        }
    }

    public function deleteFood(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $id = $res->id;

            $arr['data'] = DB::table('food')->where('id', $id)->delete();

            return redirect('/viewFood');
        }

    }






    public function logout(Request $res)
    {
        $res->session()->flush();
        return redirect('admin/');
    }


}
