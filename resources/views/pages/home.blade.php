@extends('layouts.app')

@section('title', 'Home - ETEC Zona Leste')

@section('content')
    <!-- Hero Banner -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">
                        Bem-vindo à ETEC Zona Leste
                    </h1>
                    <p class="text-lg mb-6 text-red-100">
                        Formando profissionais qualificados para o mercado de trabalho desde 2005. 
                        Cursos técnicos gratuitos com excelência em educação.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('courses') }}" class="bg-white text-red-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition text-center">
                            Conheça Nossos Cursos
                        </a>
                        <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-bold hover:bg-white hover:text-red-600 transition text-center">
                            Fale Conosco
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="bg-white bg-opacity-10 rounded-lg p-8 backdrop-blur">
                        <i class="fas fa-graduation-cap text-6xl mb-4"></i>
                        <p class="text-lg">Educação técnica de qualidade para transformar vidas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Introdução -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Por que escolher a ETEC Zona Leste?
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Oferecemos uma educação técnica de qualidade, com infraestrutura moderna e professores experientes.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-graduation-cap text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Educação de Qualidade</h3>
                    <p class="text-gray-700">
                        Cursos técnicos reconhecidos pelo mercado, com professores experientes e atualizados.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-laptop text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Infraestrutura Moderna</h3>
                    <p class="text-gray-700">
                        Laboratórios equipados com tecnologia de ponta para prática profissional.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-briefcase text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Oportunidades de Carreira</h3>
                    <p class="text-gray-700">
                        Conexões com empresas e oportunidades de estágio e emprego.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cursos em Destaque -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Cursos em Destaque
                </h2>
                <p class="text-gray-600 text-lg">
                    Conheça alguns dos nossos principais programas de formação
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredCourses as $course)
                    <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition transform hover:scale-105">
                        <div class="text-5xl mb-4">{{ $course['icon'] }}</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $course['name'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $course['description'] }}</p>
                        <a href="{{ route('courses') }}" class="text-red-600 font-bold hover:text-red-800 transition">
                            Saiba mais <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('courses') }}" class="bg-red-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-red-700 transition inline-block">
                    Ver Todos os Cursos
                </a>
            </div>
        </div>
    </section>

    <!-- Notícias Recentes -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Notícias Recentes
                </h2>
                <p class="text-gray-600 text-lg">
                    Fique atualizado com as últimas novidades da ETEC Zona Leste
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($recentNews as $news)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                        <!-- Imagem da Notícia -->
                        <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                            <img src="{{ $news['image'] }}" alt="{{ $news['title'] }}" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Conteúdo -->
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm text-gray-500">
                                    <i class="fas fa-calendar mr-2"></i>
                                    {{ \Carbon\Carbon::parse($news['date'])->format('d/m/Y') }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $news['title'] }}</h3>
                            <p class="text-gray-600 mb-4">{{ $news['description'] }}</p>
                            <a href="#" class="text-red-600 font-bold hover:text-red-800 transition">
                                Leia mais <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Pronto para transformar sua carreira?
            </h2>
            <p class="text-lg mb-8 text-red-100 max-w-2xl mx-auto">
                Inscreva-se em um de nossos cursos técnicos e prepare-se para o sucesso profissional.
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-red-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition inline-block">
                Entrar em Contato
            </a>
        </div>
    </section>
@endsection
