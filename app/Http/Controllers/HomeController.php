<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Usuario;

class HomeController extends Controller
{
    public function index(string $config = '')
    {
        $quantidades = (object) array(
            "diretoria"     => Usuario::diretoria()->count(),
            "staff"         => Usuario::staff()->count(),
            "elenco"        => Usuario::elenco()->count(),
            "equipes"       => Equipe::lines()->count(),
            "adversarios"   => Equipe::adversarios()->count(),
        );
        
        return view('admin.dashboard.home')
                ->with('quantidades', $quantidades);
    }
}
