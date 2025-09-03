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
    $validated = $request->validate([
        'name'        => 'required|min:3',
        'description' => 'required|max:500',
        'price'       => 'required|numeric|min:0',
        'image' => 'nullable|image|max:2048',
    ]);

    $product = new Product();
    $product->name = $validated['name'];
    $product->description = $validated['description'];
    $product->price = $validated['price'];
    $product->on_sale = $request->has('on_sale');
    if ($request->hasFile('image')) {
    $path = $request->file('image')->store('products', 'public');
    $product->image = $path;
}


   

    $product->save();

    return redirect('/products')->with('success', 'Product created successfully!');
}
public function edit($id)
{
    $product = Product::findOrFail($id); 
    return view('shop.edit-product', compact('product'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        
    ]);

    $product = Product::findOrFail($id);
    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'on_sale' => $request->has('on_sale'),
        
    ]);

    return redirect('/products')->with('success', 'Product updated successfully!');
}

public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect('/products')->with('error', 'Product not found.');
    }

    $product->delete();

    return redirect('/products')->with('success', 'Product deleted successfully!');

}
}
