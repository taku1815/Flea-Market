<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);
    }
    public function profile()
    {
        return view("profile");
    }
    public function update(Request $request)
    {
        $user_id = Auth::id();
        $form = $request->all();
        unset($form['_token']);
        User::find($user_id)->update($form);
    }
}
