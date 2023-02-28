<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use \Milon\Barcode\DNS1D;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->nama_produk = $request->nama_produk;
        $product->harga_produk = $request->harga_produk;
        $product->stok_produk = $request->stok_produk;
        $product->deskripsi_produk = $request->deskripsi_produk;
        $product->gambar_produk = 'test..png';
        $product->barcode = Str::slug($request->nama_produk) . '_barcode';
        $product->save();
        $product = Product::where('nama_produk', '=', $request->nama_produk)->first();
        echo \DNS2D::getBarcodePNGPath(json_encode($product) , 'QRCODE');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
