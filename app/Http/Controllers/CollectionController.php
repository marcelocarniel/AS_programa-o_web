<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $products = Collection::all();
        return view('collections.index', compact('collection'));
    }

    public function create()
    {
        return view('collections.create');
    }

    public function store(Request $request)
    {
        Collection::create($request->all());
        return redirect('collections')->with('success', 'Collection created successfully.');
    }

    public function edit($id)
    {
        $product = Collection::findOrFail($id);
        return view('collections.edit', compact('collection'));
    }

    public function update(Request $request, $id)
    {
        $product = Collection::findOrFail($id);
        $product->update($request->all());
        return redirect('collections')->with('success', 'Collection updated successfully.');
    }

    public function destroy($id)
    {
        $product = Collection::findOrFail($id);
        $product->delete();
        return redirect('Collection')->with('success', 'Collection deleted successfully.');
    }
}
