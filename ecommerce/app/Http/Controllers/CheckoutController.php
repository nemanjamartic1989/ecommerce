<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

class CheckoutController extends Controller
{
    public function index(){
    	if (Auth::check()) {
    		$categories = Category::all();
    		$cartItems = Cart::content();
    		return view('cart.checkout', compact('cartItems'))->with('categories', $categories);
    	}else{
    		return redirect('login');
    	}
    }
}
