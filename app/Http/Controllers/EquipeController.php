<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public $label = 'Equipes';
    public $route = 'admin.equipes.listar';

    public function index()
    {
        $thead = ['id', 'nome'];
        $equipes = Equipe::select($thead)->get();
        
        return view('equipes.index')
                ->with('data', $equipes)
                ->with('thead', $thead)
                ->with('breadcrumbs', json_encode($this->breadcrumbs));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
}
