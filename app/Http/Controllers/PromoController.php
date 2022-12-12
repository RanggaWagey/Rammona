<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = DB::table('products')->where('id')->value('price');
        // $promo = DB::table('promos')->where('product_id', $product->id)->value('discount');
        return view('dashboard.promo.index', [

            'products' => Product::all(),
            'subcategories' => SubCategory::all(),
            'categories' => Category::all(),
            'promos' => Product::whereNotNUll('discount')->get(),
            // 'discount' => $product * $promo / 100
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.promo.create', [
            'products' => Product::whereNull('discount')->get(),
            'subcategories' => SubCategory::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required',
            'discount' => 'required',

        ]);
        Promo::create($validatedData);

        return redirect()->route('promo.index')->with('success', 'New promo has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $promo)
    {
        return view('dashboard.promo.edit', [
            'promo' => $promo,
            'categories' => Category::all(),
            'subcategories' => SubCategory::all()
        ]);
    }

    public function add(Product $product)
    {
        return view('dashboard.promo.add', [
            'product' => $product,
            'categories' => Category::all(),
            'subcategories' => SubCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $promo)
    {
        $rules = [
            'discount' => 'max:3'
        ];

        $validatedData = $request->validate($rules);

        Product::where('id', $promo->id)->update($validatedData);

        return redirect()->route('promos.index')->with('success', 'Promo has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promo  $promo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $promo)
    {
        Product::where('id', $promo->id)->update(['discount' => null]);

        return redirect()->route('promos.index')->with('success', 'Promo has been deleted.');
    }
}
