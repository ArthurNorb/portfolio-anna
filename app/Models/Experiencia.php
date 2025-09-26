<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'empresa',
        'descricao',
        'data_entrada',
        'data_saida',
        'imagem',
    ];

     protected $casts = [
        'data_entrada' => 'date',
        'data_saida' => 'date',
    ];
}
