<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EquipeController extends Controller
{
    public $label   = 'Equipes';
    public $route   = 'admin.equipes.listar';
    public $inserir = 'admin.equipes.inserir';
    public $editar  = 'admin.equipes.editar';

    public function index()
    {
        $thead = ['id', 'nome'];
        $equipes = Equipe::select($thead)->get();
        
        return view('admin.equipes.index')
                ->with('data', $equipes)
                ->with('thead', $thead)
                ->with('breadcrumbs', $this->getBreadcrumbs());
    }

    public function create()
    {
        return view('admin.equipes.create')
            ->with('breadcrumbs', $this->getBreadcrumbs('inserir'));
    }

    public function store(Request $request)
    {
        $validator = $this->makeValidation($request);

        if ($validator) return back()->withInput()->withErrors($validator);
        
        $equipe = new Equipe();
        $equipe->nome = $request->nome;
        $equipe->save();

        return Redirect::route($this->route);
    }

    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view('admin.equipes.edit')
            ->with('equipe', $equipe)
            ->with('breadcrumbs', $this->getBreadcrumbs('editar'));
    }

    public function update(Request $request, $id)
    {
        $validator = $this->makeValidation($request);

        if ($validator) return back()->withInput()->withErrors($validator);
        
        $equipe = Equipe::find($id);
        $equipe->nome = $request->nome;
        $equipe->save();

        return Redirect::route($this->editar, ['id' => $id])
                        ->with('success', 'Equipe atualizada com sucesso!');
    }

    public function destroy($id)
    {
        //
    }

    public function getRules()
    {
        return [
            'nome' => 'required'
        ];
    }
}
