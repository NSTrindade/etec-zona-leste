@extends('layouts.app')

@section('title', 'Cursos - ETEC Zona Leste')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Nossos Cursos Técnicos</h1>
            <p class="text-lg text-red-100">Formação profissional de qualidade para o mercado de trabalho</p>
        </div>
    </section>

    <!-- Introdução -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded">
                <p class="text-gray-700">
                    A ETEC Zona Leste oferece cursos técnicos gratuitos, 
                    preparando profissionais qualificados para as demandas do mercado. Todos os cursos incluem 
                    aulas teóricas, práticas em laboratórios modernos e oportunidades de estágio.
                </p>
            </div>
        </div>
    </section>

    <!-- Lista de Cursos -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                @foreach($courses as $index => $course)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="md:flex">
                            <!-- Ícone/Número -->
                            <div class="md:w-1/4 bg-gradient-to-br from-red-500 to-red-700 text-white p-8 flex flex-col justify-center items-center">
                                <div class="text-6xl mb-4">{{ $course['icon'] }}</div>
                                <div class="text-center">
                                    <p class="text-sm text-red-100">Duração</p>
                                    <p class="font-bold">{{ $course['duration'] }}</p>
                                </div>
                            </div>

                            <!-- Conteúdo -->
                            <div class="md:w-3/4 p-8">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">
                                    {{ $index + 1 }}. {{ $course['name'] }}
                                </h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">
                                    {{ $course['description'] }}
                                </p>

                                <!-- Skills -->
                                <div class="mb-4">
                                    <p class="text-sm font-semibold text-gray-700 mb-2">Competências Desenvolvidas:</p>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($course['skills'] as $skill)
                                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                                {{ $skill }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- CTA -->
                                <a href="{{ route('contact') }}" class="inline-block bg-red-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-red-700 transition">
                                    Inscreva-se <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Processo de Inscrição -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Como se Inscrever?
                </h2>
                <p class="text-gray-600 text-lg">
                    Siga os passos abaixo para garantir sua vaga em um de nossos cursos
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Passo 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Escolha o Curso</h3>
                    <p class="text-gray-600">
                        Selecione o curso técnico que mais se adequa ao seu perfil profissional.
                    </p>
                </div>

                <!-- Passo 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Preencha o Formulário</h3>
                    <p class="text-gray-600">
                        Complete o formulário de inscrição com seus dados pessoais e acadêmicos.
                    </p>
                </div>

                <!-- Passo 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Realize o Vestibulinho</h3>
                    <p class="text-gray-600">
                        Participe da prova de seleção para avaliar seus conhecimentos.
                    </p>
                </div>

                <!-- Passo 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-600 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Comece a Estudar</h3>
                    <p class="text-gray-600">
                        Inicie sua jornada de aprendizado e desenvolvimento profissional.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Requisitos de Admissão -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">
                        Requisitos de Admissão
                    </h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-600 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Ensino Médio Completo</p>
                                <p class="text-gray-600 text-sm">Ter concluído o ensino médio ou estar no último ano</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-600 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Maior de 18 Anos</p>
                                <p class="text-gray-600 text-sm">Ter no mínimo 18 anos de idade</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-600 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Documentos Válidos</p>
                                <p class="text-gray-600 text-sm">Possuir RG, CPF e comprovante de residência</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-green-600 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Aprovação no Vestibulinho</p>
                                <p class="text-gray-600 text-sm">Ser aprovado na prova de seleção</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">
                        Benefícios dos Alunos
                    </h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Educação Gratuita</p>
                                <p class="text-gray-600 text-sm">Cursos técnicos sem qualquer custo para o aluno</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Infraestrutura Moderna</p>
                                <p class="text-gray-600 text-sm">Laboratórios equipados com tecnologia de ponta</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Oportunidades de Estágio</p>
                                <p class="text-gray-600 text-sm">Conexões com empresas parceiras para prática profissional</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <p class="font-semibold text-gray-800">Certificado Reconhecido</p>
                                <p class="text-gray-600 text-sm">Diploma válido em todo o Estado de São Paulo</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Encontrou o curso ideal?
            </h2>
            <p class="text-lg mb-8 text-red-100 max-w-2xl mx-auto">
                Não perca a oportunidade de transformar sua carreira. Inscreva-se agora!
            </p>
            <a href="{{ route('contact') }}" class="bg-white text-red-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition inline-block">
                Inscrever-se Agora
            </a>
        </div>
    </section>
@endsection
