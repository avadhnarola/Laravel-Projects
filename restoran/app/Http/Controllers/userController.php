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
        $arr['data'] = DB::table('services')->limit(4)->get();
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
        $arr['service_data'] = DB::table('services')->get();

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

    public function booking(Request $res)
    {
        if ($res->submit) {
            $name = $res->name;
            $email = $res->email;
            $date = $res->date;
            $people = $res->people;
            $message = $res->message;

            $data = array('name' => $name, 'email' => $email, 'date' => $date, 'people' => $people, 'message' => $message);

            $res = DB::table("booktable")->insert($data);
            return redirect('booking');
        }
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
        $food_data = DB::table("food")->where("id", $id)->first();
    
        if ($food_data) {
            $existingCartItem = DB::table("cart1")->where("id", $id)->first();
    
            if ($existingCartItem) {
                // Update the quantity if the item is already in the cart
                DB::table("cart1")
                    ->where("id", $id)
                    ->update(['quantity' => $existingCartItem->quantity + 1]);
            } else {
                // Insert into the cart table
                DB::table('cart1')->insert([
                    'id' => $food_data->id,
                    'name' => $food_data->name,
                    'description' => $food_data->description,
                    'foodType' => $food_data->foodType,
                    'image' => $food_data->image,
                    'price' => $food_data->price,
                    'quantity' => 1
                ]);
            }
    
            // Calculate total number of products in the cart
            $totalProducts = DB::table("cart1")->sum('quantity');
            // Store totalProducts in session
            session(['totalProducts' => $totalProducts]);
    
            return redirect("/cart")->with('totalProducts', $totalProducts);
        }
    
        $cart_data['cart_data'] = DB::table("cart1")->get();
        $totalProducts = DB::table("cart1")->sum('quantity');
        
        return view("cart", ['cart_data' => $cart_data, 'totalProducts' => $totalProducts]);
    }
    


    public function cart()
    {
        $cart_data['cart_data'] = DB::table("cart1")->get();

        return view("cart", ['cart_data' => $cart_data])->with($cart_data);
    }

    public function deleteCart(Request $res)
    {

        $id = $res->id;
        $arr['data'] = DB::table("cart1")->where('id', $id)->delete();
        return redirect("cart");
    }

    public function checkOut(Request $res)
    {

        if ($res->placeOrder) {

            $fname = $res->fname;
            $lname = $res->lname;
            $email = $res->email;
            $address = $res->address;
            $city = $res->city;
            $zip = $res->zip;
            $notes = $res->notes;

            $data = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'address' => $address, 'city' => $city, 'zip' => $zip, 'notes' => $notes);

            $res = DB::table('checkout')->insert($data);
            // return view('checkOut');
        }

        $cart_data['cart_data'] = DB::table("cart1")->get();
        return view("checkOut")->with($cart_data);
    }
}
