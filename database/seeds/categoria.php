<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'categoria' => 'Adulto',
            'descricao' => 'Categoria dedicada a conteúdo Adulto para maiores de 18 anos ,possui imagens e textos impróprias para menores.',
            'icon' => '<i class="fa fa-venus-mars"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Alimentação',
            'descricao' => 'Categoria dedicada para o conteúdo gastronômico, locais de fornecimento e armazenamento de alimentos.',
            'icon' => '<i class="fa fa-cutlery"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Agências',
            'descricao' => 'Categoria dedicada ao trabalho por conta de terceiros.',
            'icon' => '<i class="fa fa-users"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Agronegocio',
            'descricao' => 'Categoria dedicada para o conteúdo de relação comercial e industrial envolvendo a cadeia produtiva agrícola ou pecuária.',
            'icon' => '<i class="fa fa-users"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Aluguel',
            'descricao' => 'Categoria dedicada para a locação de maquinas, equipamentos, roupas, imóveis ou moveis.',
            'icon' => '<i class="fa fa-home"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Auto e Motos',
            'descricao' => 'Categoria dedicada para a venda, compra, manutenção de auto - motos, equipamentos e acessórios.',
            'icon' => '<i class="fa fa-car"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Beleza',
            'descricao' => 'Categoria dedicada para a beleza do corpo, rosto e cabelos de homens e mulheres.',
            'icon' => '<i class="fa fa-heart"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Moda',
            'descricao' => 'Categoria dedicada a roupas e acessorios de moda e beleza.',
            'icon' => '<i class="fa fa-female"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Construção',
            'descricao' => 'Categoria dedicada a construção de casas, edificios, materias de   construção e construtores.',
            'icon' => '<i class="fa fa-wrench"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Cultura e Lazer',
            'descricao' => 'Categoria dedicada para Eventos, Teatros, Cinema lugares para ter   laser com a família.',
            'icon' => '<i class="fa fa-video-camera"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Economia',
            'descricao' => 'Categoria dedicada a análise da produção, distribuição e consumo de bens e serviços. É também a ciência social que estuda a atividade económica.',
            'icon' => '<i class="fa fa-money"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Habitação',
            'descricao' => 'Categoria dedicada para compra, venda e aluguel de casas, hotéis, chácaras,',
            'icon' => '<i class="fa fa-building-o"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Industrial',
            'descricao' => 'Categoria dedicada para Industrias em Geral',
            'icon' => '<i class="fa fa-industry"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Justiça',
            'descricao' => 'Categoria dedicada para Direitos das pessoas, Advogados, Juízes, Fóruns',
            'icon' => '<i class="fa fa-gavel"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Tecnologia',
            'descricao' => 'Categoria dedicada a àrea tecnologica em geral',
            'icon' => '<i class="fa fa-desktop"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Publicidade',
            'descricao' => 'Categoria dedicada a publicidade é uma atividade profissional dedicada à difusão pública de empresas, produtos ou serviços.',
            'icon' => '<i class="fa fa-bullhorn"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Religião',
            'descricao' => 'Categoria dedicada a todas as religiões.',
            'icon' => '<i class="fa fa-plus"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Saúde',
            'descricao' => 'Categoria dedicada a Saúde, médicos, hospitais, clinicas em geral.',
            'icon' => '<i class="fa fa-user-md"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Segurança',
            'descricao' => 'Categoria dedicada a Segurança, Proteção de Patrimonio em Geral.',
            'icon' => '<i class="fa fa-lock"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Transportes',
            'descricao' => 'Categoria dedicada a Meios de Trasporte em Geral',
            'icon' => '<i class="fa fa-bus"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Administração',
            'descricao' => 'Categoria dedicada a todos as Formas Administrativas',
            'icon' => '<i class="fa fa-line-chart"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Utilidades',
            'descricao' => 'Categoria dedicada a Serviços e Produtos de forma Geral',
            'icon' => '<i class="fa fa-arrows"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Cooperativa',
            'descricao' => 'Categoria dedicada a Cooperativas em Geral',
            'icon' => '<i class="fa fa-link"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Engenharia',
            'descricao' => 'Categoria dedicada a todo tipo de Engenharo e trabalhos de engenharia.',
            'icon' => '<i class="fa fa-pencil"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Decoração',
            'descricao' => 'Móveis e Decoração.',
            'icon' => '<i class="fa fa-picture-o"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Educação',
            'descricao' => 'aplicação dos métodos próprios para assegurar a formação e o desenvolvimento físico, intelectual e moral de um ser humano; pedagogia, didática, ensino.',
            'icon' => '<i class="fa fa-book"></i>'
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Serviços Públicos',
            'descricao' => 'Categoria dedicada a Serviços Públicos prestados.',
            'icon' => ''
        ]);
        DB::table('categoria')->insert([
            'categoria' => 'Associações',
            'descricao' => 'que dirige as atividades de uma classe.',
            'icon' => '<i class="fa fa-handshake-o"></i>'
        ]);        
    }
}
