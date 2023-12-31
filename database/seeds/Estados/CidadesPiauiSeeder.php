<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesPiauiSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['nome' => 'Acauã', 'estado_id' => 18],
            ['nome' => 'Agricolândia', 'estado_id' => 18],
            ['nome' => 'Água Branca', 'estado_id' => 18],
            ['nome' => 'Alagoinha do Piauí', 'estado_id' => 18],
            ['nome' => 'Alegrete do Piauí', 'estado_id' => 18],
            ['nome' => 'Alto Longá', 'estado_id' => 18],
            ['nome' => 'Altos', 'estado_id' => 18],
            ['nome' => 'Alvorada do Gurguéia', 'estado_id' => 18],
            ['nome' => 'Amarante', 'estado_id' => 18],
            ['nome' => 'Angical do Piauí', 'estado_id' => 18],
            ['nome' => 'Anísio de Abreu', 'estado_id' => 18],
            ['nome' => 'Antônio Almeida', 'estado_id' => 18],
            ['nome' => 'Aroazes', 'estado_id' => 18],
            ['nome' => 'Aroeiras do Itaim', 'estado_id' => 18],
            ['nome' => 'Arraial', 'estado_id' => 18],
            ['nome' => 'Assunção do Piauí', 'estado_id' => 18],
            ['nome' => 'Avelino Lopes', 'estado_id' => 18],
            ['nome' => 'Baixa Grande do Ribeiro', 'estado_id' => 18],
            ['nome' => 'Barra d`Alcântara', 'estado_id' => 18],
            ['nome' => 'Barras', 'estado_id' => 18],
            ['nome' => 'Barreiras do Piauí', 'estado_id' => 18],
            ['nome' => 'Barro Duro', 'estado_id' => 18],
            ['nome' => 'Batalha', 'estado_id' => 18],
            ['nome' => 'Bela Vista do Piauí', 'estado_id' => 18],
            ['nome' => 'Belém do Piauí', 'estado_id' => 18],
            ['nome' => 'Beneditinos', 'estado_id' => 18],
            ['nome' => 'Bertolínia', 'estado_id' => 18],
            ['nome' => 'Betânia do Piauí', 'estado_id' => 18],
            ['nome' => 'Boa Hora', 'estado_id' => 18],
            ['nome' => 'Bocaina', 'estado_id' => 18],
            ['nome' => 'Bom Jesus', 'estado_id' => 18],
            ['nome' => 'Bom Princípio do Piauí', 'estado_id' => 18],
            ['nome' => 'Bonfim do Piauí', 'estado_id' => 18],
            ['nome' => 'Boqueirão do Piauí', 'estado_id' => 18],
            ['nome' => 'Brasileira', 'estado_id' => 18],
            ['nome' => 'Brejo do Piauí', 'estado_id' => 18],
            ['nome' => 'Buriti dos Lopes', 'estado_id' => 18],
            ['nome' => 'Buriti dos Montes', 'estado_id' => 18],
            ['nome' => 'Cabeceiras do Piauí', 'estado_id' => 18],
            ['nome' => 'Cajazeiras do Piauí', 'estado_id' => 18],
            ['nome' => 'Cajueiro da Praia', 'estado_id' => 18],
            ['nome' => 'Caldeirão Grande do Piauí', 'estado_id' => 18],
            ['nome' => 'Campinas do Piauí', 'estado_id' => 18],
            ['nome' => 'Campo Alegre do Fidalgo', 'estado_id' => 18],
            ['nome' => 'Campo Grande do Piauí', 'estado_id' => 18],
            ['nome' => 'Campo Largo do Piauí', 'estado_id' => 18],
            ['nome' => 'Campo Maior', 'estado_id' => 18],
            ['nome' => 'Canavieira', 'estado_id' => 18],
            ['nome' => 'Canto do Buriti', 'estado_id' => 18],
            ['nome' => 'Capitão de Campos', 'estado_id' => 18],
            ['nome' => 'Capitão Gervásio Oliveira', 'estado_id' => 18],
            ['nome' => 'Caracol', 'estado_id' => 18],
            ['nome' => 'Caraúbas do Piauí', 'estado_id' => 18],
            ['nome' => 'Caridade do Piauí', 'estado_id' => 18],
            ['nome' => 'Castelo do Piauí', 'estado_id' => 18],
            ['nome' => 'Caxingó', 'estado_id' => 18],
            ['nome' => 'Cocal', 'estado_id' => 18],
            ['nome' => 'Cocal de Telha', 'estado_id' => 18],
            ['nome' => 'Cocal dos Alves', 'estado_id' => 18],
            ['nome' => 'Coivaras', 'estado_id' => 18],
            ['nome' => 'Colônia do Gurguéia', 'estado_id' => 18],
            ['nome' => 'Colônia do Piauí', 'estado_id' => 18],
            ['nome' => 'Conceição do Canindé', 'estado_id' => 18],
            ['nome' => 'Coronel José Dias', 'estado_id' => 18],
            ['nome' => 'Corrente', 'estado_id' => 18],
            ['nome' => 'Cristalândia do Piauí', 'estado_id' => 18],
            ['nome' => 'Cristino Castro', 'estado_id' => 18],
            ['nome' => 'Curimatá', 'estado_id' => 18],
            ['nome' => 'Currais', 'estado_id' => 18],
            ['nome' => 'Curral Novo do Piauí', 'estado_id' => 18],
            ['nome' => 'Curralinhos', 'estado_id' => 18],
            ['nome' => 'Demerval Lobão', 'estado_id' => 18],
            ['nome' => 'Dirceu Arcoverde', 'estado_id' => 18],
            ['nome' => 'Dom Expedito Lopes', 'estado_id' => 18],
            ['nome' => 'Dom Inocêncio', 'estado_id' => 18],
            ['nome' => 'Domingos Mourão', 'estado_id' => 18],
            ['nome' => 'Elesbão Veloso', 'estado_id' => 18],
            ['nome' => 'Eliseu Martins', 'estado_id' => 18],
            ['nome' => 'Esperantina', 'estado_id' => 18],
            ['nome' => 'Fartura do Piauí', 'estado_id' => 18],
            ['nome' => 'Flores do Piauí', 'estado_id' => 18],
            ['nome' => 'Floresta do Piauí', 'estado_id' => 18],
            ['nome' => 'Floriano', 'estado_id' => 18],
            ['nome' => 'Francinópolis', 'estado_id' => 18],
            ['nome' => 'Francisco Ayres', 'estado_id' => 18],
            ['nome' => 'Francisco Macedo', 'estado_id' => 18],
            ['nome' => 'Francisco Santos', 'estado_id' => 18],
            ['nome' => 'Fronteiras', 'estado_id' => 18],
            ['nome' => 'Geminiano', 'estado_id' => 18],
            ['nome' => 'Gilbués', 'estado_id' => 18],
            ['nome' => 'Guadalupe', 'estado_id' => 18],
            ['nome' => 'Guaribas', 'estado_id' => 18],
            ['nome' => 'Hugo Napoleão', 'estado_id' => 18],
            ['nome' => 'Ilha Grande', 'estado_id' => 18],
            ['nome' => 'Inhuma', 'estado_id' => 18],
            ['nome' => 'Ipiranga do Piauí', 'estado_id' => 18],
            ['nome' => 'Isaías Coelho', 'estado_id' => 18],
            ['nome' => 'Itainópolis', 'estado_id' => 18],
            ['nome' => 'Itaueira', 'estado_id' => 18],
            ['nome' => 'Jacobina do Piauí', 'estado_id' => 18],
            ['nome' => 'Jaicós', 'estado_id' => 18],
            ['nome' => 'Jardim do Mulato', 'estado_id' => 18],
            ['nome' => 'Jatobá do Piauí', 'estado_id' => 18],
            ['nome' => 'Jerumenha', 'estado_id' => 18],
            ['nome' => 'João Costa', 'estado_id' => 18],
            ['nome' => 'Joaquim Pires', 'estado_id' => 18],
            ['nome' => 'Joca Marques', 'estado_id' => 18],
            ['nome' => 'José de Freitas', 'estado_id' => 18],
            ['nome' => 'Juazeiro do Piauí', 'estado_id' => 18],
            ['nome' => 'Júlio Borges', 'estado_id' => 18],
            ['nome' => 'Jurema', 'estado_id' => 18],
            ['nome' => 'Lagoa Alegre', 'estado_id' => 18],
            ['nome' => 'Lagoa de São Francisco', 'estado_id' => 18],
            ['nome' => 'Lagoa do Barro do Piauí', 'estado_id' => 18],
            ['nome' => 'Lagoa do Piauí', 'estado_id' => 18],
            ['nome' => 'Lagoa do Sítio', 'estado_id' => 18],
            ['nome' => 'Lagoinha do Piauí', 'estado_id' => 18],
            ['nome' => 'Landri Sales', 'estado_id' => 18],
            ['nome' => 'Luís Correia', 'estado_id' => 18],
            ['nome' => 'Luzilândia', 'estado_id' => 18],
            ['nome' => 'Madeiro', 'estado_id' => 18],
            ['nome' => 'Manoel Emídio', 'estado_id' => 18],
            ['nome' => 'Marcolândia', 'estado_id' => 18],
            ['nome' => 'Marcos Parente', 'estado_id' => 18],
            ['nome' => 'Massapê do Piauí', 'estado_id' => 18],
            ['nome' => 'Matias Olímpio', 'estado_id' => 18],
            ['nome' => 'Miguel Alves', 'estado_id' => 18],
            ['nome' => 'Miguel Leão', 'estado_id' => 18],
            ['nome' => 'Milton Brandão', 'estado_id' => 18],
            ['nome' => 'Monsenhor Gil', 'estado_id' => 18],
            ['nome' => 'Monsenhor Hipólito', 'estado_id' => 18],
            ['nome' => 'Monte Alegre do Piauí', 'estado_id' => 18],
            ['nome' => 'Morro Cabeça no Tempo', 'estado_id' => 18],
            ['nome' => 'Morro do Chapéu do Piauí', 'estado_id' => 18],
            ['nome' => 'Murici dos Portelas', 'estado_id' => 18],
            ['nome' => 'Nazaré do Piauí', 'estado_id' => 18],
            ['nome' => 'Nossa Senhora de Nazaré', 'estado_id' => 18],
            ['nome' => 'Nossa Senhora dos Remédios', 'estado_id' => 18],
            ['nome' => 'Nova Santa Rita', 'estado_id' => 18],
            ['nome' => 'Novo Oriente do Piauí', 'estado_id' => 18],
            ['nome' => 'Novo Santo Antônio', 'estado_id' => 18],
            ['nome' => 'Oeiras', 'estado_id' => 18],
            ['nome' => 'Olho d`Água do Piauí', 'estado_id' => 18],
            ['nome' => 'Padre Marcos', 'estado_id' => 18],
            ['nome' => 'Paes Landim', 'estado_id' => 18],
            ['nome' => 'Pajeú do Piauí', 'estado_id' => 18],
            ['nome' => 'Palmeira do Piauí', 'estado_id' => 18],
            ['nome' => 'Palmeirais', 'estado_id' => 18],
            ['nome' => 'Paquetá', 'estado_id' => 18],
            ['nome' => 'Parnaguá', 'estado_id' => 18],
            ['nome' => 'Parnaíba', 'estado_id' => 18],
            ['nome' => 'Passagem Franca do Piauí', 'estado_id' => 18],
            ['nome' => 'Patos do Piauí', 'estado_id' => 18],
            ['nome' => 'Pau d`Arco do Piauí', 'estado_id' => 18],
            ['nome' => 'Paulistana', 'estado_id' => 18],
            ['nome' => 'Pavussu', 'estado_id' => 18],
            ['nome' => 'Pedro II', 'estado_id' => 18],
            ['nome' => 'Pedro Laurentino', 'estado_id' => 18],
            ['nome' => 'Picos', 'estado_id' => 18],
            ['nome' => 'Pimenteiras', 'estado_id' => 18],
            ['nome' => 'Pio IX', 'estado_id' => 18],
            ['nome' => 'Piracuruca', 'estado_id' => 18],
            ['nome' => 'Piripiri', 'estado_id' => 18],
            ['nome' => 'Porto', 'estado_id' => 18],
            ['nome' => 'Porto Alegre do Piauí', 'estado_id' => 18],
            ['nome' => 'Prata do Piauí', 'estado_id' => 18],
            ['nome' => 'Queimada Nova', 'estado_id' => 18],
            ['nome' => 'Redenção do Gurguéia', 'estado_id' => 18],
            ['nome' => 'Regeneração', 'estado_id' => 18],
            ['nome' => 'Riacho Frio', 'estado_id' => 18],
            ['nome' => 'Ribeira do Piauí', 'estado_id' => 18],
            ['nome' => 'Ribeiro Gonçalves', 'estado_id' => 18],
            ['nome' => 'Rio Grande do Piauí', 'estado_id' => 18],
            ['nome' => 'Santa Cruz do Piauí', 'estado_id' => 18],
            ['nome' => 'Santa Cruz dos Milagres', 'estado_id' => 18],
            ['nome' => 'Santa Filomena', 'estado_id' => 18],
            ['nome' => 'Santa Luz', 'estado_id' => 18],
            ['nome' => 'Santa Rosa do Piauí', 'estado_id' => 18],
            ['nome' => 'Santana do Piauí', 'estado_id' => 18],
            ['nome' => 'Santo Antônio de Lisboa', 'estado_id' => 18],
            ['nome' => 'Santo Antônio dos Milagres', 'estado_id' => 18],
            ['nome' => 'Santo Inácio do Piauí', 'estado_id' => 18],
            ['nome' => 'São Braz do Piauí', 'estado_id' => 18],
            ['nome' => 'São Félix do Piauí', 'estado_id' => 18],
            ['nome' => 'São Francisco de Assis do Piauí', 'estado_id' => 18],
            ['nome' => 'São Francisco do Piauí', 'estado_id' => 18],
            ['nome' => 'São Gonçalo do Gurguéia', 'estado_id' => 18],
            ['nome' => 'São Gonçalo do Piauí', 'estado_id' => 18],
            ['nome' => 'São João da Canabrava', 'estado_id' => 18],
            ['nome' => 'São João da Fronteira', 'estado_id' => 18],
            ['nome' => 'São João da Serra', 'estado_id' => 18],
            ['nome' => 'São João da Varjota', 'estado_id' => 18],
            ['nome' => 'São João do Arraial', 'estado_id' => 18],
            ['nome' => 'São João do Piauí', 'estado_id' => 18],
            ['nome' => 'São José do Divino', 'estado_id' => 18],
            ['nome' => 'São José do Peixe', 'estado_id' => 18],
            ['nome' => 'São José do Piauí', 'estado_id' => 18],
            ['nome' => 'São Julião', 'estado_id' => 18],
            ['nome' => 'São Lourenço do Piauí', 'estado_id' => 18],
            ['nome' => 'São Luis do Piauí', 'estado_id' => 18],
            ['nome' => 'São Miguel da Baixa Grande', 'estado_id' => 18],
            ['nome' => 'São Miguel do Fidalgo', 'estado_id' => 18],
            ['nome' => 'São Miguel do Tapuio', 'estado_id' => 18],
            ['nome' => 'São Pedro do Piauí', 'estado_id' => 18],
            ['nome' => 'São Raimundo Nonato', 'estado_id' => 18],
            ['nome' => 'Sebastião Barros', 'estado_id' => 18],
            ['nome' => 'Sebastião Leal', 'estado_id' => 18],
            ['nome' => 'Sigefredo Pacheco', 'estado_id' => 18],
            ['nome' => 'Simões', 'estado_id' => 18],
            ['nome' => 'Simplício Mendes', 'estado_id' => 18],
            ['nome' => 'Socorro do Piauí', 'estado_id' => 18],
            ['nome' => 'Sussuapara', 'estado_id' => 18],
            ['nome' => 'Tamboril do Piauí', 'estado_id' => 18],
            ['nome' => 'Tanque do Piauí', 'estado_id' => 18],
            ['nome' => 'Teresina', 'estado_id' => 18],
            ['nome' => 'União', 'estado_id' => 18],
            ['nome' => 'Uruçuí', 'estado_id' => 18],
            ['nome' => 'Valença do Piauí', 'estado_id' => 18],
            ['nome' => 'Várzea Branca', 'estado_id' => 18],
            ['nome' => 'Várzea Grande', 'estado_id' => 18],
            ['nome' => 'Vera Mendes', 'estado_id' => 18],
            ['nome' => 'Vila Nova do Piauí', 'estado_id' => 18],
            ['nome' => 'Wall Ferraz', 'estado_id' => 18]
        ]);

        $this->command->info('Cidades do Piauí importadas com sucesso!');
    }
}