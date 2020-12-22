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
        // dd($quantidades->usuarios);
        return view('admin.dashboard.home')
                ->with('quantidades', $quantidades);
    }
}
