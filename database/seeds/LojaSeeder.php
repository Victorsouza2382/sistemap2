<?php

use Illuminate\Database\Seeder;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lojas::create([
            'nome' => "admin",
            'descricao' => "admin@admin.com",

        ]);
    }
}
