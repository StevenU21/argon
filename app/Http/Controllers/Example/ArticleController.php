<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\Example\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Services\ImageService;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('viewAny', Article::class);
        // con la funcion with cargamos la relacion de la categoria
        // a esto se le llama eager loading
        // ademas paginamos los resultados de 10 en 10
        $articles = Article::with(['category', 'tags', 'user'])->latest()->paginate(10);
        return view('examples.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorize('create', Article::class);
        // creamos una instancia de Article
        $article = new Article();
        // con la funcion pluck obtenemos un array asociativo con el id y el nombre de la categoria
        // en lugar de usar all en donde obtenemos un array con los objetos de la categoria
        // $categories = Category::all();
        $categories = Category::pluck('name', 'id');

        $tags = Tag::pluck('name', 'id');
        return view('examples.articles.create', compact('article', 'categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request, ImageService $imageService): RedirectResponse
    {
        $this->authorize('create', Article::class);
        // creamos un nuevo Article con los datos validados
        $article = Article::create($request->validated() + [
            'user_id' => auth()->id()
        ]);

        // Sincronizamos las etiquetas
        $article->tags()->sync($request->tags);

        //Guardamos la imagen
        if ($request->hasFile('image')) {
            $imageService->storeLocal(
                $article,
                'image',
                $article->title,
                $request->file('image')
            );
        }

        return redirect()->route('articles.index')->with('success', 'Articulo creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): View
    {
        $this->authorize('view', $article);
        // con la funcion load cargamos la relacion de la categoria
        $article->load(['category', 'tags', 'user']);

        return view('examples.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
        $this->authorize('update', $article);

        //$categories = Category::all();
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        return view('examples.articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article, ImageService $imageService): RedirectResponse
    {
        $this->authorize('update', $article);
        // actualizamos el Article con los datos validados
        $article->update($request->validated());

        if ($request->hasFile('image')) {
            $imageService->updateLocal(
                $article,
                'image',
                $article->title,
                $request->file('image')
            );
        }

        return redirect()->route('articles.index')->with('updated', 'Artículo actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article, ImageService $imageService): RedirectResponse
    {
        $this->authorize('destroy', $article);
        $imageService->deleteLocal($article, 'image');
        // eliminamos el Article
        $article->delete();
        return redirect()->route('articles.index')->with('deleted', 'Artículo eliminado Correctamente');
    }
}
