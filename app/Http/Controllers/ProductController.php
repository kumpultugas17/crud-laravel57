<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        // Menampilkan data ke halaman
        return view('products.index', compact(['products']));
    }

    public function create()
    {
        return view('products.create', compact([]));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'price' => 'required|integer',
            'description' => 'required|string|max:191',
        ]);

        Product::create([
            'name' => $request->product,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact(['product']));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $request->product,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect('/product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}