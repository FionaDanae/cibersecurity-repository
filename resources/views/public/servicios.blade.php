@extends('layouts.public')

@section('titulo', 'Servicios - Ciberseguridad')

@section('content')
<style>
    @keyframes buttonGlow {
        0%, 100% {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(34, 211, 238, 0.8),
                       0 0 30px rgba(34, 211, 238, 0.6),
                       0 0 45px rgba(34, 211, 238, 0.4),
                       0 0 60px rgba(34, 211, 238, 0.2);
        }
        50% {
            transform: scale(1);
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.9),
                       0 0 35px rgba(34, 211, 238, 0.7),
                       0 0 50px rgba(34, 211, 238, 0.5),
                       0 0 65px rgba(34, 211, 238, 0.3);
        }
    }

    @keyframes neonFlicker {
        0%, 100% {
            opacity: 1;
            text-shadow: 0 0 10px rgba(34, 211, 238, 0.8),
                       0 0 20px rgba(34, 211, 238, 0.8),
                       0 0 30px rgba(34, 211, 238, 0.8);
        }
        50% {
            opacity: 0.8;
            text-shadow: 0 0 5px rgba(34, 211, 238, 0.5),
                       0 0 10px rgba(34, 211, 238, 0.5),
                       0 0 15px rgba(34, 211, 238, 0.5);
        }
    }
    .neon-title {
        animation: neonFlicker 2s infinite;
    }
    
    @keyframes checkmarkGlow {
        0%, 100% {
            filter: drop-shadow(0 0 15px rgba(34, 211, 238, 1))
                   drop-shadow(0 0 25px rgba(34, 211, 238, 0.95))
                   drop-shadow(0 0 35px rgba(34, 211, 238, 0.9))
                   drop-shadow(0 0 45px rgba(34, 211, 238, 0.85));
            transform: scale(1.25);
        }
        50% {
            filter: drop-shadow(0 0 12px rgba(34, 211, 238, 0.95))
                   drop-shadow(0 0 20px rgba(34, 211, 238, 0.9))
                   drop-shadow(0 0 30px rgba(34, 211, 238, 0.85));
            transform: scale(1.15);
        }
    }
    .rounded-full:hover svg {
        animation: checkmarkGlow 1.5s infinite;
    }
