<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function products()
    {
        // مصفوفة وهمية للمنتجات
        $products = [
            [
                'name' => 'Milk Tea',
                'price' => 10,
                'on_sale' => true,
                'description' => 'Delicious milk tea with bubbles'
            ],
            [
                'name' => 'Green Tea',
                'price' => 12,
                'on_sale' => false,
                'description' => 'Refreshing green tea leaves'
            ],
            [
                'name' => 'Red Tea',
                'price' => 8,
                'on_sale' => true,
                'description' => 'Strong and bold red tea'
            ]
        ];

        return view('shop.products', compact('products'));
    }

    public function aboutUs()
    {
        $about = [
            'title' => 'About Our Tea Shop',
            'description' => 'We provide the finest teas from around the world.',
            'rawHtml' => '<strong>Enjoy our exclusive blends!</strong>'
        ];

        return view('shop.about-us', $about);
    }

    public function productDetails()
    {
        $product = [
            'name' => 'Milk Tea',
            'price' => 10,
            'on_sale' => true,
            'description' => 'Delicious milk tea with bubbles'
        ];

        return view('shop.product-details', compact('product'));
    }
}
