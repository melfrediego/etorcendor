<?php

use Illuminate\Database\Seeder;

use App\Models\Plano;

class PlanosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ouro
        Plano::create([
            'nome' => 'Plano Ouro',
            'titulo' => 'Sócio Eterno Campeão Ouro',
            'descricao' => 'Maior conforto, mais comodidade e experiências exclusivas.',
            'validade' => null,
            'valor'  => 90,
            'valor_adesao'  => 0,
            'ativo' => true,
            'tipo_assinatura' => null,
            'imagem_carteira_frente' => 'editar_imagem_ouro'
        ]);

        //Prata
        Plano::create([
            'nome' => 'Plano Prata',
            'titulo' => 'Sócio Eterno Campeão Prata',
            'descricao' => 'Entrada exclusiva, conforto no estádio e experiências próprias',
            'validade' => null,
            'valor'  => 70,
            'valor_adesao'  => 0,
            'ativo' => true,
            'tipo_assinatura' => null,
            'imagem_carteira_frente' => 'editar_imagem_prata'
        ]);

        //Bronze
        Plano::create([
            'nome' => 'Plano Bronze',
            'titulo' => 'Sócio Eterno Campeão Bronze',
            'descricao' => 'Carteira personalizada, entrada exclusiva no estádio e experiências próprias',
            'validade' => null,
            'valor'  => 50,
            'valor_adesao'  => 0,
            'ativo' => true,
            'tipo_assinatura' => null,
            'imagem_carteira_frente' => 'editar_imagem_bronze'
        ]);
    }
}
