<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name'    => 'required',
            'email'   => 'required | email',
            'age'     => 'required',
            'role'    => 'required',
            'password'=> 'required | confirmed',
        ]);
        $product = Product::create($data);
        return $product;

        if (Auth::attempt()) {
            return view('dashboard');
        }

    }
}
