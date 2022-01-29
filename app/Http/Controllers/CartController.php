<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Cart;
class CartController extends Controller
{
     public function cartList()
    {
        $products = Product::orderByDesc('price')->paginate(5);
        return view('cart.index',compact('products'));
    }

     public function addToCart(Request $request)
    {
         if(!isset($request->productlist) ){
       return view('cart.index2');
    
    }else{
    foreach($request->productlist as $productid){
       
        $products = Product::find($productid);
       
                \Cart::add(array(
                'id' => $products->id,
                'name' => $products->title,
                'price' => $products->price,
                'quantity' => 1
            
            ));
        }
}

        return redirect()->route('cart.list')->with('success', 'Product is Added to Cart Successfully !');
    }

    public function removeCart($id)
    {
        \Cart::remove($id);
        return redirect()->back()->with('success','Item Cart Remove Successfully !');
    }

    public function clearAllCart()
    {
        \Cart::clear();
        return redirect()->back()->with('success','All Item Cart Clear Successfully !');
    }
}
