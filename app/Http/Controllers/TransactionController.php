<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        if($product->stock >= $request->quantity){
            if($product->price * $request->quantity <= $request->amount ){
                $purchase = new Purchase;
                $product->stock = $product->stock - $request->quantity;
                $purchase->product_id = $id;
                $purchase->amount = $request->amount;
                $purchase->quantity = $request->quantity;
                $purchase->total = $product->price * $request->quantity;
                $product->save();
                $purchase->save();
            }
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
