<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{

    protected  $fillable = ['nome', 'sobrenome', 'endereco', 'email', 'telefone', 'cpf'];
}
