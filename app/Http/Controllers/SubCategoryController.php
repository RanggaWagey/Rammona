<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.subcategories.index', [
            'subcategories' => SubCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.subcategories.create',[
            'categories' => Category::all()
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
            'name' => 'required','max:255',
            'slug' => 'required','unique:categories',
            'category_id' => 'required'
        ]);

        // $validatedData['user_id'] = auth()->user()->id;

        SubCategory::create($validatedData);
        return redirect()->route('subcategories.index')->with('success', 'New sub category has been added!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        return view('dashboard.subcategories.edit', [
            'subcategory' => $subcategory,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $rules =[
            'name' => 'required','max:255',
            'slug' => 'required',
        ];

    if($request->slug != $subcategory->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);


        // $validatedData['user_id'] = auth()->user()->id;

        SubCategory::where('id', $subcategory->id)->update($validatedData);

        return redirect()->route('subcategories.index')->with('success', 'SubCategory has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        SubCategory::destroy($subcategory->id);
        return redirect()->route('subcategories.index')->with('success', 'Sub Category has been deleted.');


    }
}
