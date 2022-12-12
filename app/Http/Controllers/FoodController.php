<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subcategory = SubCategory::where('category_id', 1)->get();
        // $category = Category::find(1);
        return view('product.food', [
            // 'products' => Product::all(),
            'products' => Product::whereHas('category', function ($categ) {
                $categ->where('categories.id', 1);
            })->get(),
            'subCategori' => SubCategory::whereHas('category', function ($categ) {
                $categ->where('categories.id', 1);
            })->get(),
            'promos' => Product::whereHas('category', function ($categ) {
                $categ->where('categories.id', 1);
            })->whereNotNUll('discount')->get(),
            // 'category' => $category
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

    public function viewcategoryfood($slug)
    {
        $category = Category::find(1);
        $subCategori = SubCategory::where('slug', $slug)->first();
        // $products = Product::whereHas('sub_category_id', $subCategori->id)->get();
        $products = Product::whereHas('category', function ($categ) {
            $categ->where('categories.id', 1);
        })->where('sub_category_id', $subCategori->id)->get();
        return view('product.foodcategory', [
            'subcategory' => SubCategory::whereHas('category', function ($categ) {
                $categ->where('categories.id', 1);
            })->get(),
            'promos' => Product::whereHas('category', function ($categ) {
                $categ->where('categories.id', 1);
            })->whereNotNUll('discount')->get(),
        ], compact('subCategori', 'products'));
    }
}
