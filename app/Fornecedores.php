<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{

    protected  $fillable = ['nome', 'sobrenome', 'cep', 'endereco', 'email', 'telefone', 'cpf'];
}
