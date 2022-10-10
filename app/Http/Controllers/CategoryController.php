<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create',[
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
        $request->validate([
            'name' => 'required', 'string', 'unique:categories,name',
            'slug' => 'required', 'string', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', 'unique:categories,slug'
        ],
        
        [
            'slug.regex' => 'Slug format is invalid',
            'slug.unique' => 'This slug name has already been taken'
        ]);

        if($request->category_id)
        {
            $scategory = new SubCategory();
            $scategory->fill($request->all());
            // $scategory->name = $this->name;
            // $scategory->slug = $this->slug;
            // $scategory->category_id = $this->category_id;
            $scategory->save();
        }
        else
        {
            $category = new Category;
            $category->fill($request->all());
            $category->save();
        }

        return redirect()->route('categories.index')->with(['success' => 'Category has been created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', [
            'category' => $category,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules =[
            'name' => 'required','max:255',
            'slug' => 'required',
        ];

        if($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);


        // $validatedData['user_id'] = auth()->user()->id;

        Category::where('id', $category->id)->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        
        return redirect()->route('categories.index')->with('success', 'Category has been deleted.');
    }
    // public function destroy($slug)
    // {
    //     Category::destroy($slug);
        
    //     return redirect()->route('categories.index')->with('success', 'Category has been deleted.');
    // }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);

    }
}
