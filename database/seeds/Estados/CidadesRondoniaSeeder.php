<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesRondoniaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Alta Floresta d`Oeste', 'estado_id' => 22],
            ['nome' => 'Alto Alegre dos Parecis', 'estado_id' => 22],
            ['nome' => 'Alto Paraíso', 'estado_id' => 22],
            ['nome' => 'Alvorada d`Oeste', 'estado_id' => 22],
            ['nome' => 'Ariquemes', 'estado_id' => 22],
            ['nome' => 'Buritis', 'estado_id' => 22],
            ['nome' => 'Cabixi', 'estado_id' => 22],
            ['nome' => 'Cacaulândia', 'estado_id' => 22],
            ['nome' => 'Cacoal', 'estado_id' => 22],
            ['nome' => 'Campo Novo de Rondônia', 'estado_id' => 22],
            ['nome' => 'Candeias do Jamari', 'estado_id' => 22],
            ['nome' => 'Castanheiras', 'estado_id' => 22],
            ['nome' => 'Cerejeiras', 'estado_id' => 22],
            ['nome' => 'Chupinguaia', 'estado_id' => 22],
            ['nome' => 'Colorado do Oeste', 'estado_id' => 22],
            ['nome' => 'Corumbiara', 'estado_id' => 22],
            ['nome' => 'Costa Marques', 'estado_id' => 22],
            ['nome' => 'Cujubim', 'estado_id' => 22],
            ['nome' => 'Espigão d`Oeste', 'estado_id' => 22],
            ['nome' => 'Governador Jorge Teixeira', 'estado_id' => 22],
            ['nome' => 'Guajará-Mirim', 'estado_id' => 22],
            ['nome' => 'Itapuã do Oeste', 'estado_id' => 22],
            ['nome' => 'Jaru', 'estado_id' => 22],
            ['nome' => 'Ji-Paraná', 'estado_id' => 22],
            ['nome' => 'Machadinho d`Oeste', 'estado_id' => 22],
            ['nome' => 'Ministro Andreazza', 'estado_id' => 22],
            ['nome' => 'Mirante da Serra', 'estado_id' => 22],
            ['nome' => 'Monte Negro', 'estado_id' => 22],
            ['nome' => 'Nova Brasilândia d`Oeste', 'estado_id' => 22],
            ['nome' => 'Nova Mamoré', 'estado_id' => 22],
            ['nome' => 'Nova União', 'estado_id' => 22],
            ['nome' => 'Novo Horizonte do Oeste', 'estado_id' => 22],
            ['nome' => 'Ouro Preto do Oeste', 'estado_id' => 22],
            ['nome' => 'Parecis', 'estado_id' => 22],
            ['nome' => 'Pimenta Bueno', 'estado_id' => 22],
            ['nome' => 'Pimenteiras do Oeste', 'estado_id' => 22],
            ['nome' => 'Porto Velho', 'estado_id' => 22],
            ['nome' => 'Presidente Médici', 'estado_id' => 22],
            ['nome' => 'Primavera de Rondônia', 'estado_id' => 22],
            ['nome' => 'Rio Crespo', 'estado_id' => 22],
            ['nome' => 'Rolim de Moura', 'estado_id' => 22],
            ['nome' => 'Santa Luzia d`Oeste', 'estado_id' => 22],
            ['nome' => 'São Felipe d`Oeste', 'estado_id' => 22],
            ['nome' => 'São Francisco do Guaporé', 'estado_id' => 22],
            ['nome' => 'São Miguel do Guaporé', 'estado_id' => 22],
            ['nome' => 'Seringueiras', 'estado_id' => 22],
            ['nome' => 'Teixeirópolis', 'estado_id' => 22],
            ['nome' => 'Theobroma', 'estado_id' => 22],
            ['nome' => 'Urupá', 'estado_id' => 22],
            ['nome' => 'Vale do Anari', 'estado_id' => 22],
            ['nome' => 'Vale do Paraíso', 'estado_id' => 22],
            ['nome' => 'Vilhena', 'estado_id' => 22]
        ]);

        $this->command->info('Cidades de Rondônia importadas com sucesso!');
    }
}