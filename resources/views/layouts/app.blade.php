<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ETEC Zona Leste')</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header / Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-red-600 to-red-800 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">E</span>
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-xl font-bold text-gray-800">ETEC Zona Leste</h1>
                        <p class="text-xs text-gray-500">Centro Paula Souza</p>
                    </div>
                </div>

                <!-- Menu de Navegação -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-600 font-medium transition duration-300 @if(Route::currentRouteName() === 'home') text-red-600 border-b-2 border-red-600 @endif">
                        Home
                    </a>
                    <a href="{{ route('courses') }}" class="text-gray-700 hover:text-red-600 font-medium transition duration-300 @if(Route::currentRouteName() === 'courses') text-red-600 border-b-2 border-red-600 @endif">
                        Cursos
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-red-600 font-medium transition duration-300 @if(Route::currentRouteName() === 'about') text-red-600 border-b-2 border-red-600 @endif">
                        Sobre
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-600 font-medium transition duration-300 @if(Route::currentRouteName() === 'contact') text-red-600 border-b-2 border-red-600 @endif">
                        Contato
                    </a>
                </div>

                <!-- Botão de Menu Mobile -->
                <div class="md:hidden">
                    <button class="text-gray-700 hover:text-red-600 focus:outline-none" id="mobile-menu-btn">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-100 rounded">Home</a>
                <a href="{{ route('courses') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-100 rounded">Cursos</a>
                <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-100 rounded">Sobre</a>
                <a href="{{ route('contact') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-100 rounded">Contato</a>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Sobre -->
                <div>
                    <h3 class="text-white font-bold mb-4 flex items-center space-x-2">
                        <div class="w-8 h-8 bg-gradient-to-br from-red-600 to-red-800 rounded flex items-center justify-center">
                            <span class="text-white font-bold">E</span>
                        </div>
                        <span>ETEC Zona Leste</span>
                    </h3>
                    <p class="text-sm">Formando profissionais qualificados para o mercado de trabalho desde 2005.</p>
                </div>

                <!-- Links Rápidos -->
                <div>
                    <h4 class="text-white font-bold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-red-500 transition">Home</a></li>
                        <li><a href="{{ route('courses') }}" class="hover:text-red-500 transition">Cursos</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-red-500 transition">Sobre</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-red-500 transition">Contato</a></li>
                    </ul>
                </div>

                <!-- Contato -->
                <div>
                    <h4 class="text-white font-bold mb-4">Contato</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone text-red-500"></i>
                            <span>(11) 3456-7890</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope text-red-500"></i>
                            <span>contato@eteczonaleste.edu.br</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-500"></i>
                            <span>Zona Leste, São Paulo - SP</span>
                        </li>
                    </ul>
                </div>

                <!-- Redes Sociais -->
                <div>
                    <h4 class="text-white font-bold mb-4">Redes Sociais</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-red-500 transition text-xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                    <p>&copy; 2026 ETEC Zona Leste. Todos os direitos reservados.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="hover:text-red-500 transition">Política de Privacidade</a>
                        <a href="#" class="hover:text-red-500 transition">Termos de Uso</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script para Menu Mobile -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
