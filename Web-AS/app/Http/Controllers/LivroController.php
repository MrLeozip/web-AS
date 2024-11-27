<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $Livro = Livro::all();
        return view('Livro.index', compact('Livro'));
    }
    
    public function create()
    {
        return view('Livro.create');
    }
    
    public function store(Request $request)
    {
        Livro::create($request->all());
        return redirect('Livro')->with('success', 'Livro created successfully.');
    }
    
    public function edit($id)
    {
        $Livro = Livro::findOrFail($id);
        return view('Livro.edit', compact('Livro'));
    }
    
    public function update(Request $request, $id)
    {
        $Livro = Livro::findOrFail($id);
        $Livro->update($request->all());
        return redirect('Livro')->with('success', 'Livro updated successfully.');
    }
    
    public function destroy($id)
    {
        $Livro = Livro::findOrFail($id);
        $Livro->delete();
        return redirect('Livro')->with('success', 'Livro deleted successfully.');
    }
}
