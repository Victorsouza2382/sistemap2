<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        App\User::create([
            'name' => "admin",
            'email' => "admin@admin.com",
            'password' => bcrypt('admin'),
            'is_admin' => true,
            'loja_id' => 1,
        ]);
    }
}
