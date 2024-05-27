<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categories = Category::latest()->paginate(5);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = new Category();
        return view('categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        Category::create($request->validated() + [
            'slug' => Str::slug($request->name, '-')
        ]);
        return redirect()->route('categories.index')->with('success', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->validated() + [
            'slug' => Str::slug($request->name, '-')
        ]);
        return redirect()->route('categories.index')->with('updated', 'Categoria actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('deleted', 'Categoria eliminada con éxito.');
    }
}
