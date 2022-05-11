<?php

namespace App\Http\Controllers;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index(){
        $autores= Autor::all();
        return view('autores.index', compact('autores'));
    }
    public function create(){
        return view('autores.create');
    }
    // public function store(StoreUpdateLivro $request){
    //     Autor::create($request->all());
    //     return redirect()->route('autor.index');
    // }
    // public function show($id){
    //     $autor= Autor::find($id);
    //     if(!$autor){
    //         return redirect()
    //                 ->route('autor.index')
    //                 ->with('message', 'Autor não foi encontrado');
    //     }
    //     return view('autor.show', compact('autor'));
    // }
    // public function destroy($id){
    //     $autor=Autor::find($id);
    //     if(!$autor){
    //         return redirect()
    //                 ->route('autor.index')
    //                 ->with('message', 'Autor não foi encontrado');
    //     }
    //     $autor->delete();
    //     return redirect()
    //                 ->route('autor.index')
    //                 ->with('message', 'Autor deletado com sucesso');
    // }
    // public function edit($id){
    //     $autor=Autor::find($id);
    //     if(!$autor){
    //         return redirect()
    //                 ->route('autor.index')
    //                 ->with('message', 'Autor não foi encontrado');
    //     }
    //     return view('livros.edit', compact('livro'));
    // }
    // public function update(StoreUpdateLivro $request, $id){
    //     $autor=Autor::find($id);
    //     if(!$autor){
    //         return redirect()
    //                 ->route('autor.index')
    //                 ->with('message', 'Autor não foi encontrado');
    //     }
    //     $autor->update($request->all());

    //     return redirect()
    //                 ->route('autor.index')
    //                 ->with('message', 'Autor editado');
    // }
}
