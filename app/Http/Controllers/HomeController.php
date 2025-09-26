<?php

namespace App\Http\Controllers;

use App\Models\Foto; // Importe o model 'Foto'
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $fotos = Foto::orderBy('ordem', 'asc')->get();

        return view('home', ['fotos' => $fotos]);
    }
}