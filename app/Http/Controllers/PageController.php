<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * PageController
 *
 * Controlador responsável por gerenciar as páginas principais da aplicação.
 * Todos os dados são mockados (simulados) usando arrays PHP.
 */
class PageController extends Controller
{
    /**
     * Retorna a página inicial (Home)
     *
     * @return View
     */
    public function home(): View
    {
        // Dados mockados para notícias recentes
        $recentNews = [
            [
                'id' => 1,
                'title' => 'Imposto de Renda 2026',
                'description' => 'Declare seu imposto de renda GRATUITAMENTE na ETEC Zona Leste. Não esqueça de trazer 1 KG de alimento não perecível.',
                'date' => '2026-04-22',
                'image' => 'https://via.placeholder.com/400x250?text=Imposto+de+Renda',
            ],
            [
                'id' => 2,
                'title' => 'Eleição do Grêmio Estudantil',
                'description' => 'Participe da eleição do Grêmio Estudantil 2026. Seu voto é importante para o futuro da escola.',
                'date' => '2026-04-13',
                'image' => 'https://via.placeholder.com/400x250?text=Grêmio+Estudantil',
            ],
            [
                'id' => 3,
                'title' => 'Feira Tecnológica 2025',
                'description' => 'Confira os projetos incríveis desenvolvidos pelos alunos da ETEC Zona Leste em nossa Feira Tecnológica.',
                'date' => '2026-03-15',
                'image' => 'https://via.placeholder.com/400x250?text=Feira+Tecnológica',
            ],
        ];

        // Dados mockados para cursos em destaque
        $featuredCourses = [
            [
                'id' => 1,
                'name' => 'Desenvolvimento de Sistemas',
                'description' => 'Aprenda a desenvolver sistemas web e desktop com as tecnologias mais modernas.',
                'icon' => '💻',
            ],
            [
                'id' => 2,
                'name' => 'Administração',
                'description' => 'Forme-se em gestão empresarial e administração de recursos.',
                'icon' => '📊',
            ],
            [
                'id' => 3,
                'name' => 'Segurança da Informação',
                'description' => 'Proteja dados e sistemas contra ameaças cibernéticas.',
                'icon' => '🔒',
            ],
        ];

        return view('pages.home', [
            'recentNews' => $recentNews,
            'featuredCourses' => $featuredCourses,
        ]);
    }

    /**
     * Retorna a página "Sobre a Escola"
     *
     * @return View
     */
    public function about(): View
    {
        // Dados mockados sobre a instituição
        $schoolInfo = [
            'name' => 'ETEC Zona Leste',
            'founded' => '2005',
            'description' => 'A ETEC Zona Leste é uma instituição de ensino técnico vinculada ao Centro Paula Souza (CPS), oferecendo cursos de qualidade com foco na formação de profissionais competentes para o mercado de trabalho.',
            'mission' => 'Formar profissionais qualificados, éticos e inovadores, preparados para enfrentar os desafios do mercado de trabalho e contribuir para o desenvolvimento econômico e social da região.',
            'vision' => 'Ser reconhecida como uma instituição de excelência em educação técnica, promovendo inovação, inclusão social e desenvolvimento sustentável.',
            'values' => [
                'Excelência na educação',
                'Inclusão social',
                'Inovação e tecnologia',
                'Ética e responsabilidade',
                'Sustentabilidade',
            ],
        ];

        // Dados mockados sobre infraestrutura
        $infrastructure = [
            [
                'name' => 'Laboratórios de Informática',
                'description' => '5 laboratórios equipados com computadores modernos e software atualizado.',
                'icon' => '🖥️',
            ],
            [
                'name' => 'Biblioteca',
                'description' => 'Acervo com mais de 5.000 livros e acesso a bases de dados digitais.',
                'icon' => '📚',
            ],
            [
                'name' => 'Auditório',
                'description' => 'Espaço para palestras, seminários e eventos com capacidade para 200 pessoas.',
                'icon' => '🎤',
            ],
            [
                'name' => 'Quadra Poliesportiva',
                'description' => 'Área para práticas de educação física e esportos.',
                'icon' => '🏀',
            ],
            [
                'name' => 'Cantina',
                'description' => 'Espaço de convivência com refeições a preços acessíveis.',
                'icon' => '🍽️',
            ],
            [
                'name' => 'Salas de Aula',
                'description' => '20 salas de aula equipadas com projetores e sistemas de áudio.',
                'icon' => '🎓',
            ],
        ];

        // Dados mockados sobre a equipe de desenvolvimento
        $developmentTeam = [
            [
                'name' => 'Nicolas Silva',
                'role' => 'Desenvolvedor Full-Stack',
                'specialty' => 'Laravel & React',
            ],
            [
                'name' => 'Nicolas Trindade',
                'role' => 'Designer UI/UX',
                'specialty' => 'Tailwind CSS & Figma',
            ],
            [
                'name' => 'Nicolas Silva Trindade',
                'role' => 'Desenvolvedor Backend',
                'specialty' => 'PHP & APIs',
            ],
        ];

        return view('pages.about', [
            'schoolInfo' => $schoolInfo,
            'infrastructure' => $infrastructure,
            'developmentTeam' => $developmentTeam,
        ]);
    }

