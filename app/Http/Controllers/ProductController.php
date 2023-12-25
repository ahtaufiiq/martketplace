<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //
    public function index()
    {
        $categories = Category::select(['id_kategori', 'nama_kategori'])->get();
        $statuses = Status::select(['id_status', 'nama_status'])->get();
        $products = Product::select([
            'id_produk',
            'nama_produk',
            'harga',
            'categories.nama_kategori as kategori',
            'statuses.nama_status as status'
        ])
            ->join('categories', 'id_kategori', 'products.kategori_id')
            ->join('statuses', 'id_status', 'products.status_id')
            ->orderBy('products.updated_at', 'desc')
            ->where('status_id', 2)
            ->paginate(10);
        return view('home', [
            'products' => $products,
            'categories' => $categories,
            'statuses' => $statuses
        ]);
    }

    public function deleteProduct(int $id)
    {
        Product::where('id_produk', $id)->delete();
        return Redirect::route('home');
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|integer'
        ]);
        $product = Product::create($request->all());
        return Redirect::route('home');
    }
    public function editProduct(Request $request, int $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|integer'
        ]);

        $product = Product::find($id);
        $product->update($request->all());
        return Redirect::route('home');
    }
}
