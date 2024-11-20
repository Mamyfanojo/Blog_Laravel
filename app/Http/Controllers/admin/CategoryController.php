<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CategoryRequest;
use App\Http\Requests\admin\SearchCategoryController;
use App\Models\admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SearchCategoryController $request)
    {
        $query = Category::query();
        if($request->validated('name')) {
            $query = $query->where('name', 'like', "%{$request->validated('name')}%");
        }
        return view('admin.category.categories', [
            'categories' => $query->orderBy('created_at', 'desc')->paginate(6),
            'input' => $request->validated()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.addcategory', [
            'category' => new Category()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return to_route('admin.category.index')->with('success', 'categorie bien ajouté');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // dd($category);
        return view('admin.category.editcategorie', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category, CategoryRequest $request )
    {
        $category->update($request->validated());
        return to_route('admin.category.index')->with('success', 'categorie bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('admin.category.index')->with('success', 'categorie bien supprimé');
    }
}
