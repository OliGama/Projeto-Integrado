<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEditora;
use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    public function index(){
        $editoras= Editora::orderBy('nome')->paginate(5);
        return view('editoras.index', compact('editoras'));
    }

    public function create(){
        return view('editoras.create');
    }

    public function store(StoreUpdateEditora $request){
        Editora::create($request->all());
        return redirect()->route('editoras.index');
    }

    public function show($id){
        $editoras= Editora::find($id);
        if(!$editoras){
            return redirect()
                     ->route('editoras.index')
                     ->with('message', 'Editora não foi encontrada');
        }
        return view('editoras.show', compact('editoras'));
    }
    public function destroy($id){
        $editoras=Editora::find($id);
        if(!$editoras){
            return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora não foi encontrada');
        }
        $editoras->delete();
        return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora deletada com sucesso');
    }
    public function edit($id){
        $editoras=Editora::find($id);
        if(!$editoras){
            return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora não foi encontrada');
        }
        return view('editoras.edit', compact('editoras'));
    }
    public function update(StoreUpdateEditora $request, $id){
        $editoras=Editora::find($id);
        if(!$editoras){
            return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora não foi encontrada');
        }
        $editoras->update($request->all());

        return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora editado');
    }
    public function search(Request $request){
        $filters= $request->except('_token');
        $editoras = Editora::where('nome', 'LIKE', "%$request->search%")
                        ->paginate();

        return view('editoras.index', compact('editoras', 'filters'));
    }
}
