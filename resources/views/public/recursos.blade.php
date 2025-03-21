@extends('layouts.public')

@section('titulo', 'Recursos - Ciberseguridad')

@section('content')
<div class="container mx-auto px-4 py-8 bg-gray-0">
    <h1 class="text-4xl font-bold text-purple-400 mb-8" id="typed-heading"></h1>
    
    <!-- Featured Article -->
    <div class="mb-12 bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-xl">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset ('images/destacado.jpg') }}" alt="Featured article image">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-[#A855F7] font-semibold">Destacado</div>
                    <h2 class="block mt-1 text-2xl leading-tight font-bold text-white">
                        Nuevas Tendencias en Ciberataques 2024
                    </h2>
                    <p class="mt-2 text-gray-300">
                        Análisis detallado de las últimas tendencias en ciberataques y cómo las organizaciones pueden prepararse.
                    </p>
                    <div class="mt-4">
                        <a href="http://checkpoint.com/es/cyber-hub/cyber-security/top-7-cyber-security-trends-in-2024/" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Article 1 -->
            <div class="bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/proteccion ransomware.jpg') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#A855F7] text-sm font-semibold mb-2">SEGURIDAD</div>
                    <h3 class="text-xl font-bold text-white mb-2">Protección contra Ransomware</h3>
                    <p class="text-gray-300 mb-4">Estrategias efectivas para proteger tu organización contra ataques de ransomware.</p>
                    <a href="#" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia.jpg') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#A855F7] text-sm font-semibold mb-2">CONFERENCIA</div>
                    <h3 class="text-xl font-bold text-white mb-2">Speakers Confirmados</h3>
                    <p class="text-gray-300 mb-4">Conoce a los expertos internacionales que participarán en nuestro congreso.</p>
                    <a href="#" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia4.png') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#A855F7] text-sm font-semibold mb-2">TALLERES</div>
                    <h3 class="text-xl font-bold text-white mb-2">Workshops Prácticos</h3>
                    <p class="text-gray-300 mb-4">Descubre los talleres hands-on que tendremos en esta edición del congreso.</p>
                    <a href="#" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>
        </div>

        <!-- Hidden Articles (Initially Hidden) -->
        <div id="hidden-articles" class="hidden grid gap-8 md:grid-cols-2 lg:grid-cols-3 mt-8">
            <!-- Article 4 -->
            <div class="bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/ai.webp') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#A855F7] text-sm font-semibold mb-2">INVESTIGACIÓN</div>
                    <h3 class="text-xl font-bold text-white mb-2">Inteligencia Artificial en Ciberseguridad</h3>
                    <p class="text-gray-300 mb-4">Avances y aplicaciones de la IA en la detección y prevención de amenazas cibernéticas.</p>
                    <a href="#" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/seguridad.webp') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#A855F7] text-sm font-semibold mb-2">REGULACIÓN</div>
                    <h3 class="text-xl font-bold text-white mb-2">Nuevas Normativas de Seguridad</h3>
                    <p class="text-gray-300 mb-4">Actualizaciones en las regulaciones internacionales de protección de datos y privacidad.</p>
                    <a href="#" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="bg-gray-800/20 bg-opacity-60 backdrop-blur-sm rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-all duration-300 hover:bg-opacity-70">
                <img class="w-full h-48 object-cover" src="{{ asset ('images/Noticia3.png') }}" alt="Article image">
                <div class="p-6">
                    <div class="text-[#A855F7] text-sm font-semibold mb-2">INNOVACIÓN</div>
                    <h3 class="text-xl font-bold text-white mb-2">Blockchain en Ciberseguridad</h3>
                    <p class="text-gray-300 mb-4">Implementaciones innovadoras de blockchain para mejorar la seguridad digital.</p>
                    <a href="#" class="text-[#A855F7] hover:text-[#311b92]">Leer más →</a>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button onclick="toggleArticles()" class="bg-[#A855F7] hover:bg-[#865fec] text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Cargar más noticias
            </button>
        </div>

        <script>
            function toggleArticles() {
                const hiddenArticles = document.getElementById('hidden-articles');
                const button = event.target;
                
                if (hiddenArticles.classList.contains('hidden')) {
                    hiddenArticles.classList.remove('hidden');
                    button.textContent = 'Mostrar menos';
                } else {
                    hiddenArticles.classList.add('hidden');
                    button.textContent = 'Cargar más noticias';
                }
            }
        </script>

    
    <!-- Sección de Amenazas Recientes -->
    <section class="mb-12 mt-24" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-6xl font-semibold text-center mb-4 neon-title">AMENAZAS RECIENTES</h2>
        <style>
            .neon-title {
                color: #A855F7;
                text-shadow: 0 0 10px #A855F7;
                animation: neonGlow 4s infinite;
            }
            
            @keyframes neonGlow {
                0%, 100% {
                    color: #A855F7;
                    text-shadow: 0 0 10px #A855F7;
                }
                45% {
                    color: #A855F7;
                    text-shadow: 0 0 15px #A855F7;
                }
                50% {
                    color: #EF4444;
                    text-shadow: 0 0 20px #EF4444;
                }
                55% {
                    color: #A855F7;
                    text-shadow: 0 0 15px #A855F7;
                }
            }
        </style>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-800/40 bg-opacity-60 rounded-lg shadow-xl p-6 hover:bg-gray-700 hover:scale-105 hover:shadow-purple-500/50 transition-all duration-300 transform" data-aos="fade-up" data-aos-duration="800">
                <img src="/images/ransomware1.webp" alt="Ransomware Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                <h3 class="text-xl font-semibold text-purple-400 mb-2 typed-title-1 text-center">Ransomware</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300 text-justify">Información sobre las últimas variantes de ransomware y cómo protegerse contra ellas.</p>
            </div>
            <div class="bg-gray-800/40 bg-opacity-60 rounded-lg shadow-xl p-6 hover:bg-gray-700 hover:scale-105 hover:shadow-purple-500/50 transition-all duration-300 transform" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <img src="/images/phishing1.jpg" alt="Phishing Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                <h3 class="text-xl font-semibold text-purple-400 mb-2 typed-title-2 text-center">Phishing</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300 text-justify">Guía actualizada sobre cómo identificar y evitar ataques de phishing.</p>
            </div>
            <div class="bg-gray-800/40 bg-opacity-60 rounded-lg shadow-xl p-6 hover:bg-gray-700 hover:scale-105 hover:shadow-purple-500/50 transition-all duration-300 transform" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <img src="/images/malware1.jpg" alt="Malware Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                <h3 class="text-xl font-semibold text-purple-400 mb-2 typed-title-3 text-center">Malware</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300 text-justify">Últimas tendencias en malware y medidas de protección recomendadas.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Mejores Prácticas -->
    <section class="mb-12" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-2xl font-semibold text-purple-300 mb-4">Mejores Prácticas</h2>
        <div class="bg-gray-800 rounded-lg shadow-xl p-6 border-2 border-purple-500 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/75 hover:scale-105 hover:bg-gray-700" data-aos="flip-left">
            <ul class="space-y-4">
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="100">
                    <svg class="h-6 w-6 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Usa contraseñas fuertes y únicas para cada cuenta</span>
                </li>
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="200">
                    <svg class="h-6 w-6 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Mantén tus sistemas y software actualizados regularmente</span>
                </li>
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="300">
                    <svg class="h-6 w-6 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Habilita la autenticación de dos factores cuando sea posible</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- Sección de Recursos Adicionales -->
    <section class="mb-12" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-2xl font-semibold text-purple-300 mb-4">Recursos Adicionales</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="#" class="block bg-gray-800 rounded-lg shadow-xl p-6 border-2 border-purple-500 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/75 hover:scale-105 hover:bg-gray-700" data-aos="flip-left">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Guías y Tutoriales</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300 text-justify">Accede a nuestra colección de guías detalladas sobre seguridad informática.</p>
            </a>
            <a href="#" class="block bg-gray-800 rounded-lg shadow-xl p-6 border-2 border-purple-500 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/75 hover:scale-105 hover:bg-gray-700" data-aos="flip-right">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Herramientas Recomendadas</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300 text-justify">Lista curada de herramientas de seguridad para proteger tus sistemas.</p>
            </a>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section data-aos="fade-up" data-aos-duration="1000">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6">
            <h2 class="text-2xl font-semibold text-purple-300 mb-4">Datos Interesantes sobre Ciberseguridad</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-left">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Estadísticas Globales</h3>
                    <p class="text-gray-300 text-justify">El costo global del cibercrimen se estima en más de $6 billones anuales para 2021, equivalente al PIB de la tercera economía mundial.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-right">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Datos de Ataques</h3>
                    <p class="text-gray-300 text-justify">Cada 39 segundos ocurre un ataque cibernético en algún lugar del mundo, afectando a uno de cada tres usuarios de Internet.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-right">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Tendencias</h3>
                    <p class="text-gray-300 text-justify">El 95% de las brechas de ciberseguridad se deben a errores humanos, destacando la importancia de la capacitación en seguridad.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-left">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Protección</h3>
                    <p class="text-gray-300 text-justify">Las empresas tardan un promedio de 280 días en identificar y contener una brecha de datos, resaltando la necesidad de sistemas proactivos.</p>
                </div>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    AOS.init({
        once: false,
        mirror: true
    });
    
    new Typed('#typed-heading', {
        strings: ['Recursos de Ciberseguridad', 'Protege tu Información', 'Mantente Seguro'],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true
    });

    new Typed('.typed-title-1', {
        strings: ['Ransomware', 'Secuestro Digital', 'Amenaza Critica'],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true
    });

    new Typed('.typed-title-2', {
        strings: ['Phishing', 'Suplantación', 'Engaño Digital'],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true
    });

    new Typed('.typed-title-3', {
        strings: ['Malware', 'Virus', 'Código Malicioso'],
        typeSpeed: 50,
        backSpeed: 30,
        backDelay: 2000,
        loop: true
    });
</script>
@endpush

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@endsection