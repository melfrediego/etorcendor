<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesCearaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Abaiara', 'estado_id' => 6],
            ['nome' => 'Acarape', 'estado_id' => 6],
            ['nome' => 'Acaraú', 'estado_id' => 6],
            ['nome' => 'Acopiara', 'estado_id' => 6],
            ['nome' => 'Aiuaba', 'estado_id' => 6],
            ['nome' => 'Alcântaras', 'estado_id' => 6],
            ['nome' => 'Altaneira', 'estado_id' => 6],
            ['nome' => 'Alto Santo', 'estado_id' => 6],
            ['nome' => 'Amontada', 'estado_id' => 6],
            ['nome' => 'Antonina do Norte', 'estado_id' => 6],
            ['nome' => 'Apuiarés', 'estado_id' => 6],
            ['nome' => 'Aquiraz', 'estado_id' => 6],
            ['nome' => 'Aracati', 'estado_id' => 6],
            ['nome' => 'Aracoiaba', 'estado_id' => 6],
            ['nome' => 'Ararendá', 'estado_id' => 6],
            ['nome' => 'Araripe', 'estado_id' => 6],
            ['nome' => 'Aratuba', 'estado_id' => 6],
            ['nome' => 'Arneiroz', 'estado_id' => 6],
            ['nome' => 'Assaré', 'estado_id' => 6],
            ['nome' => 'Aurora', 'estado_id' => 6],
            ['nome' => 'Baixio', 'estado_id' => 6],
            ['nome' => 'Banabuiú', 'estado_id' => 6],
            ['nome' => 'Barbalha', 'estado_id' => 6],
            ['nome' => 'Barreira', 'estado_id' => 6],
            ['nome' => 'Barro', 'estado_id' => 6],
            ['nome' => 'Barroquinha', 'estado_id' => 6],
            ['nome' => 'Baturité', 'estado_id' => 6],
            ['nome' => 'Beberibe', 'estado_id' => 6],
            ['nome' => 'Bela Cruz', 'estado_id' => 6],
            ['nome' => 'Boa Viagem', 'estado_id' => 6],
            ['nome' => 'Brejo Santo', 'estado_id' => 6],
            ['nome' => 'Camocim', 'estado_id' => 6],
            ['nome' => 'Campos Sales', 'estado_id' => 6],
            ['nome' => 'Canindé', 'estado_id' => 6],
            ['nome' => 'Capistrano', 'estado_id' => 6],
            ['nome' => 'Caridade', 'estado_id' => 6],
            ['nome' => 'Cariré', 'estado_id' => 6],
            ['nome' => 'Caririaçu', 'estado_id' => 6],
            ['nome' => 'Cariús', 'estado_id' => 6],
            ['nome' => 'Carnaubal', 'estado_id' => 6],
            ['nome' => 'Cascavel', 'estado_id' => 6],
            ['nome' => 'Catarina', 'estado_id' => 6],
            ['nome' => 'Catunda', 'estado_id' => 6],
            ['nome' => 'Caucaia', 'estado_id' => 6],
            ['nome' => 'Cedro', 'estado_id' => 6],
            ['nome' => 'Chaval', 'estado_id' => 6],
            ['nome' => 'Choró', 'estado_id' => 6],
            ['nome' => 'Chorozinho', 'estado_id' => 6],
            ['nome' => 'Coreaú', 'estado_id' => 6],
            ['nome' => 'Crateús', 'estado_id' => 6],
            ['nome' => 'Crato', 'estado_id' => 6],
            ['nome' => 'Croatá', 'estado_id' => 6],
            ['nome' => 'Cruz', 'estado_id' => 6],
            ['nome' => 'Deputado Irapuan Pinheiro', 'estado_id' => 6],
            ['nome' => 'Ererê', 'estado_id' => 6],
            ['nome' => 'Eusébio', 'estado_id' => 6],
            ['nome' => 'Farias Brito', 'estado_id' => 6],
            ['nome' => 'Forquilha', 'estado_id' => 6],
            ['nome' => 'Fortaleza', 'estado_id' => 6],
            ['nome' => 'Fortim', 'estado_id' => 6],
            ['nome' => 'Frecheirinha', 'estado_id' => 6],
            ['nome' => 'General Sampaio', 'estado_id' => 6],
            ['nome' => 'Graça', 'estado_id' => 6],
            ['nome' => 'Granja', 'estado_id' => 6],
            ['nome' => 'Granjeiro', 'estado_id' => 6],
            ['nome' => 'Groaíras', 'estado_id' => 6],
            ['nome' => 'Guaiúba', 'estado_id' => 6],
            ['nome' => 'Guaraciaba do Norte', 'estado_id' => 6],
            ['nome' => 'Guaramiranga', 'estado_id' => 6],
            ['nome' => 'Hidrolândia', 'estado_id' => 6],
            ['nome' => 'Horizonte', 'estado_id' => 6],
            ['nome' => 'Ibaretama', 'estado_id' => 6],
            ['nome' => 'Ibiapina', 'estado_id' => 6],
            ['nome' => 'Ibicuitinga', 'estado_id' => 6],
            ['nome' => 'Icapuí', 'estado_id' => 6],
            ['nome' => 'Icó', 'estado_id' => 6],
            ['nome' => 'Iguatu', 'estado_id' => 6],
            ['nome' => 'Independência', 'estado_id' => 6],
            ['nome' => 'Ipaporanga', 'estado_id' => 6],
            ['nome' => 'Ipaumirim', 'estado_id' => 6],
            ['nome' => 'Ipu', 'estado_id' => 6],
            ['nome' => 'Ipueiras', 'estado_id' => 6],
            ['nome' => 'Iracema', 'estado_id' => 6],
            ['nome' => 'Irauçuba', 'estado_id' => 6],
            ['nome' => 'Itaiçaba', 'estado_id' => 6],
            ['nome' => 'Itaitinga', 'estado_id' => 6],
            ['nome' => 'Itapagé', 'estado_id' => 6],
            ['nome' => 'Itapipoca', 'estado_id' => 6],
            ['nome' => 'Itapiúna', 'estado_id' => 6],
            ['nome' => 'Itarema', 'estado_id' => 6],
            ['nome' => 'Itatira', 'estado_id' => 6],
            ['nome' => 'Jaguaretama', 'estado_id' => 6],
            ['nome' => 'Jaguaribara', 'estado_id' => 6],
            ['nome' => 'Jaguaribe', 'estado_id' => 6],
            ['nome' => 'Jaguaruana', 'estado_id' => 6],
            ['nome' => 'Jardim', 'estado_id' => 6],
            ['nome' => 'Jati', 'estado_id' => 6],
            ['nome' => 'Jijoca de Jericoacoara', 'estado_id' => 6],
            ['nome' => 'Juazeiro do Norte', 'estado_id' => 6],
            ['nome' => 'Jucás', 'estado_id' => 6],
            ['nome' => 'Lavras da Mangabeira', 'estado_id' => 6],
            ['nome' => 'Limoeiro do Norte', 'estado_id' => 6],
            ['nome' => 'Madalena', 'estado_id' => 6],
            ['nome' => 'Maracanaú', 'estado_id' => 6],
            ['nome' => 'Maranguape', 'estado_id' => 6],
            ['nome' => 'Marco', 'estado_id' => 6],
            ['nome' => 'Martinópole', 'estado_id' => 6],
            ['nome' => 'Massapê', 'estado_id' => 6],
            ['nome' => 'Mauriti', 'estado_id' => 6],
            ['nome' => 'Meruoca', 'estado_id' => 6],
            ['nome' => 'Milagres', 'estado_id' => 6],
            ['nome' => 'Milhã', 'estado_id' => 6],
            ['nome' => 'Miraíma', 'estado_id' => 6],
            ['nome' => 'Missão Velha', 'estado_id' => 6],
            ['nome' => 'Mombaça', 'estado_id' => 6],
            ['nome' => 'Monsenhor Tabosa', 'estado_id' => 6],
            ['nome' => 'Morada Nova', 'estado_id' => 6],
            ['nome' => 'Moraújo', 'estado_id' => 6],
            ['nome' => 'Morrinhos', 'estado_id' => 6],
            ['nome' => 'Mucambo', 'estado_id' => 6],
            ['nome' => 'Mulungu', 'estado_id' => 6],
            ['nome' => 'Nova Olinda', 'estado_id' => 6],
            ['nome' => 'Nova Russas', 'estado_id' => 6],
            ['nome' => 'Novo Oriente', 'estado_id' => 6],
            ['nome' => 'Ocara', 'estado_id' => 6],
            ['nome' => 'Orós', 'estado_id' => 6],
            ['nome' => 'Pacajus', 'estado_id' => 6],
            ['nome' => 'Pacatuba', 'estado_id' => 6],
            ['nome' => 'Pacoti', 'estado_id' => 6],
            ['nome' => 'Pacujá', 'estado_id' => 6],
            ['nome' => 'Palhano', 'estado_id' => 6],
            ['nome' => 'Palmácia', 'estado_id' => 6],
            ['nome' => 'Paracuru', 'estado_id' => 6],
            ['nome' => 'Paraipaba', 'estado_id' => 6],
            ['nome' => 'Parambu', 'estado_id' => 6],
            ['nome' => 'Paramoti', 'estado_id' => 6],
            ['nome' => 'Pedra Branca', 'estado_id' => 6],
            ['nome' => 'Penaforte', 'estado_id' => 6],
            ['nome' => 'Pentecoste', 'estado_id' => 6],
            ['nome' => 'Pereiro', 'estado_id' => 6],
            ['nome' => 'Pindoretama', 'estado_id' => 6],
            ['nome' => 'Piquet Carneiro', 'estado_id' => 6],
            ['nome' => 'Pires Ferreira', 'estado_id' => 6],
            ['nome' => 'Poranga', 'estado_id' => 6],
            ['nome' => 'Porteiras', 'estado_id' => 6],
            ['nome' => 'Potengi', 'estado_id' => 6],
            ['nome' => 'Potiretama', 'estado_id' => 6],
            ['nome' => 'Quiterianópolis', 'estado_id' => 6],
            ['nome' => 'Quixadá', 'estado_id' => 6],
            ['nome' => 'Quixelô', 'estado_id' => 6],
            ['nome' => 'Quixeramobim', 'estado_id' => 6],
            ['nome' => 'Quixeré', 'estado_id' => 6],
            ['nome' => 'Redenção', 'estado_id' => 6],
            ['nome' => 'Reriutaba', 'estado_id' => 6],
            ['nome' => 'Russas', 'estado_id' => 6],
            ['nome' => 'Saboeiro', 'estado_id' => 6],
            ['nome' => 'Salitre', 'estado_id' => 6],
            ['nome' => 'Santa Quitéria', 'estado_id' => 6],
            ['nome' => 'Santana do Acaraú', 'estado_id' => 6],
            ['nome' => 'Santana do Cariri', 'estado_id' => 6],
            ['nome' => 'São Benedito', 'estado_id' => 6],
            ['nome' => 'São Gonçalo do Amarante', 'estado_id' => 6],
            ['nome' => 'São João do Jaguaribe', 'estado_id' => 6],
            ['nome' => 'São Luís do Curu', 'estado_id' => 6],
            ['nome' => 'Senador Pompeu', 'estado_id' => 6],
            ['nome' => 'Senador Sá', 'estado_id' => 6],
            ['nome' => 'Sobral', 'estado_id' => 6],
            ['nome' => 'Solonópole', 'estado_id' => 6],
            ['nome' => 'Tabuleiro do Norte', 'estado_id' => 6],
            ['nome' => 'Tamboril', 'estado_id' => 6],
            ['nome' => 'Tarrafas', 'estado_id' => 6],
            ['nome' => 'Tauá', 'estado_id' => 6],
            ['nome' => 'Tejuçuoca', 'estado_id' => 6],
            ['nome' => 'Tianguá', 'estado_id' => 6],
            ['nome' => 'Trairi', 'estado_id' => 6],
            ['nome' => 'Tururu', 'estado_id' => 6],
            ['nome' => 'Ubajara', 'estado_id' => 6],
            ['nome' => 'Umari', 'estado_id' => 6],
            ['nome' => 'Umirim', 'estado_id' => 6],
            ['nome' => 'Uruburetama', 'estado_id' => 6],
            ['nome' => 'Uruoca', 'estado_id' => 6],
            ['nome' => 'Varjota', 'estado_id' => 6],
            ['nome' => 'Várzea Alegre', 'estado_id' => 6],
            ['nome' => 'Viçosa do Ceará', 'estado_id' => 6]
        ]);

        $this->command->info('Cidades do Ceará importadas com sucesso!');
    }
}