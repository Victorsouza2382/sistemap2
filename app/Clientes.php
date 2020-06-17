<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected  $fillable = [
        'nome', 'sobrenome','cep', 'endereco', 'email', 'telefone', 'cpf',
        'loja_id','cliente_id'
    ];
}
