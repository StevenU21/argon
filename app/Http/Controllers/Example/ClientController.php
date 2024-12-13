<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Example\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('examples.clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return redirect()->route('clients.index');
    }
}
