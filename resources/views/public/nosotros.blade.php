@extends ('layouts.public')

@section('titulo','Nosotros')

@section('content')
<!-- About Congress Section -->
<div class="matrix-bg fixed inset-0 z-0">
    <div class="matrix-rain"></div>
</div>
<div class="py-12 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Sobre Nosotros</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Congreso Internacional de Ciberseguridad</p>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="matrix-card p-6 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#06b6d4,0_0_30px_rgba(6,182,212,0.3),0_0_45px_rgba(6,182,212,0.1)] hover:border-cyan-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1 group">
                    <h3 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 mb-4 group-hover:scale-105 transition-transform duration-300">Nuestra Misión</h3>
                    <p class="text-gray-300 group-hover:text-gray-200 transition-colors duration-300">Promover la excelencia en ciberseguridad a través del intercambio de conocimientos, la colaboración internacional y la formación continua, creando un espacio donde expertos, profesionales y estudiantes puedan compartir experiencias y mejores prácticas para fortalecer la seguridad digital global.</p>
                </div>
                <!-- Vision -->
                <div class="matrix-card p-6 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
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
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Committee Member 1 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-24 h-24 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/team/director.jpg') }}" alt="Director" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">Dr. Miguel Ángel López</h3>
                <p class="text-sm text-gray-300">Director del Congreso</p>
            </div>
            <!-- Committee Member 2 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-24 h-24 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/team/coordinator.jpg') }}" alt="Coordinadora" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">Dra. Laura García</h3>
                <p class="text-sm text-gray-300">Coordinadora Académica</p>
            </div>
            <!-- Committee Member 3 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-24 h-24 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/team/technical.jpg') }}" alt="Technical" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">Ing. Carlos Ruiz</h3>
                <p class="text-sm text-gray-300">Director Técnico</p>
            </div>
            <!-- Committee Member 4 -->
            <div class="matrix-card text-center p-4 rounded-lg transition-all duration-300 hover:shadow-[0_0_15px_#3b82f6,0_0_30px_rgba(59,130,246,0.3),0_0_45px_rgba(59,130,246,0.1)] hover:border-blue-500 hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <div class="w-24 h-24 rounded-full mx-auto overflow-hidden border-2 border-blue-500">
                    <img src="{{ asset('images/team/communications.jpg') }}" alt="Communications" class="w-full h-full object-cover">
                </div>
                <h3 class="mt-4 text-lg font-medium text-white">María Sánchez</h3>
                <p class="text-sm text-gray-300">Directora de Comunicaciones</p>
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
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
            <!-- Partner Logos -->
            <div class="matrix-card p-6 rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-[0_0_15px_#ffffff,0_0_30px_rgba(255,255,255,0.3),0_0_45px_rgba(255,255,255,0.1)] hover:border-white hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <img src="{{ asset('images/partners/partner1.png') }}" alt="Partner 1" class="max-h-16">
            </div>
            <div class="matrix-card p-6 rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-[0_0_15px_#ffffff,0_0_30px_rgba(255,255,255,0.3),0_0_45px_rgba(255,255,255,0.1)] hover:border-white hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <img src="{{ asset('images/partners/partner2.png') }}" alt="Partner 2" class="max-h-16">
            </div>
            <div class="matrix-card p-6 rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-[0_0_15px_#ffffff,0_0_30px_rgba(255,255,255,0.3),0_0_45px_rgba(255,255,255,0.1)] hover:border-white hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <img src="{{ asset('images/partners/partner3.png') }}" alt="Partner 3" class="max-h-16">
            </div>
            <div class="matrix-card p-6 rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-[0_0_15px_#ffffff,0_0_30px_rgba(255,255,255,0.3),0_0_45px_rgba(255,255,255,0.1)] hover:border-white hover:border hover:bg-gray-800/90 hover:transform hover:-translate-y-1">
                <img src="{{ asset('images/partners/partner4.png') }}" alt="Partner 4" class="max-h-16">
            </div>
        </div>
    </div>
</div>
@endsection
    