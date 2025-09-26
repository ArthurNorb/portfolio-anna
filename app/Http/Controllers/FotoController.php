<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        // Busca as fotos no banco, ordenadas pela coluna 'ordem'
        $fotos = Foto::orderBy('ordem', 'asc')->get();

        return view('fotos.index', ['fotos' => $fotos]);
    }
}