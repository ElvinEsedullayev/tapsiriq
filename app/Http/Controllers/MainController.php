<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class MainController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc('price')->paginate(6);
        return view('welcome',compact('products'));
    }

   
}
