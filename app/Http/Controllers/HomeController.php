<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quantidades = (object) array(
            "usuarios" => Usuario::count()
        );
        
        return view('dashboard.home')
                ->with('quantidades', $quantidades);
    }
}
