<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        if (Auth::user()->role->name == 'User') {
            return view('admin.products.card', compact('products'));
        }else {
            return view('admin.products.index', compact('products'));
        }

    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories','brands'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $products = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'category_id' => $request->category,
            'brands' => $request->brand
        ]);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $products = Product::where('id', $id)->with('category')->first();
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.products.edit', compact('products', 'brands', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
        ]);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
