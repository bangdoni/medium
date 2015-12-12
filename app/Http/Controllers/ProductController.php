<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $rules = [
        'name'           => 'required|max:255',
        'purchase_price' => 'required|numeric',
        'sell_price'     => 'required|numeric',
    ];

    public function create(Request $request)
    {
        if ($request->isMethod('get')) {
            // menampilkan form
            $product = new Product;
            return view('product.create', compact('product'));
        } else {
            // save ke db
            $this->validate($request, $this->rules);

            $input = $request->only('name', 'purchase_price', 'sell_price');

            Product::create($input);

            return redirect('product/create');
        }
    }

    public function index()
    {
        $products = Product::orderBy('name')->get();
        return view('product.index', compact('products'));
    }

    public function edit(Request $request, Product $product)
    {
        if ($request->isMethod('get')) {
            // menampilkan form
            return view('product.create', compact('product'));
        } else {
            // save ke db
            $this->validate($request, $this->rules);

            $input = $request->only('name', 'purchase_price', 'sell_price');

            $product->update($input);

            return redirect('product');
        }
    }

    public function delete($id)
    {
        Product::destroy($id);
        return redirect('product');
    }
}
