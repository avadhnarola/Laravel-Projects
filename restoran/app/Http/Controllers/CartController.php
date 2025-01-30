<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

    
        Cart::create([
            'food_id' => $validated['id'],
            'name' => $validated['name'],
            'price' => $validated['price'],
        ]);

        return response()->json(['success' => true]);
    }

}
