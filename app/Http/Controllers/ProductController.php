<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category', 'avgRating')->get();

        //dd($products->first()->avgRating[0]['aggregate']);

        return Inertia::render('Products/Index', [
            'products' => $products,
        ]);
    }

    public function filter(Request $request) 
    {
        $products = Product::with('category', 'avgRating')->where('category_id', $request->id)->get();

        $category = isset($products[0]->category['title']) ? $products[0]->category['title'] : null;

        return Inertia::render('Products/Index', [
            'category' => $category,
            'products' => $products,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('category', 'avgRating')->where('id', $id)->first();

        return Inertia::render('Products/Show', [
            'product' => $product,
            'rating' => $product->avgRating[0]['aggregate'],
            'reviews' => $product->reviews
        ]);
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
