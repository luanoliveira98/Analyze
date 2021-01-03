<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Usuario;

class HomeController extends Controller
{
    public function index(string $config = '')
    {
        $quantidades = (object) array(
            "administracao" => Usuario::administracao()->count(),
            "staff"         => Usuario::count(),
            "elenco"        => Usuario::count(),
            "equipes"       => Equipe::lines()->count(),
            "adversarios"   => Equipe::adversarios()->count(),
        );
        
        return view('admin.dashboard.home')
                ->with('quantidades', $quantidades);
    }
}
