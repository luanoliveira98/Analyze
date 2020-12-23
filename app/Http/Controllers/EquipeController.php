<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public $label = 'Equipes';
    public $route = 'equipes.lista';

    public function index()
    {
        $equipes = Equipe::select('id', 'nome')->get();

        $thead = $this->getThead($equipes);
        
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
