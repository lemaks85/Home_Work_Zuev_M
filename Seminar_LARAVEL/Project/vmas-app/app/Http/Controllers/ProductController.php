<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }


    public function store(Request $request)
    {
        $newProduct = Product::create([
            'sku' => $request->get('sku'),
            'name' => $request->get('name'),
            'price' => $request->get('price')
        ]);
        return response()->json($newProduct, 201);
    }


    public function update(Request $request, $id)
    {
        $updatdProduct = Product::findOrFail($id);

        $updatdProduct->update([
            'sku' => $request->get('sku'),
            'name' => $request->get('name'),
            'price' => $request->get('price')
        ]);
        return response()->json($updatdProduct, 202);
    }



    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json([], 204);
    }
}
