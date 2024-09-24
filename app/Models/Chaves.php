<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chaves extends Model
{
    use HasFactory;

    protected $fillable = ['instituicao', 'codigo', 'codigo_used', 'reason_use', 'data_alteracao', 'valido'];
}
