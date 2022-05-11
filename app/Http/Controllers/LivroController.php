<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateLivro;

class LivroController extends Controller
{
    public function index(){
        $livros= Livro::all();
        return view('livros.index', compact('livros'));
    }
    public function create(){
        return view('livros.create');
    }
    public function store(StoreUpdateLivro $request){
        Livro::create($request->all());
        return redirect()->route('livros.index');
    }
    public function show($id){
        $livro= Livro::find($id);
        if(!$livro){
            return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro não foi encontrado');
        }
        return view('livros.show', compact('livro'));
    }
    public function destroy($id){
        $livro=Livro::find($id);
        if(!$livro){
            return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro não foi encontrado');
        }
        $livro->delete();
        return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro deletado com sucesso');
    }
    public function edit($id){
        $livro=Livro::find($id);
        if(!$livro){
            return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro não foi encontrado');
        }
        return view('livros.edit', compact('livro'));
    }
    public function update(StoreUpdateLivro $request, $id){
        $livro=Livro::find($id);
        if(!$livro){
            return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro não foi encontrado');
        }
        $livro->update($request->all());

        return redirect()
                    ->route('livros.index')
                    ->with('message', 'Livro editado');
    }
}
