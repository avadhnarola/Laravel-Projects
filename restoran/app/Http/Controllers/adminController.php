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


                return redirect('/dashboard');

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
    public function logout(Request $res)
    {
        $res->session()->flush();
        return redirect('admin/');
    }


}
