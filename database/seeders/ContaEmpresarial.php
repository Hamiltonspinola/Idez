<?php

namespace Database\Seeders;

use App\Models\ContaEmpresarial as ModelsContaEmpresarial;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContaEmpresarial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsContaEmpresarial::create([
            'numero' => '40001',
            'digito' => '1',
            'razao_social'   =>  'Razão Social',
            'nome_fantasia' => 'Nome Fantasia',
            'agencia'  => '4111',
            'cnpj'          =>  '04708200552',
            'user_id'       => 1,
        ]);
    }
}
