@extends('layouts.public')

@section('titulo', 'Recursos - Ciberseguridad')

@section('content')
<div class="container mx-auto px-4 py-8 bg-gray-0">
    <h1 class="text-4xl font-bold text-purple-400 mb-8" id="typed-heading"></h1>
    
    <!-- Sección de Amenazas Recientes -->
    <section class="mb-12" data-aos="fade-up" data-aos-duration="1000">
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
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 hover:scale-105 hover:shadow-purple-500/50 transition-all duration-300 transform" data-aos="fade-up" data-aos-duration="800">
                <img src="/images/ransomware1.webp" alt="Ransomware Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                <h3 class="text-xl font-semibold text-purple-400 mb-2 typed-title-1">Ransomware</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Información sobre las últimas variantes de ransomware y cómo protegerse contra ellas.</p>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 hover:scale-105 hover:shadow-purple-500/50 transition-all duration-300 transform" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <img src="/images/phishing1.jpg" alt="Phishing Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                <h3 class="text-xl font-semibold text-purple-400 mb-2 typed-title-2">Phishing</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Guía actualizada sobre cómo identificar y evitar ataques de phishing.</p>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 hover:scale-105 hover:shadow-purple-500/50 transition-all duration-300 transform" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <img src="/images/malware1.jpg" alt="Malware Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                <h3 class="text-xl font-semibold text-purple-400 mb-2 typed-title-3">Malware</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Últimas tendencias en malware y medidas de protección recomendadas.</p>
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
                    <span class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Mantén tus sistemas y software actualizados regularmente</span>
                </li>
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="200">
                    <svg class="h-6 w-6 text-purple-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Usa contraseñas fuertes y únicas para cada cuenta</span>
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
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Accede a nuestra colección de guías detalladas sobre seguridad informática.</p>
            </a>
            <a href="#" class="block bg-gray-800 rounded-lg shadow-xl p-6 border-2 border-purple-500 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/75 hover:scale-105 hover:bg-gray-700" data-aos="flip-right">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Herramientas Recomendadas</h3>
                <p class="text-gray-300 hover:text-purple-300 transition-colors duration-300">Lista curada de herramientas de seguridad para proteger tus sistemas.</p>
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
                    <p class="text-gray-300">El costo global del cibercrimen se estima en más de $6 billones anuales para 2021, equivalente al PIB de la tercera economía mundial.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-right">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Datos de Ataques</h3>
                    <p class="text-gray-300">Cada 39 segundos ocurre un ataque cibernético en algún lugar del mundo, afectando a uno de cada tres usuarios de Internet.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-right">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Tendencias</h3>
                    <p class="text-gray-300">El 95% de las brechas de ciberseguridad se deben a errores humanos, destacando la importancia de la capacitación en seguridad.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg border-2 border-purple-500 shadow-lg shadow-purple-500/50 hover:shadow-purple-500/75 transition-all duration-300" data-aos="flip-left">
                    <h3 class="text-xl font-semibold text-purple-400 mb-2">Protección</h3>
                    <p class="text-gray-300">Las empresas tardan un promedio de 280 días en identificar y contener una brecha de datos, resaltando la necesidad de sistemas proactivos.</p>
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