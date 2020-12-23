<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quantidades = (object) array(
            "administracao" => Usuario::count(),
            "staff"         => Usuario::count(),
            "elenco"        => Usuario::count(),
            "equipes"       => Equipe::count(),
        );
        
        return view('dashboard.home')
                ->with('quantidades', $quantidades);
    }
}
