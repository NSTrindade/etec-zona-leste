# ETEC Zona Leste - Website Institucional

Um website moderno e responsivo para uma instituição de ensino técnico, desenvolvido com **Laravel**, **Blade Templates** e **Tailwind CSS**.

## 📋 Características

- **Página Inicial (Home)**: Banner de destaque, cursos em destaque e notícias recentes
- **Página Sobre**: História da instituição, missão, visão, valores e infraestrutura
- **Página Cursos**: Lista completa de cursos técnicos com descrições e competências
- **Página Contato**: Formulário de contato, informações de departamentos e FAQ
- **Design Responsivo**: Interface moderna adaptada para desktop, tablet e mobile
- **Dados Mockados**: Todos os dados simulados diretamente no Controller (sem banco de dados)
- **Tailwind CSS**: Estilização via CDN para configuração rápida

## 🛠️ Tecnologias Utilizadas

- **Backend**: Laravel 11
- **Frontend**: Blade Templates + Tailwind CSS (via CDN)
- **Ícones**: Font Awesome 6.4.0
- **Fontes**: Google Fonts (Poppins)
- **Servidor**: PHP Built-in Server

## 📁 Estrutura do Projeto

```
etec-zona-leste/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php          # Controller com dados mockados
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php               # Layout base (Header/Footer)
│       └── pages/
│           ├── home.blade.php              # Página inicial
│           ├── about.blade.php             # Página sobre
│           ├── courses.blade.php           # Página de cursos
│           └── contact.blade.php           # Página de contato
├── routes/
│   └── web.php                             # Rotas da aplicação
└── README.md                               # Este arquivo
```

## 🚀 Como Executar

### Passo 1: Clonar o Repositório

```bash
git clone https://github.com/seu-usuario/etec-zona-leste.git
cd etec-zona-leste
```

### Passo 2: Instalar Dependências

```bash
composer install
```

### Passo 3: Configurar Variáveis de Ambiente

```bash
cp .env.example .env
php artisan key:generate
```

### Passo 4: Iniciar o Servidor Local

```bash
php artisan serve
```

O servidor estará disponível em: **http://localhost:8000**

## 📄 Arquivos Principais

### `routes/web.php`

Define as rotas da aplicação:

```php
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'about'])->name('about');
Route::get('/cursos', [PageController::class, 'courses'])->name('courses');
Route::get('/contato', [PageController::class, 'contact'])->name('contact');
```

### `app/Http/Controllers/PageController.php`

Controller que gerencia todas as páginas e fornece dados mockados:

- **`home()`**: Retorna dados para a página inicial (notícias e cursos em destaque)
- **`about()`**: Retorna informações sobre a escola, infraestrutura e equipe
- **`courses()`**: Retorna lista completa de cursos técnicos
- **`contact()`**: Retorna informações de contato e departamentos

### `resources/views/layouts/app.blade.php`

Layout base que contém:

- **Header**: Navegação com logo e menu responsivo
- **Main**: Espaço para conteúdo das páginas
- **Footer**: Rodapé com links rápidos e informações

### `resources/views/pages/*.blade.php`

Cada página estende o layout base e apresenta conteúdo específico.

## 🎨 Personalização

### Alterar Cores

As cores principais (vermelho) podem ser alteradas no Tailwind CSS. Procure por `from-red-600`, `to-red-800`, etc., nos arquivos `.blade.php`.

### Adicionar Novos Cursos

Edite o método `courses()` no `PageController.php` e adicione novos itens ao array `$courses`:

```php
[
    'id' => 7,
    'name' => 'Novo Curso',
    'duration' => '3 semestres',
    'description' => 'Descrição do novo curso',
    'skills' => ['Skill 1', 'Skill 2'],
    'icon' => '🎯',
],
```

### Adicionar Novas Páginas

1. Crie um novo método no `PageController.php`
2. Crie uma nova view em `resources/views/pages/`
3. Adicione a rota em `routes/web.php`

## 📱 Responsividade

O website é totalmente responsivo usando Tailwind CSS:

- **Desktop**: Visualização completa com grid de 3+ colunas
- **Tablet**: Ajustes para telas médias
- **Mobile**: Menu hambúrguer e layout em coluna única

## 🔗 Navegação

- **Home** (`/`): Página inicial
- **Cursos** (`/cursos`): Lista de cursos técnicos
- **Sobre** (`/sobre`): Informações sobre a instituição
- **Contato** (`/contato`): Formulário de contato e informações

## 📝 Dados Mockados

Todos os dados (cursos, notícias, departamentos) são simulados diretamente no `PageController.php` usando arrays PHP. Para usar um banco de dados real:

1. Configure o banco de dados em `.env`
2. Crie migrations para as tabelas
3. Crie models Eloquent
4. Substitua os arrays pelos queries do Eloquent

## 🚀 Deploy

Para fazer deploy em produção:

1. Configure as variáveis de ambiente em `.env`
2. Execute `composer install --no-dev`
3. Execute `php artisan config:cache`
4. Configure um servidor web (Nginx/Apache)
5. Aponte o `public/` como raiz do website

## 📞 Suporte

Para dúvidas ou sugestões, entre em contato através do formulário na página de Contato.

## 📄 Licença

Este projeto é fornecido como exemplo educacional.

---

**Desenvolvido com ❤️ para a ETEC Zona Leste**
