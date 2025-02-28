@extends('layouts.public')

@section('titulo', 'Inicio - Ciberseguridad')

@section('content')
<div class="bg-gray-900 min-h-screen">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 bg-gray-900">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-cyan-400 sm:text-5xl md:text-6xl">
                            <span class="block">Protege tu mundo digital</span>
                            <span class="block text-white">con soluciones <span id="typed-container" style="display: inline-block; min-width: 200px;"><span id="typed"></span></span></span>
                        </h1>
                        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                        <script>
                            new Typed('#typed', {
                                strings: [
                                    '<span class="text-red-400">avanzadas</span>',
                                    '<span class="text-emerald-400">actualizadas</span>',
                                    '<span class="text-pink-400">innovadoras</span>',
                                    '<span class="text-amber-400">novedosas</span>'
                                ],
                                typeSpeed: 50,
                                backSpeed: 30,
                                loop: true,
                                cursorChar: '|',
                                html: true,
                                showCursor: true,
                                fadeOut: false,
                                fadeOutClass: 'typed-fade-out',
                                fadeOutDelay: 500
                            });
                        </script>
                        <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Descubre las últimas tecnologías y estrategias en ciberseguridad para mantener tus activos digitales seguros en un mundo cada vez más conectado.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="#servicios" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 md:py-4 md:text-lg md:px-10 transition duration-300">
                                    Explorar servicios
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cybersecurity">
        </div>
    </div>

    <!-- Features Section -->
    <div id="servicios" class="py-12 bg-gray-800" data-aos="zoom-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-cyan-400 font-semibold tracking-wide uppercase">Servicios</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Soluciones de seguridad integral</p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Feature 1 -->
                    <div class="relative group" data-aos="zoom-in">
                        <div class="h-full bg-gray-900 p-6 rounded-lg border border-gray-700 transform transition duration-500 hover:scale-105 hover:border-cyan-400">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-cyan-400 text-white mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-white mb-2">Protección Avanzada</h3>
                            <p class="text-gray-400">Implementamos las últimas tecnologías en seguridad para proteger tu infraestructura digital.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="relative group" data-aos="zoom-in">
                        <div class="h-full bg-gray-900 p-6 rounded-lg border border-gray-700 transform transition duration-500 hover:scale-105 hover:border-cyan-400">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-cyan-400 text-white mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-white mb-2">Monitoreo 24/7</h3>
                            <p class="text-gray-400">Vigilancia continua de tu red y sistemas para detectar y responder a amenazas en tiempo real.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="relative group" data-aos="zoom-in">
                        <div class="h-full bg-gray-900 p-6 rounded-lg border border-gray-700 transform transition duration-500 hover:scale-105 hover:border-cyan-400">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-cyan-400 text-white mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-white mb-2">Análisis de Vulnerabilidades</h3>
                            <p class="text-gray-400">Identificamos y corregimos puntos débiles en tu infraestructura antes de que sean explotados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">¿Listo para proteger tu negocio?</span>
                <span class="block text-cyan-400">Contáctanos hoy mismo.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/contacto" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-black bg-cyan-400 hover:bg-cyan-500 transition duration-300">
                        Contactar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection