<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return response()->json([
            'success' => true,
            'message' => "Daftar data Produk",
            'data' => $products
        ], 200);

    }

    public function show($id)
    {
        $products = Product::where('id', $id)->with('category')->first();

        if ($products) {
            return response()->json([
                'success' => true,
                'message' => "Daftar data Produk",
                'data' => $products
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => "data tidak ditemukan",
                'data' => ''
            ], 404);
        }
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
            return response()->json([
                'success' => false,
                'message' => 'data tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        $products = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'category_id' => $request->category,
            'brands' => $request->brand
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil ditambahkan',
            'data' => $products
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'category' => 'required',
            'name' => 'required|string|min:3',
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'brand' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        $products = Product::find($id);
        $products->update([
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'brands' => $request->brand,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Produk berhasil di update',
            'data' => $products
        ], 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil dihapus',
                'data' => null
            ], 200);

        } else {

            return response()->json([
                'success' => false,
                'message' => 'Produk tidak ditemukan',
                'data' => ''
            ], 404);
        }
    }
}