</style>
<div class="bg-gray-0 min-h-screen">
    <!-- Hero Section -->
    <div class="relative pt-16 pb-10 bg-gray-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-cyan-400 sm:text-5xl md:text-6xl neon-title">
                    Nuestros Servicios
                </h1> 
                <p class="mt-3 max-w-xl mx-auto text-base text-gray-300 sm:mt-5 sm:text-lg md:mt-5 md:text-xl">
                    Soluciones completas y personalizadas para proteger tu infraestructura digital contra las amenazas más sofisticadas.
                </p>
            </div>
        </div>
    </div>

    <!-- Services Detail Section -->
    <div class="py-12 bg-gray-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Service 1: Protección Avanzada -->
            <div class="bg-gray-800/30 rounded-lg p-6 mb-20">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="lg:w-1/2 lg:pr-12">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-cyan-400 text-white mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="ml-4 text-3xl font-extrabold text-white">Protección Avanzada</h2>
                        </div>
                        <p class="mt-4 text-lg text-gray-300">
                            Nuestras soluciones de protección avanzada implementan múltiples capas de seguridad para defender tus activos digitales contra amenazas conocidas y emergentes.
                        </p>
                        <div class="mt-8 space-y-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Firewalls de Nueva Generación</h3>
                                    <p class="mt-2 text-gray-400">Implementación de firewalls avanzados con capacidades de inspección profunda de paquetes y control de aplicaciones.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Protección Anti-Malware</h3>
                                    <p class="mt-2 text-gray-400">Soluciones avanzadas contra malware, ransomware, spyware y otras amenazas digitales con detección basada en comportamiento.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Seguridad de Endpoints</h3>
                                    <p class="mt-2 text-gray-400">Protección integral para todos los dispositivos conectados a tu red, incluyendo portátiles, smartphones y otros dispositivos IoT.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-0 lg:w-1/2">
                        <img class="rounded-lg shadow-xl object-cover h-80 w-full" src="/images/proteccion avanzada.png" alt="Protección Avanzada">
                    </div>
                </div>
            </div>

            <!-- Service 2: Monitoreo 24/7 -->
            <div class="bg-gray-800/30 rounded-lg p-6 mb-20">
                <div class="lg:flex lg:items-center lg:justify-between flex-row-reverse">
                    <div class="lg:w-1/2 lg:pl-12">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-cyan-400 text-white mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="ml-4 text-3xl font-extrabold text-white">Monitoreo 24/7</h2>
                        </div>
                        <p class="mt-4 text-lg text-gray-300">
                            Nuestro centro de operaciones de seguridad (SOC) proporciona vigilancia continua de tu infraestructura para detectar y responder a amenazas en tiempo real.
                        </p>
                        <div class="mt-8 space-y-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Detección de Intrusiones</h3>
                                    <p class="mt-2 text-gray-400">Sistemas IDS/IPS para identificar y bloquear actividades maliciosas en tu red de forma proactiva.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Análisis de Logs</h3>
                                    <p class="mt-2 text-gray-400">Recopilación y análisis de registros de seguridad para identificar patrones sospechosos y vulnerabilidades.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Respuesta a Incidentes</h3>
                                    <p class="mt-2 text-gray-400">Equipo especializado preparado para responder rápidamente ante cualquier brecha de seguridad detectada.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-0 lg:w-1/2">
                        <img class="rounded-lg shadow-xl object-cover h-80 w-full" src="/images/monitoreo.jpg" alt="Monitoreo 24/7">
                    </div>
                </div>
            </div>

            <!-- Service 3: Análisis de Vulnerabilidades -->
            <div class="bg-gray-800/30 rounded-lg p-6 mb-20">
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="lg:w-1/2 lg:pr-12">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 inline-flex items-center justify-center rounded-full bg-cyan-400 text-white mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="ml-4 text-3xl font-extrabold text-white">Análisis de Vulnerabilidades</h2>
                        </div>
                        <p class="mt-4 text-lg text-gray-300">
                            Identificamos y evaluamos proactivamente las debilidades en tu infraestructura de TI antes de que los atacantes puedan explotarlas.
                        </p>
                        <div class="mt-8 space-y-6">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Pruebas de Penetración</h3>
                                    <p class="mt-2 text-gray-400">Simulación de ataques reales para evaluar la efectividad de tus defensas y detectar puntos débiles.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Escaneo de Vulnerabilidades</h3>
                                    <p class="mt-2 text-gray-400">Evaluaciones periódicas automatizadas para identificar posibles vulnerabilidades en sistemas, aplicaciones y redes.</p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="h-6 w-6 rounded-full bg-cyan-400 flex items-center justify-center">
                                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-medium text-white">Auditoría de Seguridad</h3>
                                    <p class="mt-2 text-gray-400">Revisión exhaustiva de políticas, procedimientos y controles de seguridad para garantizar el cumplimiento de las mejores prácticas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 lg:mt-0 lg:w-1/2">
                        <img class="rounded-lg shadow-xl object-cover h-80 w-full" src="/images/analisis-de-vulnerabilidades.png" alt="Análisis de Vulnerabilidades">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">¿Necesitas una solución personalizada?</span>
                <span class="block text-cyan-400">Solicita una consulta gratuita.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/contacto" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-black bg-cyan-400 hover:bg-cyan-500 transition duration-300 hover:animate-[buttonGlow_2s_infinite]">
                        Solicitar consulta
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="/faq" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-cyan-400 bg-gray-800 hover:bg-gray-700 transition duration-300">
                        Preguntas frecuentes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection