<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesEspiritoSantoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Afonso Cláudio', 'estado_id' => 8],
            ['nome' => 'Água Doce do Norte', 'estado_id' => 8],
            ['nome' => 'Águia Branca', 'estado_id' => 8],
            ['nome' => 'Alegre', 'estado_id' => 8],
            ['nome' => 'Alfredo Chaves', 'estado_id' => 8],
            ['nome' => 'Alto Rio Novo', 'estado_id' => 8],
            ['nome' => 'Anchieta', 'estado_id' => 8],
            ['nome' => 'Apiacá', 'estado_id' => 8],
            ['nome' => 'Aracruz', 'estado_id' => 8],
            ['nome' => 'Atilio Vivacqua', 'estado_id' => 8],
            ['nome' => 'Baixo Guandu', 'estado_id' => 8],
            ['nome' => 'Barra de São Francisco', 'estado_id' => 8],
            ['nome' => 'Boa Esperança', 'estado_id' => 8],
            ['nome' => 'Bom Jesus do Norte', 'estado_id' => 8],
            ['nome' => 'Brejetuba', 'estado_id' => 8],
            ['nome' => 'Cachoeiro de Itapemirim', 'estado_id' => 8],
            ['nome' => 'Cariacica', 'estado_id' => 8],
            ['nome' => 'Castelo', 'estado_id' => 8],
            ['nome' => 'Colatina', 'estado_id' => 8],
            ['nome' => 'Conceição da Barra', 'estado_id' => 8],
            ['nome' => 'Conceição do Castelo', 'estado_id' => 8],
            ['nome' => 'Divino de São Lourenço', 'estado_id' => 8],
            ['nome' => 'Domingos Martins', 'estado_id' => 8],
            ['nome' => 'Dores do Rio Preto', 'estado_id' => 8],
            ['nome' => 'Ecoporanga', 'estado_id' => 8],
            ['nome' => 'Fundão', 'estado_id' => 8],
            ['nome' => 'Governador Lindenberg', 'estado_id' => 8],
            ['nome' => 'Guaçuí', 'estado_id' => 8],
            ['nome' => 'Guarapari', 'estado_id' => 8],
            ['nome' => 'Ibatiba', 'estado_id' => 8],
            ['nome' => 'Ibiraçu', 'estado_id' => 8],
            ['nome' => 'Ibitirama', 'estado_id' => 8],
            ['nome' => 'Iconha', 'estado_id' => 8],
            ['nome' => 'Irupi', 'estado_id' => 8],
            ['nome' => 'Itaguaçu', 'estado_id' => 8],
            ['nome' => 'Itapemirim', 'estado_id' => 8],
            ['nome' => 'Itarana', 'estado_id' => 8],
            ['nome' => 'Iúna', 'estado_id' => 8],
            ['nome' => 'Jaguaré', 'estado_id' => 8],
            ['nome' => 'Jerônimo Monteiro', 'estado_id' => 8],
            ['nome' => 'João Neiva', 'estado_id' => 8],
            ['nome' => 'Laranja da Terra', 'estado_id' => 8],
            ['nome' => 'Linhares', 'estado_id' => 8],
            ['nome' => 'Mantenópolis', 'estado_id' => 8],
            ['nome' => 'Marataízes', 'estado_id' => 8],
            ['nome' => 'Marechal Floriano', 'estado_id' => 8],
            ['nome' => 'Marilândia', 'estado_id' => 8],
            ['nome' => 'Mimoso do Sul', 'estado_id' => 8],
            ['nome' => 'Montanha', 'estado_id' => 8],
            ['nome' => 'Mucurici', 'estado_id' => 8],
            ['nome' => 'Muniz Freire', 'estado_id' => 8],
            ['nome' => 'Muqui', 'estado_id' => 8],
            ['nome' => 'Nova Venécia', 'estado_id' => 8],
            ['nome' => 'Pancas', 'estado_id' => 8],
            ['nome' => 'Pedro Canário', 'estado_id' => 8],
            ['nome' => 'Pinheiros', 'estado_id' => 8],
            ['nome' => 'Piúma', 'estado_id' => 8],
            ['nome' => 'Ponto Belo', 'estado_id' => 8],
            ['nome' => 'Presidente Kennedy', 'estado_id' => 8],
            ['nome' => 'Rio Bananal', 'estado_id' => 8],
            ['nome' => 'Rio Novo do Sul', 'estado_id' => 8],
            ['nome' => 'Santa Leopoldina', 'estado_id' => 8],
            ['nome' => 'Santa Maria de Jetibá', 'estado_id' => 8],
            ['nome' => 'Santa Teresa', 'estado_id' => 8],
            ['nome' => 'São Domingos do Norte', 'estado_id' => 8],
            ['nome' => 'São Gabriel da Palha', 'estado_id' => 8],
            ['nome' => 'São José do Calçado', 'estado_id' => 8],
            ['nome' => 'São Mateus', 'estado_id' => 8],
            ['nome' => 'São Roque do Canaã', 'estado_id' => 8],
            ['nome' => 'Serra', 'estado_id' => 8],
            ['nome' => 'Sooretama', 'estado_id' => 8],
            ['nome' => 'Vargem Alta', 'estado_id' => 8],
            ['nome' => 'Venda Nova do Imigrante', 'estado_id' => 8],
            ['nome' => 'Viana', 'estado_id' => 8],
            ['nome' => 'Vila Pavão', 'estado_id' => 8],
            ['nome' => 'Vila Valério', 'estado_id' => 8],
            ['nome' => 'Vila Velha', 'estado_id' => 8],
            ['nome' => 'Vitória', 'estado_id' => 8]
        ]);

        $this->command->info('Cidades do Espírito Santo importadas com sucesso!');
    }
}