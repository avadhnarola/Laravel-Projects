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
                $id = $res->id;
                $email = $res->email;
                $password = $res->password;

                $arr = DB::table('admins')->where('email', $email)->where('password', $password)->first();
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

                $res = DB::table('services')->insert($data);


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

            $arr['data'] = DB::table('services')->get();
            return view('admin/viewService')->with($arr);
        }
    }

    public function getServiceData(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table('services')->where('id', $id)->get();
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
                $res = DB::table('services')->where('id', $id)->update($data);
                return redirect('/viewService');
            }
        }

    }
    public function deleteService(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $id = $res->id;

            $arr['data'] = DB::table('services')->where('id', $id)->delete();

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

    public function getFoodData(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table('food')->where('id', $id)->get();
        return view('admin/updateFood')->with($arr);
    }

    public function updateFood(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {
            if ($res->submit) {
                $id = $res->id;
                $name = $res->name;
                $description = $res->description;
                $price = $res->price;
                $foodType = $res->foodType;
                $image = $res->file('image')->getClientOriginalName();
                $res->file('image')->move(public_path('food_images'), $image);

                $data = array('name' => $name, 'description' => $description, 'price' => $price, 'image' => $image, 'foodType' => $foodType);
                $res = DB::table('food')->where('id', $id)->update($data);
                return redirect('/viewFood');
            }
        }

    }


    public function addTeam(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            if ($res->submit) {

                $name = $res->name;
                $designation = $res->designation;
                $image = $res->file('image')->getClientOriginalName();
                $res->file('image')->move(public_path('Chef_images'), $image);

                $data = array('name' => $name, 'designation' => $designation, 'image' => $image);

                $res = DB::table('chef')->insert($data);


                return redirect('/viewTeam');

            }

            return view('admin/addTeam');
        }
    }

    public function viewTeam(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $arr['data'] = DB::table('chef')->get();
            return view('admin/viewTeam')->with($arr);
        }
    }

    public function deleteTeam(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $id = $res->id;

            $arr['data'] = DB::table('chef')->where('id', $id)->delete();

            return redirect('/viewTeam');
        }

    }

    public function getTeamData(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table('chef')->where('id', $id)->get();
        return view('admin/updateTeam')->with($arr);
    }

    public function updateTeam(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {
            if ($res->submit) {
                $id = $res->id;
                $name = $res->name;
                $designation = $res->designation;
                $image = $res->file('image')->getClientOriginalName();
                $res->file('image')->move(public_path('Chef_images'), $image);

                $data = array('name' => $name, 'designation' => $designation, 'image' => $image);
                $res = DB::table('chef')->where('id', $id)->update($data);
                return redirect('/viewTeam');
            }
        }

    }

    public function addTestimonial(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            if ($res->submit) {

                $name = $res->name;
                $description = $res->description;
                $profession = $res->profession;
                $image = $res->file('image')->getClientOriginalName();
                $res->file('image')->move(public_path('testimonial_images'), $image);

                $data = array('name' => $name, 'description' => $description, 'profession' => $profession, 'image' => $image);

                $res = DB::table('testimonial')->insert($data);


                return redirect('/viewTestimonial');

            }

            return view('admin/addTestimonial');
        }
    }

    public function viewTestimonial(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $arr['data'] = DB::table('testimonial')->get();
            return view('admin/viewTestimonial')->with($arr);
        }
    }

    public function deleteTestimonial(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {

            $id = $res->id;

            $arr['data'] = DB::table('testimonial')->where('id', $id)->delete();

            return redirect('/viewTestimonial');
        }

    }

    public function getTestimonialData(Request $res)
    {
        $id = $res->id;
        $arr['data'] = DB::table('testimonial')->where('id', $id)->get();
        return view('admin/updateTestimonial')->with($arr);
    }

    public function updateTestimonial(Request $res)
    {
        if (!$res->session()->has('admin_id')) {
            return redirect('admin/');
        } else {
            if ($res->submit) {
                $id = $res->id;
                $name = $res->name;
                $description = $res->description;
                $profession = $res->profession;
                $image = $res->file('image')->getClientOriginalName();
                $res->file('image')->move(public_path('testimonial_images'), $image);

                $data = array('name' => $name, 'description' => $description, 'profession' => $profession, 'image' => $image);
                $res = DB::table('testimonial')->where('id', $id)->update($data);
                return redirect('/viewTestimonial');
            }
        }

    }



    public function logout(Request $res)
    {
        $res->session()->flush();
        return redirect('admin/');
    }


}
