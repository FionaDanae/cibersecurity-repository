@extends('layouts.public')

@section('titulo', 'Recursos - Ciberseguridad')

@section('content')
<div class="container mx-auto px-4 py-8 bg-gray-900">
    <h1 class="text-4xl font-bold text-blue-400 mb-8" id="typed-heading"></h1>
    
    <!-- Sección de Amenazas Recientes -->
    <section class="mb-12" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-2xl font-semibold text-blue-300 mb-4">Amenazas Recientes</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 transition-all duration-300" data-aos="fade-right">
                <img src="/images/ransomware.jpg" alt="Ransomware Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Ransomware</h3>
                <p class="text-gray-300">Información sobre las últimas variantes de ransomware y cómo protegerse contra ellas.</p>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 transition-all duration-300" data-aos="fade-up">
                <img src="/images/phishing.jpg" alt="Phishing Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Phishing</h3>
                <p class="text-gray-300">Guía actualizada sobre cómo identificar y evitar ataques de phishing.</p>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 transition-all duration-300" data-aos="fade-left">
                <img src="/images/malware.png" alt="Malware Icon" class="w-48 h-40 object-cover object-center mx-auto mb-4 rounded-lg">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Malware</h3>
                <p class="text-gray-300">Últimas tendencias en malware y medidas de protección recomendadas.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Mejores Prácticas -->
    <section class="mb-12" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-2xl font-semibold text-blue-300 mb-4">Mejores Prácticas</h2>
        <div class="bg-gray-800 rounded-lg shadow-xl p-6">
            <ul class="space-y-4">
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="100">
                    <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300">Mantén tus sistemas y software actualizados regularmente</span>
                </li>
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="200">
                    <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300">Usa contraseñas fuertes y únicas para cada cuenta</span>
                </li>
                <li class="flex items-start" data-aos="fade-right" data-aos-delay="300">
                    <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-gray-300">Habilita la autenticación de dos factores cuando sea posible</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- Sección de Recursos Adicionales -->
    <section class="mb-12" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="text-2xl font-semibold text-blue-300 mb-4">Recursos Adicionales</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="#" class="block bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 transition-all duration-300" data-aos="flip-left">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Guías y Tutoriales</h3>
                <p class="text-gray-300">Accede a nuestra colección de guías detalladas sobre seguridad informática.</p>
            </a>
            <a href="#" class="block bg-gray-800 rounded-lg shadow-xl p-6 hover:bg-gray-700 transition-all duration-300" data-aos="flip-right">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Herramientas Recomendadas</h3>
                <p class="text-gray-300">Lista curada de herramientas de seguridad para proteger tus sistemas.</p>
            </a>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section data-aos="fade-up" data-aos-duration="1000">
        <div class="bg-gray-800 rounded-lg shadow-xl p-6">
            <h2 class="text-2xl font-semibold text-blue-300 mb-4">Datos Interesantes sobre Ciberseguridad</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-gray-700 p-4 rounded-lg" data-aos="flip-left">
                    <h3 class="text-xl font-semibold text-blue-400 mb-2">Estadísticas Globales</h3>
                    <p class="text-gray-300">El costo global del cibercrimen se estima en más de $6 billones anuales para 2021, equivalente al PIB de la tercera economía mundial.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg" data-aos="flip-right">
                    <h3 class="text-xl font-semibold text-blue-400 mb-2">Datos de Ataques</h3>
                    <p class="text-gray-300">Cada 39 segundos ocurre un ataque cibernético en algún lugar del mundo, afectando a uno de cada tres usuarios de Internet.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg" data-aos="flip-right">
                    <h3 class="text-xl font-semibold text-blue-400 mb-2">Tendencias</h3>
                    <p class="text-gray-300">El 95% de las brechas de ciberseguridad se deben a errores humanos, destacando la importancia de la capacitación en seguridad.</p>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg" data-aos="flip-left">
                    <h3 class="text-xl font-semibold text-blue-400 mb-2">Protección</h3>
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
    AOS.init();
    
    new Typed('#typed-heading', {
        strings: ['Recursos de Ciberseguridad', 'Protege tu Información', 'Mantente Seguro'],
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