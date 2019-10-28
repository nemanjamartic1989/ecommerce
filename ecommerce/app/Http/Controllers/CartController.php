<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	$cartItems = Cart::content(); // Return a collection of CartItem.
    	return view('cart.index', compact('cartItems'))->with('categories', $categories);
    }

    // Add item to cart:
    public function addItem($id){
    	$product = Product::findOrFail($id);
    	Cart::add($id, $product->product_name, 1, $product->product_price, 550, ['img'=>$product->image, "stock" => $product->stock]);
    	return back();
    }
}
