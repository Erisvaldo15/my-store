<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.home', [
            'products' => Product::paginate(3),
        ]);
    }

    public function create()
    {
        return view('admin.addProduct');
    }

    public function store(ProductRequest $request)
    {
        $fields = $request->except('_token');
        $fields['banner'] = $request->banner->store('products');
        $fields['slug'] = Str::slug($request->name);
    
        Product::create($fields);
        return back()->with('Register', 'Register inserted with success');
    }

    public function edit(Product $product)
    {
        return view('admin.editProduct', [
            'product' => $product,
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $fields = $request->except('_token');
        $fields['banner'] = $request->banner->store('products');
        $fields['slug'] = Str::slug($request->name);

        $product->fill($fields);
        $product->save();
        return back()->with('Update', 'Register updated with success');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('Delete', 'Product deleted with success');
    }
}
