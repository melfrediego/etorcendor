<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesMaranhaoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Açailândia', 'estado_id' => 10],
            ['nome' => 'Afonso Cunha', 'estado_id' => 10],
            ['nome' => 'Água Doce do Maranhão', 'estado_id' => 10],
            ['nome' => 'Alcântara', 'estado_id' => 10],
            ['nome' => 'Aldeias Altas', 'estado_id' => 10],
            ['nome' => 'Altamira do Maranhão', 'estado_id' => 10],
            ['nome' => 'Alto Alegre do Maranhão', 'estado_id' => 10],
            ['nome' => 'Alto Alegre do Pindaré', 'estado_id' => 10],
            ['nome' => 'Alto Parnaíba', 'estado_id' => 10],
            ['nome' => 'Amapá do Maranhão', 'estado_id' => 10],
            ['nome' => 'Amarante do Maranhão', 'estado_id' => 10],
            ['nome' => 'Anajatuba', 'estado_id' => 10],
            ['nome' => 'Anapurus', 'estado_id' => 10],
            ['nome' => 'Apicum-Açu', 'estado_id' => 10],
            ['nome' => 'Araguanã', 'estado_id' => 10],
            ['nome' => 'Araioses', 'estado_id' => 10],
            ['nome' => 'Arame', 'estado_id' => 10],
            ['nome' => 'Arari', 'estado_id' => 10],
            ['nome' => 'Axixá', 'estado_id' => 10],
            ['nome' => 'Bacabal', 'estado_id' => 10],
            ['nome' => 'Bacabeira', 'estado_id' => 10],
            ['nome' => 'Bacuri', 'estado_id' => 10],
            ['nome' => 'Bacurituba', 'estado_id' => 10],
            ['nome' => 'Balsas', 'estado_id' => 10],
            ['nome' => 'Barão de Grajaú', 'estado_id' => 10],
            ['nome' => 'Barra do Corda', 'estado_id' => 10],
            ['nome' => 'Barreirinhas', 'estado_id' => 10],
            ['nome' => 'Bela Vista do Maranhão', 'estado_id' => 10],
            ['nome' => 'Belágua', 'estado_id' => 10],
            ['nome' => 'Benedito Leite', 'estado_id' => 10],
            ['nome' => 'Bequimão', 'estado_id' => 10],
            ['nome' => 'Bernardo do Mearim', 'estado_id' => 10],
            ['nome' => 'Boa Vista do Gurupi', 'estado_id' => 10],
            ['nome' => 'Bom Jardim', 'estado_id' => 10],
            ['nome' => 'Bom Jesus das Selvas', 'estado_id' => 10],
            ['nome' => 'Bom Lugar', 'estado_id' => 10],
            ['nome' => 'Brejo', 'estado_id' => 10],
            ['nome' => 'Brejo de Areia', 'estado_id' => 10],
            ['nome' => 'Buriti', 'estado_id' => 10],
            ['nome' => 'Buriti Bravo', 'estado_id' => 10],
            ['nome' => 'Buriticupu', 'estado_id' => 10],
            ['nome' => 'Buritirana', 'estado_id' => 10],
            ['nome' => 'Cachoeira Grande', 'estado_id' => 10],
            ['nome' => 'Cajapió', 'estado_id' => 10],
            ['nome' => 'Cajari', 'estado_id' => 10],
            ['nome' => 'Campestre do Maranhão', 'estado_id' => 10],
            ['nome' => 'Cândido Mendes', 'estado_id' => 10],
            ['nome' => 'Cantanhede', 'estado_id' => 10],
            ['nome' => 'Capinzal do Norte', 'estado_id' => 10],
            ['nome' => 'Carolina', 'estado_id' => 10],
            ['nome' => 'Carutapera', 'estado_id' => 10],
            ['nome' => 'Caxias', 'estado_id' => 10],
            ['nome' => 'Cedral', 'estado_id' => 10],
            ['nome' => 'Central do Maranhão', 'estado_id' => 10],
            ['nome' => 'Centro do Guilherme', 'estado_id' => 10],
            ['nome' => 'Centro Novo do Maranhão', 'estado_id' => 10],
            ['nome' => 'Chapadinha', 'estado_id' => 10],
            ['nome' => 'Cidelândia', 'estado_id' => 10],
            ['nome' => 'Codó', 'estado_id' => 10],
            ['nome' => 'Coelho Neto', 'estado_id' => 10],
            ['nome' => 'Colinas', 'estado_id' => 10],
            ['nome' => 'Conceição do Lago-Açu', 'estado_id' => 10],
            ['nome' => 'Coroatá', 'estado_id' => 10],
            ['nome' => 'Cururupu', 'estado_id' => 10],
            ['nome' => 'Davinópolis', 'estado_id' => 10],
            ['nome' => 'Dom Pedro', 'estado_id' => 10],
            ['nome' => 'Duque Bacelar', 'estado_id' => 10],
            ['nome' => 'Esperantinópolis', 'estado_id' => 10],
            ['nome' => 'Estreito', 'estado_id' => 10],
            ['nome' => 'Feira Nova do Maranhão', 'estado_id' => 10],
            ['nome' => 'Fernando Falcão', 'estado_id' => 10],
            ['nome' => 'Formosa da Serra Negra', 'estado_id' => 10],
            ['nome' => 'Fortaleza dos Nogueiras', 'estado_id' => 10],
            ['nome' => 'Fortuna', 'estado_id' => 10],
            ['nome' => 'Godofredo Viana', 'estado_id' => 10],
            ['nome' => 'Gonçalves Dias', 'estado_id' => 10],
            ['nome' => 'Governador Archer', 'estado_id' => 10],
            ['nome' => 'Governador Edison Lobão', 'estado_id' => 10],
            ['nome' => 'Governador Eugênio Barros', 'estado_id' => 10],
            ['nome' => 'Governador Luiz Rocha', 'estado_id' => 10],
            ['nome' => 'Governador Newton Bello', 'estado_id' => 10],
            ['nome' => 'Governador Nunes Freire', 'estado_id' => 10],
            ['nome' => 'Graça Aranha', 'estado_id' => 10],
            ['nome' => 'Grajaú', 'estado_id' => 10],
            ['nome' => 'Guimarães', 'estado_id' => 10],
            ['nome' => 'Humberto de Campos', 'estado_id' => 10],
            ['nome' => 'Icatu', 'estado_id' => 10],
            ['nome' => 'Igarapé do Meio', 'estado_id' => 10],
            ['nome' => 'Igarapé Grande', 'estado_id' => 10],
            ['nome' => 'Imperatriz', 'estado_id' => 10],
            ['nome' => 'Itaipava do Grajaú', 'estado_id' => 10],
            ['nome' => 'Itapecuru Mirim', 'estado_id' => 10],
            ['nome' => 'Itinga do Maranhão', 'estado_id' => 10],
            ['nome' => 'Jatobá', 'estado_id' => 10],
            ['nome' => 'Jenipapo dos Vieiras', 'estado_id' => 10],
            ['nome' => 'João Lisboa', 'estado_id' => 10],
            ['nome' => 'Joselândia', 'estado_id' => 10],
            ['nome' => 'Junco do Maranhão', 'estado_id' => 10],
            ['nome' => 'Lago da Pedra', 'estado_id' => 10],
            ['nome' => 'Lago do Junco', 'estado_id' => 10],
            ['nome' => 'Lago dos Rodrigues', 'estado_id' => 10],
            ['nome' => 'Lago Verde', 'estado_id' => 10],
            ['nome' => 'Lagoa do Mato', 'estado_id' => 10],
            ['nome' => 'Lagoa Grande do Maranhão', 'estado_id' => 10],
            ['nome' => 'Lajeado Novo', 'estado_id' => 10],
            ['nome' => 'Lima Campos', 'estado_id' => 10],
            ['nome' => 'Loreto', 'estado_id' => 10],
            ['nome' => 'Luís Domingues', 'estado_id' => 10],
            ['nome' => 'Magalhães de Almeida', 'estado_id' => 10],
            ['nome' => 'Maracaçumé', 'estado_id' => 10],
            ['nome' => 'Marajá do Sena', 'estado_id' => 10],
            ['nome' => 'Maranhãozinho', 'estado_id' => 10],
            ['nome' => 'Mata Roma', 'estado_id' => 10],
            ['nome' => 'Matinha', 'estado_id' => 10],
            ['nome' => 'Matões', 'estado_id' => 10],
            ['nome' => 'Matões do Norte', 'estado_id' => 10],
            ['nome' => 'Milagres do Maranhão', 'estado_id' => 10],
            ['nome' => 'Mirador', 'estado_id' => 10],
            ['nome' => 'Miranda do Norte', 'estado_id' => 10],
            ['nome' => 'Mirinzal', 'estado_id' => 10],
            ['nome' => 'Monção', 'estado_id' => 10],
            ['nome' => 'Montes Altos', 'estado_id' => 10],
            ['nome' => 'Morros', 'estado_id' => 10],
            ['nome' => 'Nina Rodrigues', 'estado_id' => 10],
            ['nome' => 'Nova Colinas', 'estado_id' => 10],
            ['nome' => 'Nova Iorque', 'estado_id' => 10],
            ['nome' => 'Nova Olinda do Maranhão', 'estado_id' => 10],
            ['nome' => 'Olho d`Água das Cunhãs', 'estado_id' => 10],
            ['nome' => 'Olinda Nova do Maranhão', 'estado_id' => 10],
            ['nome' => 'Paço do Lumiar', 'estado_id' => 10],
            ['nome' => 'Palmeirândia', 'estado_id' => 10],
            ['nome' => 'Paraibano', 'estado_id' => 10],
            ['nome' => 'Parnarama', 'estado_id' => 10],
            ['nome' => 'Passagem Franca', 'estado_id' => 10],
            ['nome' => 'Pastos Bons', 'estado_id' => 10],
            ['nome' => 'Paulino Neves', 'estado_id' => 10],
            ['nome' => 'Paulo Ramos', 'estado_id' => 10],
            ['nome' => 'Pedreiras', 'estado_id' => 10],
            ['nome' => 'Pedro do Rosário', 'estado_id' => 10],
            ['nome' => 'Penalva', 'estado_id' => 10],
            ['nome' => 'Peri Mirim', 'estado_id' => 10],
            ['nome' => 'Peritoró', 'estado_id' => 10],
            ['nome' => 'Pindaré-Mirim', 'estado_id' => 10],
            ['nome' => 'Pinheiro', 'estado_id' => 10],
            ['nome' => 'Pio XII', 'estado_id' => 10],
            ['nome' => 'Pirapemas', 'estado_id' => 10],
            ['nome' => 'Poção de Pedras', 'estado_id' => 10],
            ['nome' => 'Porto Franco', 'estado_id' => 10],
            ['nome' => 'Porto Rico do Maranhão', 'estado_id' => 10],
            ['nome' => 'Presidente Dutra', 'estado_id' => 10],
            ['nome' => 'Presidente Juscelino', 'estado_id' => 10],
            ['nome' => 'Presidente Médici', 'estado_id' => 10],
            ['nome' => 'Presidente Sarney', 'estado_id' => 10],
            ['nome' => 'Presidente Vargas', 'estado_id' => 10],
            ['nome' => 'Primeira Cruz', 'estado_id' => 10],
            ['nome' => 'Raposa', 'estado_id' => 10],
            ['nome' => 'Riachão', 'estado_id' => 10],
            ['nome' => 'Ribamar Fiquene', 'estado_id' => 10],
            ['nome' => 'Rosário', 'estado_id' => 10],
            ['nome' => 'Sambaíba', 'estado_id' => 10],
            ['nome' => 'Santa Filomena do Maranhão', 'estado_id' => 10],
            ['nome' => 'Santa Helena', 'estado_id' => 10],
            ['nome' => 'Santa Inês', 'estado_id' => 10],
            ['nome' => 'Santa Luzia', 'estado_id' => 10],
            ['nome' => 'Santa Luzia do Paruá', 'estado_id' => 10],
            ['nome' => 'Santa Quitéria do Maranhão', 'estado_id' => 10],
            ['nome' => 'Santa Rita', 'estado_id' => 10],
            ['nome' => 'Santana do Maranhão', 'estado_id' => 10],
            ['nome' => 'Santo Amaro do Maranhão', 'estado_id' => 10],
            ['nome' => 'Santo Antônio dos Lopes', 'estado_id' => 10],
            ['nome' => 'São Benedito do Rio Preto', 'estado_id' => 10],
            ['nome' => 'São Bento', 'estado_id' => 10],
            ['nome' => 'São Bernardo', 'estado_id' => 10],
            ['nome' => 'São Domingos do Azeitão', 'estado_id' => 10],
            ['nome' => 'São Domingos do Maranhão', 'estado_id' => 10],
            ['nome' => 'São Félix de Balsas', 'estado_id' => 10],
            ['nome' => 'São Francisco do Brejão', 'estado_id' => 10],
            ['nome' => 'São Francisco do Maranhão', 'estado_id' => 10],
            ['nome' => 'São João Batista', 'estado_id' => 10],
            ['nome' => 'São João do Carú', 'estado_id' => 10],
            ['nome' => 'São João do Paraíso', 'estado_id' => 10],
            ['nome' => 'São João do Soter', 'estado_id' => 10],
            ['nome' => 'São João dos Patos', 'estado_id' => 10],
            ['nome' => 'São José de Ribamar', 'estado_id' => 10],
            ['nome' => 'São José dos Basílios', 'estado_id' => 10],
            ['nome' => 'São Luís', 'estado_id' => 10],
            ['nome' => 'São Luís Gonzaga do Maranhão', 'estado_id' => 10],
            ['nome' => 'São Mateus do Maranhão', 'estado_id' => 10],
            ['nome' => 'São Pedro da Água Branca', 'estado_id' => 10],
            ['nome' => 'São Pedro dos Crentes', 'estado_id' => 10],
            ['nome' => 'São Raimundo das Mangabeiras', 'estado_id' => 10],
            ['nome' => 'São Raimundo do Doca Bezerra', 'estado_id' => 10],
            ['nome' => 'São Roberto', 'estado_id' => 10],
            ['nome' => 'São Vicente Ferrer', 'estado_id' => 10],
            ['nome' => 'Satubinha', 'estado_id' => 10],
            ['nome' => 'Senador Alexandre Costa', 'estado_id' => 10],
            ['nome' => 'Senador La Rocque', 'estado_id' => 10],
            ['nome' => 'Serrano do Maranhão', 'estado_id' => 10],
            ['nome' => 'Sítio Novo', 'estado_id' => 10],
            ['nome' => 'Sucupira do Norte', 'estado_id' => 10],
            ['nome' => 'Sucupira do Riachão', 'estado_id' => 10],
            ['nome' => 'Tasso Fragoso', 'estado_id' => 10],
            ['nome' => 'Timbiras', 'estado_id' => 10],
            ['nome' => 'Timon', 'estado_id' => 10],
            ['nome' => 'Trizidela do Vale', 'estado_id' => 10],
            ['nome' => 'Tufilândia', 'estado_id' => 10],
            ['nome' => 'Tuntum', 'estado_id' => 10],
            ['nome' => 'Turiaçu', 'estado_id' => 10],
            ['nome' => 'Turilândia', 'estado_id' => 10],
            ['nome' => 'Tutóia', 'estado_id' => 10],
            ['nome' => 'Urbano Santos', 'estado_id' => 10],
            ['nome' => 'Vargem Grande', 'estado_id' => 10],
            ['nome' => 'Viana', 'estado_id' => 10],
            ['nome' => 'Vila Nova dos Martírios', 'estado_id' => 10],
            ['nome' => 'Vitória do Mearim', 'estado_id' => 10],
            ['nome' => 'Vitorino Freire', 'estado_id' => 10],
            ['nome' => 'Zé Doca', 'estado_id' => 10]
        ]);

        $this->command->info('Cidades do Maranhão importadas com sucesso!');
    }
}