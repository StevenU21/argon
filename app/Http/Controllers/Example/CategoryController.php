<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\Example\CategoryRequest;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('viewAny', Category::class);
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
        $this->authorize('create', Category::class);
        // creamos una instancia de Category
        $category = new Category();
        return view('examples.categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $this->authorize('create', Category::class);
        // creamos una nueva categoria con los datos validados
        Category::create($request->validated());

        return redirect()->route('categories.index')->with('success', 'Categoria creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        $this->authorize('view', $category);
        // con la funcion load cargamos la relacion de los posts
        return view('examples.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        $this->authorize('update', $category);
        // retornamos la vista con la categoria a editar
        return view('examples.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $this->authorize('update', $category);
        // actualizamos la categoria con los datos validados
        $category->update($request->validated());
        return redirect()->route('categories.index')->with('updated', 'Categoria actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $this->authorize('destroy', $category);
        // eliminamos la categoria
        Category::destroy($category);
        return redirect()->route('categories.index')->with('deleted', 'Categoria eliminada con éxito.');
    }
}
