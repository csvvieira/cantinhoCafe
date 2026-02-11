<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionarioModel extends Model
{
    use HasFactory;
    protected $table='funcionario';
    protected $fillable = [
        'email',
        'nomeUsuario',
        'senha'
    ];
}
