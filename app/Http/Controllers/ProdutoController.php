<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
        {
            public function index()
        {
            $produtos = Produto::all();
            return view('produtos.index', compact('produtos'));
        }

        public function create()
        {
            return view('produtos.create');
        }

        public function store(Request $request)
        {
            Produto::create($request->all());
            return redirect('produtos')->with('success', 'produto created successfully.');
        }

        public function edit($id)
        {
            $produtos = Produto::findOrFail($id);
            return view('produtos.edit', compact('produtos'));
        }

        public function update(Request $request, $id)
        {
            $produtos = Produto::findOrFail($id);
            $produtos->update($request->all());
            return redirect('produtos')->with('success', 'produto updated successfully.');
        }

        public function destroy($id)
        {
            $produtos = Produto::findOrFail($id);
            $produtos->delete();
            return redirect('produtos')->with('success', 'produto deleted successfully.');
        }
    }

