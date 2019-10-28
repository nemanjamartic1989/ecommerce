<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{   
    // All categories:
    public function getAllCategories(){
        $categories = Category::all();
        return $categories;
    }

    // Get all necessary data of Categories and Products for HomePage:
    public function index()
    {   
        $products = Product::all();
        return view('front.home', compact('products'))->with('categories', $this->getAllCategories());
    }

    // List of Products in Shop page:
    public function shop()
    {   
        $products = Product::all();
        return view('front.shop', compact('products'))->with('categories', $this->getAllCategories());
    }

    // List of Products by Category:
    public function showCategory($id){
        $productCategory = Category::where('id', '=', $id)->get();
        $productsByCategory = Product::where('category_id', '=', $id)->paginate(10);
        return view('front.productsListByCategory', compact('productsByCategory'))
        ->with('categories', $this->getAllCategories())->with('productCategory', $productCategory);
    }

    // Get single Product:
    public function productDetail($id){
        $product = Product::findOrFail($id);
        return view('front.product_detail', compact('product'))->with('categories', $this->getAllCategories());
    }
}
