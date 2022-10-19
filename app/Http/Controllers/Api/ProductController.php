<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->descripcion = $request->descripcion;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return $product;
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->descripcion = $request->descripcion;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->save();
            return $product;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function destroy($id)
    {
        try {
            //code...
            $product = Product::destroy($id);
            return $product;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
