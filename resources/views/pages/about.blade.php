@extends('layouts.app')

@section('title', 'Sobre - ETEC Zona Leste')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Sobre a ETEC Zona Leste</h1>
            <p class="text-lg text-red-100">Conheça nossa história, missão e infraestrutura</p>
        </div>
    </section>

    <!-- Informações Principais -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">
                        {{ $schoolInfo['name'] }}
                    </h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ $schoolInfo['description'] }}
                    </p>
                    <div class="bg-red-50 border-l-4 border-red-600 p-4 mb-6">
                        <p class="text-gray-700">
                            <strong>Fundada em:</strong> {{ $schoolInfo['founded'] }}
                        </p>
                    </div>
                    <p class="text-gray-600">
                        Somos parte do Centro Paula Souza (CPS), uma instituição consolidada que oferece educação técnica de qualidade há décadas.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-red-100 to-red-50 rounded-lg p-8">
                    <i class="fas fa-building text-6xl text-red-600 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Centro Paula Souza</h3>
                    <p class="text-gray-700">
                        Referência em educação técnica e profissionalizante no Estado de São Paulo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Missão, Visão e Valores -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Missão -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-4xl text-blue-600 mb-4">
                        <i class="fas fa-target"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Missão</h3>
                    <p class="text-gray-700">
                        {{ $schoolInfo['mission'] }}
                    </p>
                </div>

                <!-- Visão -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-4xl text-green-600 mb-4">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Visão</h3>
                    <p class="text-gray-700">
                        {{ $schoolInfo['vision'] }}
                    </p>
                </div>

                <!-- Valores -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="text-4xl text-purple-600 mb-4">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Valores</h3>
                    <ul class="space-y-2">
                        @foreach($schoolInfo['values'] as $value)
                            <li class="flex items-center text-gray-700">
                                <i class="fas fa-check text-green-600 mr-2"></i>
                                {{ $value }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Infraestrutura -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Nossa Infraestrutura
                </h2>
                <p class="text-gray-600 text-lg">
                    Contamos com instalações modernas e equipadas para o melhor aprendizado
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($infrastructure as $item)
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-lg border-l-4 border-red-600 hover:shadow-lg transition">
                        <div class="text-5xl mb-4">{{ $item['icon'] }}</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $item['name'] }}</h3>
                        <p class="text-gray-700">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Equipe de Desenvolvimento -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Equipe de Desenvolvimento do Projeto
                </h2>
                <p class="text-gray-600 text-lg">
                    Profissionais dedicados à criação deste website
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($developmentTeam as $member)
                    <div class="bg-white p-8 rounded-lg shadow-md text-center hover:shadow-xl transition">
                        <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-br from-red-400 to-red-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-4xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $member['name'] }}</h3>
                        <p class="text-red-600 font-semibold mb-2">{{ $member['role'] }}</p>
                        <p class="text-gray-600 text-sm">{{ $member['specialty'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Estatísticas -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">2005</div>
                    <p class="text-red-100">Fundação</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">6+</div>
                    <p class="text-red-100">Cursos Técnicos</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">1000+</div>
                    <p class="text-red-100">Alunos Ativos</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <p class="text-red-100">Professores</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                Quer saber mais sobre nossos cursos?
            </h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Conheça todos os programas de formação disponíveis e escolha o que melhor se adequa ao seu perfil profissional.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('courses') }}" class="bg-red-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-red-700 transition">
                    Ver Cursos
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-red-600 text-red-600 px-8 py-3 rounded-lg font-bold hover:bg-red-50 transition">
                    Fale Conosco
                </a>
            </div>
        </div>
    </section>
@endsection
