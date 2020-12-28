<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

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
        
        return view('equipes.index')
                ->with('data', $equipes)
                ->with('thead', $thead)
                ->with('breadcrumbs', $this->getBreadcrumbs());
    }

    public function create()
    {
        return view('equipes.create')
            ->with('breadcrumbs', $this->getBreadcrumbs('inserir'));
    }

    public function store(Request $request)
    {
        $input = $request->input();

        $validator = $this->makeValidation($request);

        if ($validator) return back()->withInput()->withErrors($validator);
        return $input;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
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
