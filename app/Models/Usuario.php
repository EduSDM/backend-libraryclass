<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $primarykey='id_usuarios';
    protected $fillable=["nome","tipo","cep","email","telefone"];
}
