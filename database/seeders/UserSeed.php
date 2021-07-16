<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hamilton Morais',
            'email' => 'hamilton@teste.com',
            'cpf'   =>  '04708200552',
            'telefone' => '71996911996',
            'password'  => bcrypt('12345678')
        ]);
    }
}
