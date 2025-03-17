@extends('layouts.public')

@section('titulo', 'Inicio - Ciberseguridad')

@section('content')
<div class="min-h-screen relative ">
    <div class="matrix-bg fixed inset-0 z-0">
        <div class="matrix-rain"></div>
        <style>
            .terminal-bg {
                background-color: rgba(0, 0, 0, 0.95);
                font-family: 'Fira Code', 'Consolas', monospace;
            }
            .terminal-text {
                color: #0f0;
                text-shadow: 0 0 5px #0f0;
            }
            .terminal-prompt::before {
                content: '> ';
                color: #0f0;
                font-weight: bold;
            }
            .section-header {
                border-bottom: 1px solid #0f0;
                padding-bottom: 0.5rem;
                margin-bottom: 1.5rem;
            }
            .section-header::before {
                content: '$ ';
                color: #0f0;
                font-family: 'Fira Code', monospace;
            }
            .matrix-card {
                background: rgba(0, 0, 0, 0.9);
                border: 1px solid #0f0;
                box-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
            }
            .matrix-card:hover {
                box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
                transform: translateY(-5px);
            }
            @keyframes blink {
                0%, 100% { opacity: 1; }
                50% { opacity: 0; }
            }
            .cursor-blink::after {
                content: '_';
                animation: blink 1s infinite;
                color: #0f0;
            }
            .neon-text-green {
                color: #0f0;
                text-shadow: 0 0 5px #0f0, 0 0 10px #0f0, 0 0 15px #0f0;
            }
            .neon-text-blue {
                color: #54a4fc;
                text-shadow: 0 0 5px #54a4fc, 0 0 10px #54a4fc, 0 0 15px #54a4fc;
            }
            .neon-text-red {
                color: #fc2c34;
                text-shadow: 0 0 5px #fc2c34, 0 0 10px #fc2c34, 0 0 15px #fc2c34;
            }
            .neon-text-purple {
                color: #c47cfc;
                text-shadow: 0 0 5px #c47cfc, 0 0 10px #c47cfc, 0 0 15px #c47cfc;
            }
        </style>
    </div>
    <div class="relative z-10">

    <!-- Hero Section -->
    <div class="relative overflow-hidden py-6 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32 bg-gray-900">
                <main class="mt-6 sm:mt-10 mx-auto max-w-7xl px-4 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl tracking-tight font-extrabold matrix-heading font-inter">
                            <span class="block mb-1 sm:mb-2 text-white">Congreso Internacional de Ciberseguridad</span>
                            <span class="block text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Descubre las <span id="typed-container" class="inline-block min-w-[120px] sm:min-w-[150px] md:min-w-[180px]"><span id="typed"></span></span></span>
                        </h1>
                        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                        <script>
                            new Typed('#typed', {
                                strings: [
                                    '<span class="font-mono neon-text-green animate-pulse">tendencias</span>',
                                    '<span class="font-mono neon-text-blue animate-pulse">tecnologías</span>',
                                    '<span class="font-mono neon-text-red animate-pulse">estrategias</span>',
                                    '<span class="font-mono neon-text-purple animate-pulse">innovaciones</span>'
                                ],
                                typeSpeed: 70,
                                backSpeed: 40,
                                loop: true,
                                cursorChar: '_',
                                html: true,
                                showCursor: true,
                                fadeOut: true,
                                fadeOutClass: 'typed-fade-out',
                                fadeOutDelay: 500
                            });
                        </script>
                        <p class="mt-2 sm:mt-3 text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 sm:max-w-xl sm:mx-auto lg:mx-0">
                            Únete a expertos mundiales en ciberseguridad para explorar las últimas amenazas, defensas y tecnologías que están definiendo el futuro de la seguridad digital.
                        </p>
                        <div class="mt-5 sm:mt-8 flex justify-center lg:justify-start">
                            <div class="w-full sm:w-auto rounded-md shadow">
                                <a href="#servicios" class="w-full flex items-center justify-center px-8 py-3 text-base font-medium rounded-md text-black bg-green-400 hover:bg-green-300 hover:text-gray-900 border border-green-500 shadow-lg shadow-green-500/50 md:py-4 md:text-lg md:px-10 transition duration-300 transform hover:scale-105">
                                    Ver programa
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="servicios" class="py-12 bg-gray-800/30" data-aos="zoom-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
            <h2 class="text-base text-green-400 font-semibold tracking-wide uppercase neon-title-green">Servicios</h2>
                <!-- <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-purple-100 sm:text-4xl neon-title">Soluciones de seguridad integral</p> -->
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Soluciones de seguridad integral</p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-6 sm:gap-8 md:gap-10 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Feature 1 -->
                    <div class="relative group" data-aos="zoom-in">
                        <div class="h-full matrix-card p-6 rounded-lg transform transition duration-500 hover:scale-105">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-400 text-white mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-green-200 mb-2">Protección Avanzada</h3>
                            <p class="text-gray-300">Implementamos las últimas tecnologías en seguridad para proteger tu infraestructura digital.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="relative group" data-aos="zoom-in">
                        <div class="h-full matrix-card p-6 rounded-lg transform transition duration-500 hover:scale-105">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-400 text-white mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-green-200 mb-2">Monitoreo 24/7</h3>
                            <p class="text-gray-300">Vigilancia continua de tu red y sistemas para detectar y responder a amenazas en tiempo real.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="relative group" data-aos="zoom-in">
                        <div class="h-full matrix-card p-6 rounded-lg transform transition duration-500 hover:scale-105">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-400 text-white mb-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-green-200 mb-2">Análisis de Vulnerabilidades</h3>
                            <p class="text-gray-300">Identificamos y corregimos puntos débiles en tu infraestructura antes de que sean explotados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Section -->
    <div id="agenda" class="py-16 bg-gray-800/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-base text-blue-400 font-semibold tracking-wide uppercase neon-title-blue">Agenda del Congreso</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Programa de Actividades</p>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Day 1 -->
                    <div class="p-6 rounded-lg bg-black border-2 border-blue-500 transition-all duration-300 hover:shadow-[0_0_15px_#346ca4,0_0_30px_rgba(52,108,164,0.3),0_0_45px_rgba(52,108,164,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <h3 class="text-xl font-bold text-blue-400 mb-4">Día 1 - Fundamentos</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">09:00</span>
                                <div>
                                    <p class="text-white font-medium">Ceremonia de Apertura</p>
                                    <p class="text-gray-400 text-sm">Bienvenida e introducción al congreso</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">10:30</span>
                                <div>
                                    <p class="text-white font-medium">Ciberseguridad 101</p>
                                    <p class="text-gray-400 text-sm">Conceptos básicos y panorama actual</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">14:00</span>
                                <div>
                                    <p class="text-white font-medium">Taller Práctico</p>
                                    <p class="text-gray-400 text-sm">Herramientas básicas de seguridad</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Day 2 -->
                    <div class="p-6 rounded-lg bg-black border-2 border-blue-500 transition-all duration-300 hover:shadow-[0_0_15px_#346ca4,0_0_30px_rgba(52,108,164,0.3),0_0_45px_rgba(52,108,164,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <h3 class="text-xl font-bold text-blue-400 mb-4">Día 2 - Técnicas Avanzadas</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">09:00</span>
                                <div>
                                    <p class="text-white font-medium">Ethical Hacking</p>
                                    <p class="text-gray-400 text-sm">Metodologías y mejores prácticas</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">11:30</span>
                                <div>
                                    <p class="text-white font-medium">Forense Digital</p>
                                    <p class="text-gray-400 text-sm">Análisis y recuperación de evidencias</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">15:00</span>
                                <div>
                                    <p class="text-white font-medium">CTF Challenge</p>
                                    <p class="text-gray-400 text-sm">Competencia práctica de habilidades</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Day 3 -->
                    <div class="p-6 rounded-lg bg-black border-2 border-blue-500 transition-all duration-300 hover:shadow-[0_0_15px_#346ca4,0_0_30px_rgba(52,108,164,0.3),0_0_45px_rgba(52,108,164,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <h3 class="text-xl font-bold text-blue-400 mb-4">Día 3 - Futuro Profesional</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">09:00</span>
                                <div>
                                    <p class="text-white font-medium">Tendencias Emergentes</p>
                                    <p class="text-gray-400 text-sm">IA y Ciberseguridad</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">11:00</span>
                                <div>
                                    <p class="text-white font-medium">Panel de Expertos</p>
                                    <p class="text-gray-400 text-sm">Oportunidades laborales en ciberseguridad</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-400 mr-2">16:00</span>
                                <div>
                                    <p class="text-white font-medium">Ceremonia de Clausura</p>
                                    <p class="text-gray-400 text-sm">Entrega de certificados</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Speakers Section -->
    <div id="ponentes" class="py-16 bg-gray-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-base text-purple-400 font-semibold tracking-wide uppercase neon-title-purple">Ponentes Destacados</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Expertos en Ciberseguridad</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Speaker 1 -->
                <div class="speaker-card rounded-lg overflow-hidden">
                <div class="p-6 rounded-lg bg-black border-2 border-purple-500 transition-all duration-300 hover:shadow-[0_0_15px_#a855f7,0_0_30px_rgba(168,85,247,0.3),0_0_45px_rgba(168,85,247,0.1)] hover:border-purple-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="/images/M. C. María del Carmen Santiago Díaz.jpg" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-purple-400 text-center mb-2">M. C. María del Carmen Santiago Díaz</h3>
                        <p class="text-gray-300 text-center mb-2">Especialista</p>
                        <p class="text-gray-400 text-sm text-center">Coordinadora</p>
                    </div>
                </div>

                <!-- Speaker 2 -->
                <div class="speaker-card rounded-lg overflow-hidden">
                <div class="p-6 rounded-lg bg-black border-2 border-purple-500 transition-all duration-300 hover:shadow-[0_0_15px_#a855f7,0_0_30px_rgba(168,85,247,0.3),0_0_45px_rgba(168,85,247,0.1)] hover:border-purple-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="/images/Dr. Gustavo Trinidad Rubín Linares.jpg" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-purple-400 text-center mb-2">Dr. Gustavo Trinidad Rubín Linares</h3>
                        <p class="text-gray-300 text-center mb-2">Especialista en Robótica</p>
                        <p class="text-gray-400 text-sm text-center">Coordinador</p>
                    </div>
                </div>

                <!-- Speaker 3 -->
                <div class="speaker-card rounded-lg overflow-hidden">
                <div class="p-6 rounded-lg bg-black border-2 border-purple-500 transition-all duration-300 hover:shadow-[0_0_15px_#a855f7,0_0_30px_rgba(168,85,247,0.3),0_0_45px_rgba(168,85,247,0.1)] hover:border-purple-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                        <div class="w-24 h-24 rounded-full mx-auto mb-4 overflow-hidden">
                            <img src="/images/M. C. Ana Claudia Zenteno Vázquez.jpg" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold text-purple-400 text-center mb-2">M. C. Ana Claudia Zenteno Vázquez</h3>
                        <p class="text-gray-300 text-center mb-2">Especialista en Redes</p>
                        <p class="text-gray-400 text-sm text-center">Colaboradora</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Additional Congress Information -->
    <div class="py-16 bg-gray-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-base text-red-400 font-semibold tracking-wide uppercase neon-title-red">Información del Congreso</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Beneficios y Oportunidades</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Workshops -->
                <div class="p-6 rounded-lg bg-black border-2 border-red-500 transition-all duration-300 hover:shadow-[0_0_15px_#ef4444,0_0_30px_rgba(239,68,68,0.3),0_0_45px_rgba(239,68,68,0.1)] hover:border-red-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-500 text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-red-400 mb-4">Talleres Prácticos</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>• Laboratorios de hacking ético</li>
                        <li>• Análisis de malware en tiempo real</li>
                        <li>• Configuración de firewalls</li>
                        <li>• Prácticas de forense digital</li>
                    </ul>
                </div>

                <!-- Networking -->
                <div class="p-6 rounded-lg bg-black border-2 border-red-500 transition-all duration-300 hover:shadow-[0_0_15px_#ef4444,0_0_30px_rgba(239,68,68,0.3),0_0_45px_rgba(239,68,68,0.1)] hover:border-red-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-500 text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-red-400 mb-4">Networking</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>• Sesiones de networking estructuradas</li>
                        <li>• Encuentros con profesionales del sector</li>
                        <li>• Oportunidades laborales</li>
                        <li>• Mentorías personalizadas</li>
                    </ul>
                </div>

                <!-- Certification -->
                <div class="p-6 rounded-lg bg-black border-2 border-red-500 transition-all duration-300 hover:shadow-[0_0_15px_#ef4444,0_0_30px_rgba(239,68,68,0.3),0_0_45px_rgba(239,68,68,0.1)] hover:border-red-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-red-500 text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-red-400 mb-4">Certificación</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>• Certificado de participación avalado</li>
                        <li>• Constancia de talleres prácticos</li>
                        <li>• Reconocimiento por competencias</li>
                        <li>• Validación internacional</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Retos y Competencias Section -->
    <div class="py-16 bg-gray-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-base text-green-400 font-semibold tracking-wide uppercase neon-title-green">Retos y Competencias</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Demuestra tus Habilidades</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- CTF Challenge -->
                <div class="matrix-card schedule-card p-6 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#10b981,0_0_30px_rgba(16,185,129,0.3),0_0_45px_rgba(16,185,129,0.1)] hover:border-green-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-500 text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-400 mb-4">Capture The Flag</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>• Desafíos de hacking ético</li>
                        <li>• Análisis forense</li>
                        <li>• Criptografía</li>
                        <li>• Premios para los ganadores</li>
                    </ul>
                </div>

                <!-- Hackathon -->
                <div class="matrix-card schedule-card p-6 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#10b981,0_0_30px_rgba(16,185,129,0.3),0_0_45px_rgba(16,185,129,0.1)] hover:border-green-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-500 text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-400 mb-4">Hackathon</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>• Desarrollo de soluciones</li>
                        <li>• Trabajo en equipo</li>
                        <li>• Mentores expertos</li>
                        <li>• Presentación de proyectos</li>
                    </ul>
                </div>

                <!-- Bug Bounty -->
                <div class="matrix-card schedule-card p-6 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#10b981,0_0_30px_rgba(16,185,129,0.3),0_0_45px_rgba(16,185,129,0.1)] hover:border-green-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-500 text-white mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-400 mb-4">Bug Bounty</h3>
                    <ul class="text-gray-300 space-y-2">
                        <li>• Búsqueda de vulnerabilidades</li>
                        <li>• Recompensas por hallazgos</li>
                        <li>• Reportes detallados</li>
                        <li>• Reconocimiento público</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-900 relative overflow-hidden">
        <div class="matrix-overlay absolute inset-0 opacity-20"></div>
        <div class="max-w-7xl mx-auto py-8 sm:py-12 px-4 sm:px-6 lg:py-16 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-8">
                <div class="text-center lg:text-left space-y-2">
                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight matrix-text-glow sm:text-4xl">
                        <span class="block text-white">¿Listo para el Congreso de Ciberseguridad?</span>
                        <span class="block text-white">¡Inscríbete ahora mismo!</span>
                    </h2>
                </div>
                <div class="flex justify-center lg:justify-end lg:flex-shrink-0">
                    <div class="rounded-md shadow matrix-button-glow">
                        <a href="/contacto" onclick="event.preventDefault(); initWormhole(event);" class="w-full flex items-center justify-center px-8 py-3 text-base font-medium rounded-md text-black bg-green-400 hover:bg-green-300 hover:text-gray-900 border border-green-500 shadow-lg shadow-green-500/50 md:py-4 md:text-lg md:px-10 transition duration-300 transform hover:scale-105">
                            <span class="mr-2">Contáctanos</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                    <script>
                    function initWormhole(event) {
                        const wormhole = document.createElement('div');
                        wormhole.className = 'wormhole';
                        document.body.appendChild(wormhole);
                        
                        setTimeout(() => {
                            window.location.href = event.target.closest('a').href;
                        }, 1000);
                    }
                    </script>
                    <style>
                    .wormhole {
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        width: 100vw;
                        height: 100vh;
                        background: radial-gradient(circle at center, rgba(0,255,0,0) 0%, rgba(0,255,0,0.2) 50%, rgba(0,0,0,1) 100%);
                        animation: wormhole-effect 1s ease-in forwards;
                        z-index: 9999;
                    }
                    
                    @keyframes wormhole-effect {
                        0% {
                            opacity: 0;
                            transform: translate(-50%, -50%) scale(0);
                        }
                        100% {
                            opacity: 1;
                            transform: translate(-50%, -50%) scale(2);
                        }
                    }
                    </style>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
