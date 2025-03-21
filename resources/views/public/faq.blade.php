@extends('layouts.public')

@section('titulo', 'FAQ - Ciberseguridad')

@section('content')
<div class="bg-gray-900/30 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-red-500 mb-8">Preguntas Frecuentes</h1>
            <p class="mt-3 max-w-xl mx-auto text-base text-gray-300 sm:mt-5 sm:text-lg md:mt-5 md:text-xl">
            Encuentra respuestas a las preguntas más comunes sobre nuestros servicios de ciberseguridad y protección digital.
            </p>
        </div>

        <div class="space-y-6">
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
