<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesSergipeSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Amparo de São Francisco', 'estado_id' => 26],
            ['nome' => 'Aquidabã', 'estado_id' => 26],
            ['nome' => 'Aracaju', 'estado_id' => 26],
            ['nome' => 'Arauá', 'estado_id' => 26],
            ['nome' => 'Areia Branca', 'estado_id' => 26],
            ['nome' => 'Barra dos Coqueiros', 'estado_id' => 26],
            ['nome' => 'Boquim', 'estado_id' => 26],
            ['nome' => 'Brejo Grande', 'estado_id' => 26],
            ['nome' => 'Campo do Brito', 'estado_id' => 26],
            ['nome' => 'Canhoba', 'estado_id' => 26],
            ['nome' => 'Canindé de São Francisco', 'estado_id' => 26],
            ['nome' => 'Capela', 'estado_id' => 26],
            ['nome' => 'Carira', 'estado_id' => 26],
            ['nome' => 'Carmópolis', 'estado_id' => 26],
            ['nome' => 'Cedro de São João', 'estado_id' => 26],
            ['nome' => 'Cristinápolis', 'estado_id' => 26],
            ['nome' => 'Cumbe', 'estado_id' => 26],
            ['nome' => 'Divina Pastora', 'estado_id' => 26],
            ['nome' => 'Estância', 'estado_id' => 26],
            ['nome' => 'Feira Nova', 'estado_id' => 26],
            ['nome' => 'Frei Paulo', 'estado_id' => 26],
            ['nome' => 'Gararu', 'estado_id' => 26],
            ['nome' => 'General Maynard', 'estado_id' => 26],
            ['nome' => 'Gracho Cardoso', 'estado_id' => 26],
            ['nome' => 'Ilha das Flores', 'estado_id' => 26],
            ['nome' => 'Indiaroba', 'estado_id' => 26],
            ['nome' => 'Itabaiana', 'estado_id' => 26],
            ['nome' => 'Itabaianinha', 'estado_id' => 26],
            ['nome' => 'Itabi', 'estado_id' => 26],
            ['nome' => 'Itaporanga d`Ajuda', 'estado_id' => 26],
            ['nome' => 'Japaratuba', 'estado_id' => 26],
            ['nome' => 'Japoatã', 'estado_id' => 26],
            ['nome' => 'Lagarto', 'estado_id' => 26],
            ['nome' => 'Laranjeiras', 'estado_id' => 26],
            ['nome' => 'Macambira', 'estado_id' => 26],
            ['nome' => 'Malhada dos Bois', 'estado_id' => 26],
            ['nome' => 'Malhador', 'estado_id' => 26],
            ['nome' => 'Maruim', 'estado_id' => 26],
            ['nome' => 'Moita Bonita', 'estado_id' => 26],
            ['nome' => 'Monte Alegre de Sergipe', 'estado_id' => 26],
            ['nome' => 'Muribeca', 'estado_id' => 26],
            ['nome' => 'Neópolis', 'estado_id' => 26],
            ['nome' => 'Nossa Senhora Aparecida', 'estado_id' => 26],
            ['nome' => 'Nossa Senhora da Glória', 'estado_id' => 26],
            ['nome' => 'Nossa Senhora das Dores', 'estado_id' => 26],
            ['nome' => 'Nossa Senhora de Lourdes', 'estado_id' => 26],
            ['nome' => 'Nossa Senhora do Socorro', 'estado_id' => 26],
            ['nome' => 'Pacatuba', 'estado_id' => 26],
            ['nome' => 'Pedra Mole', 'estado_id' => 26],
            ['nome' => 'Pedrinhas', 'estado_id' => 26],
            ['nome' => 'Pinhão', 'estado_id' => 26],
            ['nome' => 'Pirambu', 'estado_id' => 26],
            ['nome' => 'Poço Redondo', 'estado_id' => 26],
            ['nome' => 'Poço Verde', 'estado_id' => 26],
            ['nome' => 'Porto da Folha', 'estado_id' => 26],
            ['nome' => 'Propriá', 'estado_id' => 26],
            ['nome' => 'Riachão do Dantas', 'estado_id' => 26],
            ['nome' => 'Riachuelo', 'estado_id' => 26],
            ['nome' => 'Ribeirópolis', 'estado_id' => 26],
            ['nome' => 'Rosário do Catete', 'estado_id' => 26],
            ['nome' => 'Salgado', 'estado_id' => 26],
            ['nome' => 'Santa Luzia do Itanhy', 'estado_id' => 26],
            ['nome' => 'Santa Rosa de Lima', 'estado_id' => 26],
            ['nome' => 'Santana do São Francisco', 'estado_id' => 26],
            ['nome' => 'Santo Amaro das Brotas', 'estado_id' => 26],
            ['nome' => 'São Cristóvão', 'estado_id' => 26],
            ['nome' => 'São Domingos', 'estado_id' => 26],
            ['nome' => 'São Francisco', 'estado_id' => 26],
            ['nome' => 'São Miguel do Aleixo', 'estado_id' => 26],
            ['nome' => 'Simão Dias', 'estado_id' => 26],
            ['nome' => 'Siriri', 'estado_id' => 26],
            ['nome' => 'Telha', 'estado_id' => 26],
            ['nome' => 'Tobias Barreto', 'estado_id' => 26],
            ['nome' => 'Tomar do Geru', 'estado_id' => 26],
            ['nome' => 'Umbaúba', 'estado_id' => 26]
        ]);

        $this->command->info('Cidades de Sergipe importadas com sucesso!');
    }
}