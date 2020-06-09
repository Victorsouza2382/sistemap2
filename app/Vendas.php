<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected  $fillable = ['id', 'quantidade', 'preco', 'total_venda', 'dataCompra'];
}
