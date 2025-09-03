<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
public function index()
{
    $products = Product::all();

    return view('shop.products', compact('products'));
}

public function show($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect('/products')->with('error', 'Product not found.');
    }

    return view('shop.product-details', compact('product'));
}
public function create()
{
    return view('shop.create-product');
}

public function store(Request $request)
{
    // التحقق من المدخلات
    $validated = $request->validate([
        'name'        => 'required|min:3',
        'description' => 'required|max:500',
        'price'       => 'required|numeric|min:0',
    ]);

    // إنشاء كائن المنتج
    $product = new Product();
    $product->name = $validated['name'];
    $product->description = $validated['description'];
    $product->price = $validated['price'];
    $product->on_sale = $request->has('on_sale');

   

    $product->save();

    return redirect('/products')->with('success', 'Product created successfully!');
}

}
