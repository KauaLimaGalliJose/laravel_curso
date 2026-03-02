<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create Usuarios
        DB::table('usuarios')->insert([
            [
                "nome" => 'admin',
                'senha' => bcrypt('admin'),
                'tipo'  => 'adm',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
