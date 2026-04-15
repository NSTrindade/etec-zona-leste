# Resumo Técnico - ETEC Zona Leste Website

## 📊 Visão Geral

**Projeto**: Website Institucional da ETEC Zona Leste  
**Framework**: Laravel 11  
**Frontend**: Blade Templates + Tailwind CSS (via CDN)  
**Banco de Dados**: Nenhum (dados mockados)  
**Linguagem**: PHP 8.1+  
**Responsividade**: Totalmente responsivo (Mobile, Tablet, Desktop)  

## 🏗️ Arquitetura

### Padrão MVC

- **Model**: Não utilizado (dados mockados)
- **View**: Blade Templates em `resources/views/`
- **Controller**: `PageController.php` com 4 métodos principais

### Estrutura de Pastas

```
etec-zona-leste/
├── app/Http/Controllers/
│   └── PageController.php (4 métodos: home, about, courses, contact)
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php (Layout base com Header/Footer)
│   └── pages/
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── courses.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php (4 rotas GET)
└── ... (estrutura padrão do Laravel)
```

## 🔄 Fluxo de Requisição

1. **URL**: Usuário acessa `http://localhost:8000/cursos`
2. **Rota**: `routes/web.php` mapeia para `PageController@courses`
3. **Controller**: `PageController::courses()` prepara dados mockados
4. **View**: `pages/courses.blade.php` renderiza com Tailwind CSS
5. **Layout**: `layouts/app.blade.php` envolve com Header/Footer
6. **Resposta**: HTML completo retornado ao navegador

## 📦 Dados Mockados

Todos os dados são arrays PHP no `PageController`:

### Home
- 3 notícias recentes
- 3 cursos em destaque

### About
- Informações da escola (nome, fundação, descrição)
- Missão, visão e 5 valores
- 6 itens de infraestrutura
- 3 membros da equipe

### Courses
- 6 cursos técnicos completos
- Cada curso com: nome, duração, descrição, 5+ competências, ícone

### Contact
- Telefone, email, endereço, horário
- 4 departamentos com emails e telefones
- Coordenadas de localização

## 🎨 Tecnologias Frontend

### Tailwind CSS
- Importado via CDN (sem build process)
- Cores principais: Vermelho (red-600, red-800)
- Responsive design com breakpoints: sm, md, lg

### Font Awesome
- Versão 6.4.0 via CDN
- Ícones para: menu, telefone, email, localização, etc.

### Google Fonts
- Fonte: Poppins (400, 500, 600, 700 weights)
- Aplicada globalmente via CSS

## 🔗 Rotas

| Método | Rota | Controller | View |
|--------|------|-----------|------|
| GET | `/` | `home()` | `pages.home` |
| GET | `/sobre` | `about()` | `pages.about` |
| GET | `/cursos` | `courses()` | `pages.courses` |
| GET | `/contato` | `contact()` | `pages.contact` |

## 📱 Responsividade

### Breakpoints Tailwind

- **Mobile**: < 640px (sm)
- **Tablet**: 640px - 1024px (md, lg)
- **Desktop**: > 1024px (xl, 2xl)

### Componentes Responsivos

- Menu hambúrguer em mobile
- Grid adapta de 1 coluna (mobile) para 3+ colunas (desktop)
- Imagens e vídeos escaláveis
- Formulários otimizados para toque

## 🔐 Segurança

- CSRF Protection (padrão Laravel)
- XSS Protection (Blade escapa output)
- SQL Injection: N/A (sem banco de dados)
- Variáveis de ambiente em `.env`

## ⚡ Performance

- Sem queries de banco de dados
- Tailwind CSS via CDN (sem build)
- Imagens placeholder (via.placeholder.com)
- Sem JavaScript pesado (apenas menu mobile)

## 🚀 Deploy

### Requisitos Mínimos
- PHP 8.1+
- Composer
- Servidor web (Apache/Nginx)

### Passos
1. Clone o repositório
2. `composer install`
3. Configure `.env`
4. `php artisan serve` (desenvolvimento)
5. Ou aponte servidor para `public/` (produção)

## 📝 Dados de Exemplo

### Cursos Disponíveis
1. Desenvolvimento de Sistemas (3 sem)
2. Administração (3 sem)
3. Segurança da Informação (3 sem)
4. Análise e Desenvolvimento (4 sem)
5. Redes de Computadores (3 sem)
6. Logística (3 sem)

### Departamentos
1. Coordenação Acadêmica
2. Departamento de Admissão
3. Departamento de Tecnologia
4. Departamento de Recursos Humanos

## 🔄 Próximas Fases

### Fase 2: Banco de Dados
- Criar migrations para Cursos, Notícias, Departamentos
- Implementar Models Eloquent
- Substituir arrays por queries

### Fase 3: Autenticação
- Implementar login de alunos
- Painel administrativo
- Gerenciamento de conteúdo

### Fase 4: Funcionalidades Avançadas
- Envio de formulário de contato
- Sistema de inscrição
- Calendário de eventos
- Galeria de fotos

## 📊 Estatísticas do Projeto

- **Linhas de Código**: ~2000+ (views + controller)
- **Arquivos Blade**: 5 (1 layout + 4 pages)
- **Rotas**: 4
- **Métodos do Controller**: 4
- **Dados Mockados**: 50+ itens
- **Componentes UI**: 30+ (cards, forms, buttons, etc.)

## 🎯 Objetivos Alcançados

✅ Setup completo do Laravel  
✅ Rotas configuradas  
✅ Controller com dados mockados  
✅ Layout base com Header/Footer  
✅ 4 páginas completas  
✅ Design responsivo  
✅ Tailwind CSS integrado  
✅ Pronto para GitHub  
✅ Documentação completa  

---

**Desenvolvido com ❤️ para a ETEC Zona Leste**
