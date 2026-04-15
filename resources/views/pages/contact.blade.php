@extends('layouts.app')

@section('title', 'Contato - ETEC Zona Leste')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Entre em Contato</h1>
            <p class="text-lg text-red-100">Estamos aqui para responder suas dúvidas e ajudar você</p>
        </div>
    </section>

    <!-- Informações de Contato -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Telefone -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-lg text-center">
                    <div class="text-4xl text-blue-600 mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Telefone</h3>
                    <p class="text-gray-700">{{ $contactInfo['phone'] }}</p>
                </div>

                <!-- Email -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-lg text-center">
                    <div class="text-4xl text-green-600 mb-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-700">{{ $contactInfo['email'] }}</p>
                </div>

                <!-- Endereço -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-lg text-center">
                    <div class="text-4xl text-purple-600 mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Endereço</h3>
                    <p class="text-gray-700 text-sm">{{ $contactInfo['address'] }}</p>
                </div>

                <!-- Horário -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-8 rounded-lg text-center">
                    <div class="text-4xl text-orange-600 mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Horário</h3>
                    <p class="text-gray-700 text-sm">{{ $contactInfo['hours'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato e Departamentos -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Formulário -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">
                        Envie uma Mensagem
                    </h2>
                    <form class="space-y-4">
                        <!-- Nome -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nome Completo
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                placeholder="Seu nome"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600"
                                required
                            >
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                placeholder="seu.email@exemplo.com"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600"
                                required
                            >
                        </div>

                        <!-- Telefone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                Telefone
                            </label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                placeholder="(11) 9999-9999"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600"
                            >
                        </div>

                        <!-- Assunto -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                Assunto
                            </label>
                            <select 
                                id="subject" 
                                name="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600"
                                required
                            >
                                <option value="">Selecione um assunto</option>
                                <option value="inscricao">Inscrição em Cursos</option>
                                <option value="informacoes">Informações Gerais</option>
                                <option value="estagio">Oportunidades de Estágio</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <!-- Mensagem -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                Mensagem
                            </label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="5"
                                placeholder="Escreva sua mensagem aqui..."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600"
                                required
                            ></textarea>
                        </div>

                        <!-- Botão de Envio -->
                        <button 
                            type="submit"
                            class="w-full bg-red-600 text-white py-2 rounded-lg font-bold hover:bg-red-700 transition"
                        >
                            <i class="fas fa-paper-plane mr-2"></i> Enviar Mensagem
                        </button>
                    </form>

                    <!-- Aviso -->
                    <div class="mt-6 p-4 bg-blue-50 border-l-4 border-blue-600 rounded">
                        <p class="text-sm text-gray-700">
                            <strong>Nota:</strong> Este é um formulário de demonstração. Para enviar mensagens reais, 
                            configure um backend com envio de email.
                        </p>
                    </div>
                </div>

                <!-- Departamentos -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">
                        Departamentos
                    </h2>
                    <div class="space-y-4">
                        @foreach($departments as $dept)
                            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                                <h3 class="text-lg font-bold text-gray-800 mb-3">
                                    {{ $dept['name'] }}
                                </h3>
                                <div class="space-y-2 text-sm">
                                    <p class="flex items-center text-gray-700">
                                        <i class="fas fa-envelope text-red-600 mr-3 w-5"></i>
                                        <a href="mailto:{{ $dept['email'] }}" class="hover:text-red-600">
                                            {{ $dept['email'] }}
                                        </a>
                                    </p>
                                    <p class="flex items-center text-gray-700">
                                        <i class="fas fa-phone text-red-600 mr-3 w-5"></i>
                                        <a href="tel:{{ $dept['phone'] }}" class="hover:text-red-600">
                                            {{ $dept['phone'] }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa (Placeholder) -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                Localização
            </h2>
            <div class="bg-gray-300 rounded-lg overflow-hidden shadow-lg h-96 flex items-center justify-center">
                <div class="text-center">
                    <i class="fas fa-map text-6xl text-gray-500 mb-4"></i>
                    <p class="text-gray-600 text-lg">
                        Mapa interativo - Zona Leste, São Paulo - SP
                    </p>
                    <p class="text-gray-500 text-sm mt-2">
                        Coordenadas: {{ $contactInfo['coordinates']['latitude'] }}, {{ $contactInfo['coordinates']['longitude'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                Perguntas Frequentes
            </h2>
            <div class="space-y-4">
                <!-- FAQ 1 -->
                <details class="bg-white p-6 rounded-lg shadow-md cursor-pointer group">
                    <summary class="flex items-center justify-between font-bold text-gray-800 hover:text-red-600">
                        <span>Como faço para me inscrever em um curso?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        Para se inscrever, visite a página de Cursos, escolha o programa desejado e 
                        preencha o formulário de inscrição. Você também pode entrar em contato conosco 
                        para mais informações sobre o processo de seleção.
                    </p>
                </details>

                <!-- FAQ 2 -->
                <details class="bg-white p-6 rounded-lg shadow-md cursor-pointer group">
                    <summary class="flex items-center justify-between font-bold text-gray-800 hover:text-red-600">
                        <span>Os cursos são realmente gratuitos?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        Sim! Todos os cursos técnicos oferecidos pela ETEC Zona Leste são completamente 
                        gratuitos. Somos uma instituição pública vinculada ao Centro Paula Souza.
                    </p>
                </details>

                <!-- FAQ 3 -->
                <details class="bg-white p-6 rounded-lg shadow-md cursor-pointer group">
                    <summary class="flex items-center justify-between font-bold text-gray-800 hover:text-red-600">
                        <span>Qual é a duração dos cursos?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        A maioria dos cursos tem duração de 3 semestres (1,5 anos). Alguns cursos mais 
                        avançados podem ter 4 semestres. As aulas geralmente ocorrem no período noturno.
                    </p>
                </details>

                <!-- FAQ 4 -->
                <details class="bg-white p-6 rounded-lg shadow-md cursor-pointer group">
                    <summary class="flex items-center justify-between font-bold text-gray-800 hover:text-red-600">
                        <span>Há oportunidades de estágio?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-gray-600 mt-4">
                        Sim! A ETEC Zona Leste possui parcerias com diversas empresas que oferecem 
                        oportunidades de estágio para nossos alunos. O departamento de oportunidades 
                        pode ajudar na busca por vagas.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">
                Ainda tem dúvidas?
            </h2>
            <p class="text-lg mb-8 text-red-100">
                Nossa equipe está pronta para ajudar você a esclarecer qualquer questão.
            </p>
            <a href="#" class="bg-white text-red-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition inline-block">
                Agendar Atendimento
            </a>
        </div>
    </section>
@endsection