    /**
     * Retorna a página de cursos
     *
     * @return View
     */
    public function courses(): View
    {
        // Dados mockados para os cursos técnicos
        $courses = [
            [
                'id' => 1,
                'name' => 'Desenvolvimento de Sistemas',
                'duration' => '3 anos',
                'description' => 'Forme-se em desenvolvimento de sistemas web e desktop. Aprenda linguagens como PHP, Python, JavaScript e frameworks modernos como Laravel e React.',
                'skills' => ['PHP', 'JavaScript', 'React', 'Laravel', 'MySQL', 'Git'],
                'icon' => '💻',
            ],
            [
                'id' => 2,
                'name' => 'Administração',
                'duration' => '3 anos',
                'description' => 'Desenvolva competências em gestão empresarial, recursos humanos, finanças e planejamento estratégico.',
                'skills' => ['Gestão', 'Recursos Humanos', 'Finanças', 'Marketing', 'Planejamento'],
                'icon' => '📊',
            ],
            [
                'id' => 3,
                'name' => 'Recursos Humanos',
                'duration' => '3 anos',
                'description' => 'Curso avançado para quem deseja aprofundar conhecimentos em gestão de pessoas, recrutamento e seleção e desenvolvimento organizacional.',
                'skills' => ['Gestão de Pessoas', 'Recrutamento e Seleção', 'Treinamento e Desenvolvimento', 'Legislação Trabalhista', 'People Analytics'],
                'icon' => '🔒',
            ],
            [
                'id' => 4,
                'name' => 'Logistica',
                'duration' => '3 anos',
                'description' => 'Curso avançado para quem deseja aprofundar conhecimentos em gestão da cadeia de suprimentos, operações logísticas e otimização de rotas.',
                'skills' => ['Supply Chain', 'Gestão de Estoques', 'Logística Reversa', 'Roteirização', 'Sistemas WMS'],
                'icon' => '🏗️',
            ],
            [
                'id' => 5,
                'name' => 'Serviços Jurídicos',
                'duration' => '3 anos',
                'description' => 'Aprenda sobre infraestrutura de redes, configuração de servidores, protocolos de comunicação e administração de sistemas.',
                'skills' => ['TCP/IP', 'Cisco', 'Servidores Linux', 'Virtualizacao', 'Cloud Computing'],
                'icon' => '🌐',
            ],
            [
                'id' => 6,
                'name' => 'Contabilidade',
                'duration' => '3 anos',
                'description' => 'Curso avançado para quem deseja aprofundar conhecimentos em rotinas processuais, redação de documentos legais e gestão de escritórios de advocacia.',
                'skills' => ['Rotinas Processuais', 'Redação Jurídica', 'Gestão de Contratos', 'Sistemas de Processo Eletrônico', 'Noções de Direito Público e Privado'],
                'icon' => '📦',
            ],
        ];

        return view('pages.courses', [
            'courses' => $courses,
        ]);
    }

    /**
     * Retorna a página de contato
     *
     * @return View
     */
    public function contact(): View
    {
        // Dados mockados para informações de contato
        $contactInfo = [
            'phone' => '(11) 3456-7890',
            'email' => 'contato@eteczonaleste.edu.br',
            'address' => ' Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo - SP, 03694-000',
            'zipcode' => '03000-000',
            'hours' => 'Segunda a Sexta: 7h às 22h',
            'coordinates' => [
                'latitude' => -23.5505,
                'longitude' => -46.6333,
            ],
        ];

        // Dados mockados para departamentos
        $departments = [
            [
                'name' => 'Coordenação Acadêmica',
                'email' => 'academico@eteczonaleste.edu.br',
                'phone' => '(11) 3456-7890',
            ],
            [
                'name' => 'Departamento de Admissão',
                'email' => 'admissao@eteczonaleste.edu.br',
                'phone' => '(11) 3456-7892',
            ],
            [
                'name' => 'Departamento de Tecnologia',
                'email' => 'tecnologia@eteczonaleste.edu.br',
                'phone' => '(11) 3456-7893',
            ],
            [
                'name' => 'Departamento de Recursos Humanos',
                'email' => 'rh@eteczonaleste.edu.br',
                'phone' => '(11) 3456-7894',
            ],
        ];

        return view('pages.contact', [
            'contactInfo' => $contactInfo,
            'departments' => $departments,
        ]);
    }
}
