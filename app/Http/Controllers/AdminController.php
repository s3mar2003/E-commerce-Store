<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $productsCount = Product::count();
        $categoriesCount = Category::count();
        $latestProducts = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact('productsCount', 'categoriesCount', 'latestProducts'));
    }

    // Products listing
    public function products()
    {
        // eager load category to avoid N+1
        $products = Product::with('category')->paginate(15);
        return view('admin.products', compact('products'));
    }

    // Categories listing
    public function categories()
    {
        $categories = Category::withCount('products')->paginate(15);
        return view('admin.categories', compact('categories'));
    }
}
