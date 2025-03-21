@extends ('layouts.public')

@section('titulo','Nosotros')

@section('content')

<!-- About Congress Section -->
<div class="matrix-bg fixed inset-0 z-0">
    <div class="matrix-rain"></div>
</div>

<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Sobre Nosotros</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Congreso Internacional de Ciberseguridad</p>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm p-6 rounded-lg shadow-xl hover:bg-opacity-70 transition-all duration-300 hover:border-3 hover:border-blue-500 rounded-lg p-4">
                    <h3 class="text-xl font-bold text-blue-500 mb-4">Nuestra Misión</h3>
                    <p class="text-gray-300">Promover la excelencia en ciberseguridad a través del intercambio de conocimientos, la colaboración internacional y la formación continua, creando un espacio donde expertos, profesionales y estudiantes puedan compartir experiencias y mejores prácticas para fortalecer la seguridad digital global.</p>
                </div>
                <!-- Vision -->
                <div class="bg-gray-800 bg-opacity-60 backdrop-blur-sm p-6 rounded-lg shadow-xl hover:bg-opacity-70 transition-all duration-300 hover:border-3 hover:border-blue-500 rounded-lg p-4">
                    <h3 class="text-xl font-bold text-blue-500 mb-4">Nuestra Visión</h3>
                    <p class="text-gray-300">Ser el referente internacional en eventos de ciberseguridad, liderando la innovación y el desarrollo profesional en el campo de la seguridad digital, y contribuyendo activamente a la creación de un ciberespacio más seguro y resiliente para todos.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Organizing Committee Section -->

<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Nuestro Equipo</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Comité Organizador</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Committee Member 1 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/M. C. María del Carmen Santiago Díaz.jpg') }}" alt="Director" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-medium text-white">M. C. María del Carmen Santiago Díaz</h3>
                <p class="text-base text-gray-300 mt-2">Coordinadora</p>
            </div>
            <!-- Committee Member 2 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/Dr. Gustavo Trinidad Rubín Linares.jpg') }}" alt="Coordinadora" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-medium text-white">Dr. Gustavo Trinidad Rubín Linares</h3>
                <p class="text-base text-gray-300 mt-2">Coordinador</p>
            </div>
            <!-- Committee Member 3 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-32 h-32 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/M. C. Ana Claudia Zenteno Vázquez.jpg') }}" alt="Technical" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-6 text-xl font-medium text-white">M. C. Ana Claudia Zenteno Vázquez</h3>
                <p class="text-base text-gray-300 mt-2">Colaboradora</p>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Section -->
<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-4 transition-all duration-500">
            <!-- Stat 1 -->
            <div class="bg-gradient-to-br from-gray-800/90 to-blue-500 rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="50">0</span>+
                </div>
                <div class="text-sm sm:text-base text-gray-300">Ponentes Expertos</div>
            </div>
            <!-- Stat 2 -->
            <div class="bg-gradient-to-br from-gray-800/90 to-blue-500 rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="1000">0</span>+
                </div>
                <div class="text-sm sm:text-base text-gray-300">Asistentes Esperados</div>
            </div>
            <!-- Stat 3 -->
            <div class="bg-gradient-to-br from-gray-800/90 to-blue-500 rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="30">0</span>+
                </div>
                <div class="text-sm sm:text-base text-gray-300">Talleres Prácticos</div>
            </div>
            <!-- Stat 4 -->
            <div class="bg-gradient-to-br from-gray-800/90 to-blue-500 rounded-lg p-4 sm:p-6 transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500">
                <div class="text-2xl sm:text-4xl font-bold text-white mb-2">
                    <span class="counter" data-target="3">0</span>
                </div>
                <div class="text-sm sm:text-base text-gray-300">Días de Evento</div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-gray-800/90 to-blue-500 rounded-lg p-8">
            <h3 class="text-2xl font-bold text-white mb-8 text-center">Testimonios de Ediciones Anteriores</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-gray-800/80 to-blue-500/50 p-6 rounded-lg hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500 transition-all duration-300">
                    <p class="text-white mb-4">"Una experiencia única que me ayudó a definir mi carrera en ciberseguridad. Los talleres prácticos fueron invaluables."</p>
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-blue-400">María González</p>
                            <p class="text-sm text-gray-300">Estudiante - Edición 2023</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-gray-800/80 to-blue-500/50 p-6 rounded-lg hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500 transition-all duration-300">
                    <p class="text-white mb-4">"El nivel de los ponentes y el contenido técnico superó mis expectativas. Definitivamente volveré este año."</p>
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-blue-400">David Martínez</p>
                            <p class="text-sm text-gray-300">Profesional IT - Edición 2023</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-gray-800/80 to-blue-500/50 p-6 rounded-lg hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3)] hover:border hover:border-blue-500 transition-all duration-300">
                    <p class="text-white mb-4">"Las sesiones de networking fueron excelentes. Conseguí mi primer trabajo en ciberseguridad gracias a los contactos que hice."</p>
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-blue-400">Ana Pérez</p>
                            <p class="text-sm text-gray-300">Security Analyst - Edición 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<div class="py-12 bg-gray-800/80 bg-opacity-50 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Alianzas</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <!-- Partner Logos -->
            <div class="bg-gray-900/90 p-8 rounded-lg flex items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-white">
                <img src="{{ asset('images/Logo.jpg') }}" alt="Partner 1" class="max-h-32">
            </div>
             
            <div class="bg-gray-900/90 p-8 rounded-lg flex items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-white">
                <img src="{{ asset('images/Cisco.webp') }}" alt="Partner 2" class="max-h-32">
            </div>
            <div class="bg-gray-900/90 p-8 rounded-lg flex items-center justify-center transform hover:scale-105 transition-all duration-300 hover:border-2 hover:border-white">
                <img src="{{ asset('images/ISACA.jpg') }}" alt="Partner 3" class="max-h-32">
            </div>
        </div>
    </div>
</div>
@endsection
    