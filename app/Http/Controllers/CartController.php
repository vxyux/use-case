<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = session()->get('cart');

        return Inertia::render('Cart/Index', [
            'cart' => $cart
        ]);
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
    public function store(Request $request)
    {

        // creating a new cart if there's no running session
        if (!session()->has('cart')) {
            $new_cart = [];
            session(['cart' => $new_cart]);
        }

        // utilize a global function to search for a specific value, returning the key
        $hit = searchForId($request->id, session('cart'));

        // if the product_id is found in the session array
        if(isset($hit)) {
            $cart = session('cart');
            $cart[$hit]['amount'] = $cart[$hit]['amount'] + 1;
            session(['cart' => $cart]);
        }
        else {
            $new_item = [
                'product_id' => $request['id'],
                'amount' => 1,
            ];
            session()->push('cart', $new_item);
        }

        $session = session('cart');

        return redirect()->route('cart.index');
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
