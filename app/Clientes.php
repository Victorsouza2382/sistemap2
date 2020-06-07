<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected  $fillable = ['nome', 'sobrenome', 'endereco', 'email', 'telefone', 'cpf'];
}
