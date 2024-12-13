<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\Example\PostRequest;
use App\Models\Example\Post;
use App\Models\Example\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // con la funcion with cargamos la relacion de la categoria
        // a esto se le llama eager loading
        // ademas paginamos los resultados de 10 en 10
        $posts = Post::with('category')->paginate(10);
        return view('examples.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // creamos una instancia de Post
        $post = new Post();
        // con la funcion pluck obtenemos un array asociativo con el id y el nombre de la categoria
        // en lugar de usar all en donde obtenemos un array con los objetos de la categoria
        // $categories = Category::all();
        $categories = Category::pluck('name', 'id');
        return view('examples.posts.create', compact('post', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        // creamos un nuevo post con los datos validados
        Post::create($request->validated() + [
            'slug' => Str::slug($request->title, '-')
        ]);
        return redirect()->route('posts.index')->with('success', 'Post creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        // con la funcion load cargamos la relacion de la categoria
        $post->load('category');
        return view('examples.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View
    {
        //$categories = Category::all();
        $categories = Category::pluck('name', 'id');
        return view('examples.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        // actualizamos el post con los datos validados
        $post->update($request->validated() + [
            'slug' => Str::slug($request->title, '-')
        ]);
        return redirect()->route('posts.index')->with('updated', 'Post actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        // eliminamos el post
        Post::find($id)->delete();
        return redirect()->route('posts.index')->with('deleted', 'Post eliminado Correctamente');
    }
}
