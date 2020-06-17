<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected  $fillable = [
        'id', 'quantidade', 'preco',
        'cliente_id', 'produto_id'
    ];
}
