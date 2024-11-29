<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use Illuminate\Http\Request;

class ArtifactController extends Controller
{
        public function index()
    {
        $products = Artifact::all();
        return view('artifacts.index', compact('artifact'));
    }

    public function create()
    {
        return view('artifacts.create');
    }

    public function store(Request $request)
    {
        Artifact::create($request->all());
        return redirect('artifacts')->with('success', 'Artifact created successfully.');
    }

    public function edit($id)
    {
        $product = Artifact::findOrFail($id);
        return view('artifacts.edit', compact('artifact'));
    }

    public function update(Request $request, $id)
    {
        $product = Artifact::findOrFail($id);
        $product->update($request->all());
        return redirect('artifacts')->with('success', 'Artifact updated successfully.');
    }

    public function destroy($id)
    {
        $product = Artifact::findOrFail($id);
        $product->delete();
        return redirect('Artifact')->with('success', 'Artifact deleted successfully.');
    }
}
