<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senhas extends Model
{
    use HasFactory;

    protected $fillable = ['plataforma', 'senha', 'date_generation', 'senha_valido', 'senha_alterada', 'motivo', 'data_alteracao'];
}