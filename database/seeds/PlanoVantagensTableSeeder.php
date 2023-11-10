<?php

use Illuminate\Database\Seeder;

use App\Models\PlanoVantagem;

class PlanoVantagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Seed Ouro
        PlanoVantagem::create([
            'descricao_vantagem' => 'Acesso aos jogos com mando de campo do clube no setor de Cadeiras',
            'visivel_home' => true,
            'plano_id' => 1,
        ]);
        PlanoVantagem::create([
            'descricao_vantagem' => 'Descontos em produtos e serviços no comercio local.',
            'visivel_home' => true,
            'plano_id' => 1,
        ]);
        PlanoVantagem::create([
            'descricao_vantagem' => 'Participação prioritária em ações promocionais do clube',
            'visivel_home' => true,
            'plano_id' => 1,
        ]);

        //Seed Prata
        PlanoVantagem::create([
            'descricao_vantagem' => 'Acesso aos jogos com mando de campo do clube no setor de Arquibancada.',
            'visivel_home' => true,
            'plano_id' => 2,
        ]);
        PlanoVantagem::create([
            'descricao_vantagem' => 'Descontos em produtos e serviços no comercio local.',
            'visivel_home' => true,
            'plano_id' => 2,
        ]);
        PlanoVantagem::create([
            'descricao_vantagem' => 'Participação prioritária em ações promocionais do clube.',
            'visivel_home' => true,
            'plano_id' => 2,
        ]);

        //Seed Bronze
        PlanoVantagem::create([
            'descricao_vantagem' => 'Acesso aos jogos com mando de campo do clube no setor de Placar.',
            'visivel_home' => true,
            'plano_id' => 3,
        ]);
        PlanoVantagem::create([
            'descricao_vantagem' => 'Descontos em produtos e serviços no comercio local.',
            'visivel_home' => true,
            'plano_id' => 3,
        ]);
        PlanoVantagem::create([
            'descricao_vantagem' => 'Participação prioritária em ações promocionais do clube.',
            'visivel_home' => true,
            'plano_id' => 3,
        ]);
    }
}
