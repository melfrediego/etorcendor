<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesRoraimaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Alto Alegre', 'estado_id' => 23],
            ['nome' => 'Amajari', 'estado_id' => 23],
            ['nome' => 'Boa Vista', 'estado_id' => 23],
            ['nome' => 'Bonfim', 'estado_id' => 23],
            ['nome' => 'Cantá', 'estado_id' => 23],
            ['nome' => 'Caracaraí', 'estado_id' => 23],
            ['nome' => 'Caroebe', 'estado_id' => 23],
            ['nome' => 'Iracema', 'estado_id' => 23],
            ['nome' => 'Mucajaí', 'estado_id' => 23],
            ['nome' => 'Normandia', 'estado_id' => 23],
            ['nome' => 'Pacaraima', 'estado_id' => 23],
            ['nome' => 'Rorainópolis', 'estado_id' => 23],
            ['nome' => 'São João da Baliza', 'estado_id' => 23],
            ['nome' => 'São Luiz', 'estado_id' => 23],
            ['nome' => 'Uiramutã', 'estado_id' => 23]
        ]);

        $this->command->info('Cidades de Roraima importadas com sucesso!');
    }
}