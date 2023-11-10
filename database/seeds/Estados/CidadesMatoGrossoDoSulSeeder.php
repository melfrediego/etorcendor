<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesMatoGrossoDoSulSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Água Clara', 'estado_id' => 12],
            ['nome' => 'Alcinópolis', 'estado_id' => 12],
            ['nome' => 'Amambaí', 'estado_id' => 12],
            ['nome' => 'Anastácio', 'estado_id' => 12],
            ['nome' => 'Anaurilândia', 'estado_id' => 12],
            ['nome' => 'Angélica', 'estado_id' => 12],
            ['nome' => 'Antônio João', 'estado_id' => 12],
            ['nome' => 'Aparecida do Taboado', 'estado_id' => 12],
            ['nome' => 'Aquidauana', 'estado_id' => 12],
            ['nome' => 'Aral Moreira', 'estado_id' => 12],
            ['nome' => 'Bandeirantes', 'estado_id' => 12],
            ['nome' => 'Bataguassu', 'estado_id' => 12],
            ['nome' => 'Bataiporã', 'estado_id' => 12],
            ['nome' => 'Bela Vista', 'estado_id' => 12],
            ['nome' => 'Bodoquena', 'estado_id' => 12],
            ['nome' => 'Bonito', 'estado_id' => 12],
            ['nome' => 'Brasilândia', 'estado_id' => 12],
            ['nome' => 'Caarapó', 'estado_id' => 12],
            ['nome' => 'Camapuã', 'estado_id' => 12],
            ['nome' => 'Campo Grande', 'estado_id' => 12],
            ['nome' => 'Caracol', 'estado_id' => 12],
            ['nome' => 'Cassilândia', 'estado_id' => 12],
            ['nome' => 'Chapadão do Sul', 'estado_id' => 12],
            ['nome' => 'Corguinho', 'estado_id' => 12],
            ['nome' => 'Coronel Sapucaia', 'estado_id' => 12],
            ['nome' => 'Corumbá', 'estado_id' => 12],
            ['nome' => 'Costa Rica', 'estado_id' => 12],
            ['nome' => 'Coxim', 'estado_id' => 12],
            ['nome' => 'Deodápolis', 'estado_id' => 12],
            ['nome' => 'Dois Irmãos do Buriti', 'estado_id' => 12],
            ['nome' => 'Douradina', 'estado_id' => 12],
            ['nome' => 'Dourados', 'estado_id' => 12],
            ['nome' => 'Eldorado', 'estado_id' => 12],
            ['nome' => 'Fátima do Sul', 'estado_id' => 12],
            ['nome' => 'Figueirão', 'estado_id' => 12],
            ['nome' => 'Glória de Dourados', 'estado_id' => 12],
            ['nome' => 'Guia Lopes da Laguna', 'estado_id' => 12],
            ['nome' => 'Iguatemi', 'estado_id' => 12],
            ['nome' => 'Inocência', 'estado_id' => 12],
            ['nome' => 'Itaporã', 'estado_id' => 12],
            ['nome' => 'Itaquiraí', 'estado_id' => 12],
            ['nome' => 'Ivinhema', 'estado_id' => 12],
            ['nome' => 'Japorã', 'estado_id' => 12],
            ['nome' => 'Jaraguari', 'estado_id' => 12],
            ['nome' => 'Jardim', 'estado_id' => 12],
            ['nome' => 'Jateí', 'estado_id' => 12],
            ['nome' => 'Juti', 'estado_id' => 12],
            ['nome' => 'Ladário', 'estado_id' => 12],
            ['nome' => 'Laguna Carapã', 'estado_id' => 12],
            ['nome' => 'Maracaju', 'estado_id' => 12],
            ['nome' => 'Miranda', 'estado_id' => 12],
            ['nome' => 'Mundo Novo', 'estado_id' => 12],
            ['nome' => 'Naviraí', 'estado_id' => 12],
            ['nome' => 'Nioaque', 'estado_id' => 12],
            ['nome' => 'Nova Alvorada do Sul', 'estado_id' => 12],
            ['nome' => 'Nova Andradina', 'estado_id' => 12],
            ['nome' => 'Novo Horizonte do Sul', 'estado_id' => 12],
            ['nome' => 'Paranaíba', 'estado_id' => 12],
            ['nome' => 'Paranhos', 'estado_id' => 12],
            ['nome' => 'Pedro Gomes', 'estado_id' => 12],
            ['nome' => 'Ponta Porã', 'estado_id' => 12],
            ['nome' => 'Porto Murtinho', 'estado_id' => 12],
            ['nome' => 'Ribas do Rio Pardo', 'estado_id' => 12],
            ['nome' => 'Rio Brilhante', 'estado_id' => 12],
            ['nome' => 'Rio Negro', 'estado_id' => 12],
            ['nome' => 'Rio Verde de Mato Grosso', 'estado_id' => 12],
            ['nome' => 'Rochedo', 'estado_id' => 12],
            ['nome' => 'Santa Rita do Pardo', 'estado_id' => 12],
            ['nome' => 'São Gabriel do Oeste', 'estado_id' => 12],
            ['nome' => 'Selvíria', 'estado_id' => 12],
            ['nome' => 'Sete Quedas', 'estado_id' => 12],
            ['nome' => 'Sidrolândia', 'estado_id' => 12],
            ['nome' => 'Sonora', 'estado_id' => 12],
            ['nome' => 'Tacuru', 'estado_id' => 12],
            ['nome' => 'Taquarussu', 'estado_id' => 12],
            ['nome' => 'Terenos', 'estado_id' => 12],
            ['nome' => 'Três Lagoas', 'estado_id' => 12],
            ['nome' => 'Vicentina', 'estado_id' => 12]
        ]);

        $this->command->info('Cidades do Mato Grosso do Sul importadas com sucesso!');
    }
}