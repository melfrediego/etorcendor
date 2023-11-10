<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesAmazonasSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Alvarães', 'estado_id' => 4],
            ['nome' => 'Amaturá', 'estado_id' => 4],
            ['nome' => 'Anamã', 'estado_id' => 4],
            ['nome' => 'Anori', 'estado_id' => 4],
            ['nome' => 'Apuí', 'estado_id' => 4],
            ['nome' => 'Atalaia do Norte', 'estado_id' => 4],
            ['nome' => 'Autazes', 'estado_id' => 4],
            ['nome' => 'Barcelos', 'estado_id' => 4],
            ['nome' => 'Barreirinha', 'estado_id' => 4],
            ['nome' => 'Benjamin Constant', 'estado_id' => 4],
            ['nome' => 'Beruri', 'estado_id' => 4],
            ['nome' => 'Boa Vista do Ramos', 'estado_id' => 4],
            ['nome' => 'Boca do Acre', 'estado_id' => 4],
            ['nome' => 'Borba', 'estado_id' => 4],
            ['nome' => 'Caapiranga', 'estado_id' => 4],
            ['nome' => 'Canutama', 'estado_id' => 4],
            ['nome' => 'Carauari', 'estado_id' => 4],
            ['nome' => 'Careiro', 'estado_id' => 4],
            ['nome' => 'Careiro da Várzea', 'estado_id' => 4],
            ['nome' => 'Coari', 'estado_id' => 4],
            ['nome' => 'Codajás', 'estado_id' => 4],
            ['nome' => 'Eirunepé', 'estado_id' => 4],
            ['nome' => 'Envira', 'estado_id' => 4],
            ['nome' => 'Fonte Boa', 'estado_id' => 4],
            ['nome' => 'Guajará', 'estado_id' => 4],
            ['nome' => 'Humaitá', 'estado_id' => 4],
            ['nome' => 'Ipixuna', 'estado_id' => 4],
            ['nome' => 'Iranduba', 'estado_id' => 4],
            ['nome' => 'Itacoatiara', 'estado_id' => 4],
            ['nome' => 'Itamarati', 'estado_id' => 4],
            ['nome' => 'Itapiranga', 'estado_id' => 4],
            ['nome' => 'Japurá', 'estado_id' => 4],
            ['nome' => 'Juruá', 'estado_id' => 4],
            ['nome' => 'Jutaí', 'estado_id' => 4],
            ['nome' => 'Lábrea', 'estado_id' => 4],
            ['nome' => 'Manacapuru', 'estado_id' => 4],
            ['nome' => 'Manaquiri', 'estado_id' => 4],
            ['nome' => 'Manaus', 'estado_id' => 4],
            ['nome' => 'Manicoré', 'estado_id' => 4],
            ['nome' => 'Maraã', 'estado_id' => 4],
            ['nome' => 'Maués', 'estado_id' => 4],
            ['nome' => 'Nhamundá', 'estado_id' => 4],
            ['nome' => 'Nova Olinda do Norte', 'estado_id' => 4],
            ['nome' => 'Novo Airão', 'estado_id' => 4],
            ['nome' => 'Novo Aripuanã', 'estado_id' => 4],
            ['nome' => 'Parintins', 'estado_id' => 4],
            ['nome' => 'Pauini', 'estado_id' => 4],
            ['nome' => 'Presidente Figueiredo', 'estado_id' => 4],
            ['nome' => 'Rio Preto da Eva', 'estado_id' => 4],
            ['nome' => 'Santa Isabel do Rio Negro', 'estado_id' => 4],
            ['nome' => 'Santo Antônio do Içá', 'estado_id' => 4],
            ['nome' => 'São Gabriel da Cachoeira', 'estado_id' => 4],
            ['nome' => 'São Paulo de Olivença', 'estado_id' => 4],
            ['nome' => 'São Sebastião do Uatumã', 'estado_id' => 4],
            ['nome' => 'Silves', 'estado_id' => 4],
            ['nome' => 'Tabatinga', 'estado_id' => 4],
            ['nome' => 'Tapauá', 'estado_id' => 4],
            ['nome' => 'Tefé', 'estado_id' => 4],
            ['nome' => 'Tonantins', 'estado_id' => 4],
            ['nome' => 'Uarini', 'estado_id' => 4],
            ['nome' => 'Urucará', 'estado_id' => 4],
            ['nome' => 'Urucurituba', 'estado_id' => 4]
        ]);

        $this->command->info('Cidades do Amazonas importadas com sucesso!');
    }
}