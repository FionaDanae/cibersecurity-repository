@extends('layouts.public')

@section('titulo', 'FAQ - Ciberseguridad')

@section('content')
<div class="bg-gray-900/30 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-red-500 mb-8">Preguntas Frecuentes</h1>
            <p class="mt-3 max-w-xl mx-auto text-base text-gray-300 sm:mt-5 sm:text-lg md:mt-5 md:text-xl mb-16">
            Encuentra respuestas a las preguntas más comunes sobre nuestros servicios de ciberseguridad y protección digital.
            </p>
        </div>

        <div class="space-y-6">

            <!-- Registro y Boletos -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center gap-4 mb-6">
                    <svg class="w-8 h-8 text-red-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 3H15M15 3C15 4.10457 14.1046 5 13 5H11C9.89543 5 9 4.10457 9 3M15 3C15 1.89543 14.1046 1 13 1H11C9.89543 1 9 1.89543 9 3M3 8C3 6.89543 3.89543 6 5 6H19C20.1046 6 21 6.89543 21 8V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 10H17M7 14H17M7 18H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h2 class="text-2xl font-semibold text-red-400">Registro y Boletos</h2>
                </div>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Cómo puedo registrarme para el congreso?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Puede registrarse a través de nuestra plataforma en línea. El proceso es simple: seleccione el tipo de entrada, complete el formulario de registro y realice el pago correspondiente.
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Cuál es el costo de la entrada?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Ofrecemos diferentes tipos de entradas:
                                <ul class="list-disc ml-6 mt-2">
                                    <li>Entrada General: $1,500 MXN</li>
                                    <li>Entrada VIP: $2,500 MXN</li>
                                    <li>Estudiantes (con credencial vigente): $800 MXN</li>
                                </ul>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
                                    
            <!-- Información del Evento -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center gap-4 mb-6">
                    <svg class="w-8 h-8 text-red-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 2V5M16 2V5M3.5 9.09H20.5M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.6947 13.7H15.7037M15.6947 16.7H15.7037M11.9955 13.7H12.0045M11.9955 16.7H12.0045M8.29431 13.7H8.30331M8.29431 16.7H8.30331" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h2 class="text-2xl font-semibold text-red-400">Información del Evento</h2>
                </div>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Cuándo y dónde se realizará el congreso?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                El Congreso Nacional de Ciberseguridad 2025 se llevará a cabo del 15 al 17 de marzo de 2025 en el Centro de Convenciones de Mérida, Yucatán.
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Qué incluye mi entrada?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Su entrada incluye:
                                <ul class="list-disc ml-6 mt-2">
                                    <li>Acceso a todas las conferencias y talleres</li>
                                    <li>Material del congreso</li>
                                    <li>Certificado de participación</li>
                                    <li>Coffee breaks y comidas durante el evento</li>
                                </ul>
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Habrá oportunidades de networking?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Sí, el congreso incluye múltiples espacios de networking:
                                <ul class="list-disc ml-6 mt-2">
                                    <li>Sesiones de networking estructuradas</li>
                                    <li>Cóctel de bienvenida</li>
                                    <li>Espacios de café extendidos</li>
                                    <li>Cena de gala para entradas VIP</li>
                                </ul>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Requisitos Técnicos -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center gap-4 mb-6">
                    <svg class="w-8 h-8 text-red-400"><use href="/images/security-icons.svg#technical-icon"/></svg>
                    <h2 class="text-2xl font-semibold text-red-400">Requisitos Técnicos</h2>
                </div>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Qué debo traer a los talleres prácticos?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Para los talleres prácticos, necesitará:
                                <ul class="list-disc ml-6 mt-2">
                                    <li>Laptop con mínimo 8GB de RAM</li>
                                    <li>Sistema operativo Windows 10/11 o Linux</li>
                                    <li>Espacio libre en disco de 20GB</li>
                                    <li>Software específico (se enviará lista por correo)</li>
                                </ul>
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Qué software necesito tener instalado?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Para aprovechar al máximo los talleres, recomendamos tener instalado:
                                <ul class="list-disc ml-6 mt-2">
                                    <li>Máquina virtual (VirtualBox o VMware)</li>
                                    <li>Kali Linux (última versión estable)</li>
                                    <li>Visual Studio Code o similar</li>
                                    <li>Docker Desktop</li>
                                    <li>Navegadores actualizados (Chrome, Firefox)</li>
                                </ul>
                                <p class="mt-2">Se enviará una guía detallada de instalación dos semanas antes del evento.</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Servicios Generales -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center gap-4 mb-6">
                    <svg class="w-8 h-8 text-red-400"><use href="/images/security-icons.svg#services-icon"/></svg>
                    <h2 class="text-2xl font-semibold text-red-400">Servicios Generales</h2>
                </div>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Qué servicios de ciberseguridad ofrecen?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Ofrecemos una amplia gama de servicios que incluyen auditorías de seguridad, pruebas de penetración, evaluación de vulnerabilidades, protección contra malware, consultoría en seguridad y capacitación en ciberseguridad para empleados.
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Cómo puedo contratar sus servicios?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Puede contactarnos a través de nuestro formulario en línea, correo electrónico o teléfono. Realizaremos una evaluación inicial gratuita para determinar sus necesidades específicas y proponer la mejor solución.
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Seguridad Técnica -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center gap-4 mb-6">
                    <svg class="w-8 h-8 text-red-400"><use href="/images/security-icons.svg#technical-icon"/></svg>
                    <h2 class="text-2xl font-semibold text-red-400">Seguridad Técnica</h2>
                </div>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Qué es una auditoría de seguridad?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Una auditoría de seguridad es una evaluación exhaustiva de los sistemas de información para identificar vulnerabilidades, evaluar la efectividad de las medidas de seguridad actuales y proponer mejoras para fortalecer la postura de seguridad.
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Cómo protegen mis datos?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Implementamos múltiples capas de seguridad, incluyendo encriptación de datos, firewalls avanzados, monitoreo continuo y copias de seguridad regulares. Además, cumplimos con todas las regulaciones de protección de datos aplicables.
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Soporte y Mantenimiento -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center gap-4 mb-6">
                    <svg class="w-8 h-8 text-red-400"><use href="/images/security-icons.svg#support-icon"/></svg>
                    <h2 class="text-2xl font-semibold text-red-400">Soporte y Mantenimiento</h2>
                </div>
                <div class="space-y-4">
                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Ofrecen soporte 24/7?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Sí, contamos con un equipo de soporte técnico disponible las 24 horas del día, los 7 días de la semana, para atender cualquier incidente de seguridad o consulta urgente.
                            </div>
                        </button>
                    </div>

                    <div class="border-b border-gray-700 pb-4">
                        <button class="w-full text-left focus:outline-none group">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-white">¿Con qué frecuencia realizan actualizaciones de seguridad?</h3>
                                <span class="text-red-500">+</span>
                            </div>
                            <div class="mt-3 text-gray-300">
                                Realizamos actualizaciones de seguridad de manera continua y programada. Las actualizaciones críticas se implementan inmediatamente, mientras que las actualizaciones regulares se programan mensualmente o según las necesidades específicas.
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.border-gray-700 button').forEach(button => {
        const content = button.querySelector('.mt-3');
        const icon = button.querySelector('span');
        
        // Ocultar respuestas inicialmente
        content.style.maxHeight = '0px';
        content.style.opacity = '0';
        content.style.overflow = 'hidden';
        content.style.transition = 'max-height 0.3s ease-in-out, opacity 0.3s ease-in-out';
        
        button.addEventListener('click', () => {
            const isExpanded = content.style.maxHeight !== '0px';
            
            if (!isExpanded) {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = '1';
                icon.textContent = '-';
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.style.maxHeight = '0px';
                content.style.opacity = '0';
                icon.textContent = '+';
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });
});
</script>

<style>
.border-gray-700 button .mt-3 {
    transition: max-height 0.3s ease-in-out,
                opacity 0.3s ease-in-out,
                visibility 0s linear 0.3s;
    overflow: hidden;
}

.border-gray-700 button .mt-3[style*="visible"] {
    transition: max-height 0.3s ease-in-out,
                opacity 0.3s ease-in-out,
                visibility 0s linear;
}

.border-gray-700 button span {
    display: inline-block;
    width: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.border-gray-700 button span.rotate-icon {
    transform: rotate(180deg);
}

.border-gray-700 button:hover {
    opacity: 0.9;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 0.5s ease-out forwards;
}
</style>
@endsection
