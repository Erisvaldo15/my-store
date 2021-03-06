<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
  
    public function index()
    {
        return view('home', [
            'products' => Product::all('id','name', 'banner', 'price'),
        ]);
    }
 
}
