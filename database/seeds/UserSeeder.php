<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos el seeder para la creacion de un usuario por defecto
        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'admin@panel.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