<style>
    .matrix-card {
        background: rgba(17, 24, 39, 0.8);
        border: 1px solid rgba(59, 130, 246, 0.2);
        transition: all 0.3s ease;
    }
    .matrix-card:hover {
        box-shadow: 0 0 15px #06d16e ,
                    0 0 30px rgba(6, 209, 110, 0.3),
                    0 0 45px rgba(6, 209, 110, 0.1);
        border-color: #06d16e ;
        transform: translateY(-5px);
    }
    .neon-title {
        color: #0f0;
        text-shadow: 0 0 10px #0f0;
        animation: neonFlicker 2s infinite;
    }

    @keyframes neonFlicker {
        0%, 100% {
            opacity: 1;
            text-shadow: 0 0 10px #0f0,
                       0 0 20px #0f0,
                       0 0 30px #0f0;
        }
        50% {
            opacity: 0.8;
            text-shadow: 0 0 5px #0f0,
                       0 0 10px #0f0,
                       0 0 15px #0f0;
        }
    }
    .neon-title-green {
        color: #4ADE80;
        text-shadow: 0 0 10px #4ADE80;
        animation: neonGlowGreen 4s infinite;
    }

    .neon-title-blue {
        color: #346CA4;
        text-shadow: 0 0 10px #346CA4;
        animation: neonGlowBlue 4s infinite;
    }

    .neon-title-purple {
        color: #A855F7;
        text-shadow: 0 0 10px #A855F7;
        animation: neonGlowPurple 4s infinite;
    }

    .neon-title-red {
        color: #EF4444;
        text-shadow: 0 0 10px #EF4444;
        animation: neonGlowRed 4s infinite;
    }

    @keyframes neonGlowGreen {
        0%, 100% {
            color: #4ADE80;
            text-shadow: 0 0 10px #4ADE80;
        }
        50% {
            color: #22C55E;
            text-shadow: 0 0 20px #22C55E;
        }
    }

    @keyframes neonGlowBlue {
        0%, 100% {
            color: #346CA4;
            text-shadow: 0 0 10px #346CA4;
        }
        50% {
            color: #2563EB;
            text-shadow: 0 0 20px #2563EB;
        }
    }

    @keyframes neonGlowPurple {
        0%, 100% {
            color: #A855F7;
            text-shadow: 0 0 10px #A855F7;
        }
        50% {
            color: #9333EA;
            text-shadow: 0 0 20px #9333EA;
        }
    }

    @keyframes neonGlowRed {
        0%, 100% {
            color: #EF4444;
            text-shadow: 0 0 10px #EF4444;
        }
        50% {
            color: #DC2626;
            text-shadow: 0 0 20px #DC2626;
        }
    }
</style>
