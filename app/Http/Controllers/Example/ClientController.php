<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\Example\ClientRequest;
use App\Models\Example\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index(): View
    {
        $client = new Client();
        $clients = Client::paginate(5);
        return view('examples.clients.index', compact('clients', 'client'));
    }

    public function store(ClientRequest $request): RedirectResponse
    {
        $client = new Client();

        $client->fill(
            $request->validated() +
            [
                'slug' => Str::slug($request->name . ' ' . $request->last_name, '-')
            ]
        );
        $client->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = Str::slug($request->name, '-') . '-' . $client->id . '.png';
            $client->update([
                'image' => $file->storeAs('clients_images', $imageName, 'public')
            ]);
        }

        return redirect()->route('clients.index')->with('success', 'Cliente creado correctamente');
    }

    public function edit(Client $client): JsonResponse
    {
        return response()->json([
            'client' => $client
        ]);
    }

    public function update(ClientRequest $request, int $id): RedirectResponse
    {
        $client = Client::findOrFail($id);

        $client->fill(
            $request->validated() +
            [
                'slug' => Str::slug($request->name . ' ' . $request->last_name, '-')
            ]
        );
        $client->save();

        if ($request->hasFile('image')) {
            if ($client->image) {
                Storage::disk('public')->delete('clients_images/' . $client->image);
            }

            $file = $request->file('image');
            $imageName = Str::slug($request->name, '-') . '-' . $client->id . '.png';
            $client->update([
                'image' => $file->storeAs('clients_images', $imageName, 'public')
            ]);
        }

        return redirect()->route('clients.index')->with('updated', 'Cliente actualizado correctamente');
    }

    public function show(Client $client): JsonResponse
    {
        return response()->json([
            'client' => $client
        ]);
    }

    public function destroy(int $id): RedirectResponse
    {
        $client = Client::findOrFail($id);

        if ($client->image) {
            Storage::disk('public')->delete('clients_images/' . $client->image);
        }

        $client->delete();
        return redirect()->back()->with('deleted', 'Cliente eliminado correctamente');
    }
}
