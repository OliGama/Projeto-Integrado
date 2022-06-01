<?php

namespace App\Http\Controllers;
use App\Models\Autor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAutor;

class AutorController extends Controller
{
    public function index(){
        $autors= Autor::orderBy('nome')->paginate(5);
        return view('autores.index', compact('autors'));
    }

    public function create(){
        return view('autores.create');
    }

    public function store(StoreUpdateAutor $request){
        Autor::create($request->all());
        return redirect()->route('autores.index');
    }

    public function show($id){
        $autors= Autor::find($id);
        if(!$autors){
            return redirect()
                     ->route('autores.index')
                     ->with('message', 'Autor não foi encontrado');
        }
        return view('autores.show', compact('autors'));
    }
    public function destroy($id){
        $autors=Autor::find($id);
        if(!$autors){
            return redirect()
                    ->route('autores.index')
                    ->with('message', 'Autor não foi encontrado');
        }
        $autors->delete();
        return redirect()
                    ->route('autores.index')
                    ->with('message', 'Autor deletado com sucesso');
    }
    public function edit($id){
        $autors=Autor::find($id);
        if(!$autors){
            return redirect()
                    ->route('autores.index')
                    ->with('message', 'Autor não foi encontrado');
        }
        return view('autores.edit', compact('autors'));
    }
    public function update(StoreUpdateAutor $request, $id){
        $autors=Autor::find($id);
        if(!$autors){
            return redirect()
                    ->route('autores.index')
                    ->with('message', 'Autor não foi encontrado');
        }
        $autors->update($request->all());

        return redirect()
                    ->route('autores.index')
                    ->with('message', 'Autor editado');
    }
    public function search(Request $request){
        $filters= $request->except('_token');
        $autors = Autor::where('nome', 'LIKE', "%$request->search%")
                        ->orWhere('pais', 'LIKE', "$request->search%")
                        ->paginate();

        return view('autores.index', compact('autors', 'filters'));
    }
}
