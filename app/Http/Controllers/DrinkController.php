<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.drink', [
            'products' => Product::whereHas('category', function ($categ) {
                $categ->where('categories.id', 2);
            })->get(),
            'subCategori' => SubCategory::whereHas('category', function ($categ) {
                $categ->where('categories.id', 2);
            })->get(),
            'promos' => Product::whereHas('category', function ($categ) {
                $categ->where('categories.id', 2);
            })->whereNotNUll('discount')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewcategorydrink($slug)
    {
        $category = Category::find(1);
        $subCategori = SubCategory::where('slug', $slug)->first();
        // $products = Product::whereHas('sub_category_id', $subCategori->id)->get();
        $products = Product::whereHas('category', function ($categ) {
            $categ->where('categories.id', 2);
        })->where('sub_category_id', $subCategori->id)->get();
        return view('product.foodcategory', [
            'subcategory' => SubCategory::whereHas('category', function ($categ) {
                $categ->where('categories.id', 2);
            })->get(),
            'promos' => Product::whereHas('category', function ($categ) {
                $categ->where('categories.id', 2);
            })->whereNotNUll('discount')->get(),
        ], compact('subCategori', 'products'));
    }
}
