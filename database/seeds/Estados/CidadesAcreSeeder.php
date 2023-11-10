<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesAcreSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
            ['nome' => 'Acrelândia', 'estado_id' => 1],
            ['nome' => 'Assis Brasil', 'estado_id' => 1],
            ['nome' => 'Brasiléia', 'estado_id' => 1],
            ['nome' => 'Bujari', 'estado_id' => 1],
            ['nome' => 'Capixaba', 'estado_id' => 1],
            ['nome' => 'Cruzeiro do Sul', 'estado_id' => 1],
            ['nome' => 'Epitaciolândia', 'estado_id' => 1],
            ['nome' => 'Feijó', 'estado_id' => 1],
            ['nome' => 'Jordão', 'estado_id' => 1],
            ['nome' => 'Mâncio Lima', 'estado_id' => 1],
            ['nome' => 'Manoel Urbano', 'estado_id' => 1],
            ['nome' => 'Marechal Thaumaturgo', 'estado_id' => 1],
            ['nome' => 'Plácido de Castro', 'estado_id' => 1],
            ['nome' => 'Porto Acre', 'estado_id' => 1],
            ['nome' => 'Porto Walter', 'estado_id' => 1],
            ['nome' => 'Rio Branco', 'estado_id' => 1],
            ['nome' => 'Rodrigues Alves', 'estado_id' => 1],
            ['nome' => 'Santa Rosa do Purus', 'estado_id' => 1],
            ['nome' => 'Sena Madureira', 'estado_id' => 1],
            ['nome' => 'Senador Guiomard', 'estado_id' => 1],
            ['nome' => 'Tarauacá', 'estado_id' => 1],
            ['nome' => 'Xapuri', 'estado_id' => 1]
        ]);

        $this->command->info('Cidades do Acre importadas com sucesso!');
    }
}