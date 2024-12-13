<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Example\Category;
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
        // obtenemos las categorias ordenadas por la fecha de creacion
        // y las paginamos de 5 en 5
        $categories = Category::latest()->paginate(5);
        return view('examples.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // creamos una instancia de Category
        $category = new Category();
        return view('examples.categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        // creamos una nueva categoria con los datos validados
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
        // con la funcion load cargamos la relacion de los posts
        return view('examples.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        // retornamos la vista con la categoria a editar
        return view('examples.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        // actualizamos la categoria con los datos validados
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
        // eliminamos la categoria
        Category::destroy($id);
        return redirect()->route('categories.index')->with('deleted', 'Categoria eliminada con éxito.');
    }
}
