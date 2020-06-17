<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagemProduto extends Migration
{

    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->string('imagem',100);
        });
    }

    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
         $table->dropColumn('imagem');
        });
    }
}
