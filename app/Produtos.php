<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected  $fillable = [
        'nome', 'descricao', 'quantidade', 'preco', 'categoria_id'
    ];
}
