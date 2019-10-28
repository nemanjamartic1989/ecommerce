<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; // Product Model.
use App\Category; // Category Model.

class ProductController extends Controller
{   
    // Get all necessary data for products:
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.product.index', compact('products'));
    }

    // Form for create new Product:
    public function create()
    {   
        $categories = Category::all();
        return view('admin.product.create')->with('categories', $categories);
    }

    // Insert data into Product table with validation:
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'required|max:30',
            'product_price' => 'required',
            'product_info' => 'required',
            'stock' => 'required',
            'spl_price' => 'required',
            'image' => 'image|required',
            'category' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
        }else{
            $new_name = '';
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_info = $request->product_info;
        $product->stock = $request->stock;
        $product->spl_price = $request->spl_price;
        $product->image = $new_name;
        $product->category_id = $request->category;
        $product->save();

        return redirect('admin/product')->with('success', 'Data is successfully inserted');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    // Delete One Product:
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
        return redirect('admin.product.index')->with('success', 'Data is successfully deleted');
    }
}
