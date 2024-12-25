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

    public function getCartData(Request $res)
    {
        $id = $res->id;
        // Fetch the food item by ID
        $food_data = DB::table("food")->where("id", $id)->first();
        $cart_all = DB::table("cart")->get();
        $cart_id = $cart_all['id'];

     
        

        if ($food_data) {
            // Insert into the cart table
            DB::table('cart')->insert([
                'id' => $food_data->id,
                'name' => $food_data->name,
                'description' => $food_data->description,
                'foodType' => $food_data->foodType,
                'image' => $food_data->image,
                'price' => $food_data->price,
            ]);
                return redirect("/cart");
        }

        $cart_data['cart_data'] = DB::table("cart")->get();

        return view("cart", ['cart_data' => $cart_data])->with($cart_data);
    }

    public function cart()
    {
        $cart_data['cart_data'] = DB::table("cart")->get();

        return view("cart", ['cart_data' => $cart_data])->with($cart_data);
    }

    public function deleteCart(Request $res)
    {

        $id = $res->id;
        $arr['data'] = DB::table("cart")->where('id', $id)->delete();


        return redirect("cart");
    }

    public function checkOut(Request $res) {
        // if ($res->placeOrder) {

        //     $fname = $res->fname;
        //     $lname = $res->lname;
        //     $designation = $res->designation;
        //     $image = $res->file('image')->getClientOriginalName();
        //     $res->file('image')->move(public_path('Chef_images'), $image);

        //     $data = array('name' => $name, 'designation' => $designation, 'image' => $image);

        //     $res = DB::table('chef')->insert($data);


        //     return redirect('/viewTeam');

        // }
        return view("checkOut");
    }
}
