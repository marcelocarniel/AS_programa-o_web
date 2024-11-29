<?php

namespace App\Http\Controllers;

use App\Models\Curator;
use Illuminate\Http\Request;

class CuratorController extends Controller
{
    public function index()
    {
        $products = Curator::all();
        return view('curators.index', compact('artifact'));
    }

    public function create()
    {
        return view('curators.create');
    }

    public function store(Request $request)
    {
        Curator::create($request->all());
        return redirect('curators')->with('success', 'Curator created successfully.');
    }

    public function edit($id)
    {
        $product = Curator::findOrFail($id);
        return view('curators.edit', compact('artifact'));
    }

    public function update(Request $request, $id)
    {
        $product = Curator::findOrFail($id);
        $product->update($request->all());
        return redirect('curators')->with('success', 'Curator updated successfully.');
    }

    public function destroy($id)
    {
        $product = Curator::findOrFail($id);
        $product->delete();
        return redirect('Curator')->with('success', 'Curator deleted successfully.');
    }
}
