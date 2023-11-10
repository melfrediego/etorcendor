<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesAmapaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Amapá', 'estado_id' => 3],
			['nome' => 'Calçoene', 'estado_id' => 3],
			['nome' => 'Cutias', 'estado_id' => 3],
			['nome' => 'Ferreira Gomes', 'estado_id' => 3],
			['nome' => 'Itaubal', 'estado_id' => 3],
			['nome' => 'Laranjal do Jari', 'estado_id' => 3],
			['nome' => 'Macapá', 'estado_id' => 3],
			['nome' => 'Mazagão', 'estado_id' => 3],
			['nome' => 'Oiapoque', 'estado_id' => 3],
			['nome' => 'Pedra Branca do Amaparí', 'estado_id' => 3],
			['nome' => 'Porto Grande', 'estado_id' => 3],
			['nome' => 'Pracuúba', 'estado_id' => 3],
			['nome' => 'Santana', 'estado_id' => 3],
			['nome' => 'Serra do Navio', 'estado_id' => 3],
			['nome' => 'Tartarugalzinho', 'estado_id' => 3],
			['nome' => 'Vitória do Jari', 'estado_id' => 3]
        ]);

        $this->command->info('Cidades do Amapá importadas com sucesso!');
    }
}