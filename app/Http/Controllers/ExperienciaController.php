<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use Illuminate\Http\Request;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencias = Experiencia::orderBy('id', 'desc')->get();

        return view('experiencias.index', ['experiencias' => $experiencias]);
    }
}
