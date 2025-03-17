@extends('layouts.public')

@section('titulo', 'Contacto - Ciberseguridad')

@section('content')
<div class="bg-gray-0 min-h-screen py-12 flex flex-col">
    <div class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page header -->
        <div class="text-center mb-12">
            <h2 class="text-lg text-green-400 font-semibold tracking-wide uppercase">Contacto</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">Estamos aquí para ayudarte</p>
            <p class="mt-4 max-w-2xl text-xl text-gray-300 mx-auto">
                Comunícate con nuestro equipo de expertos en ciberseguridad y descubre cómo podemos proteger tu infraestructura digital.
            </p>
        </div>

        <!-- Status messages -->
        @if(session('success'))
            <div class="mb-8 bg-gray-800 border border-green-400 text-green-400 px-4 py-3 rounded relative max-w-3xl mx-auto" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
        
        @if($errors->any())
            <div class="mb-8 bg-gray-800 border border-red-500 text-red-400 px-4 py-3 rounded relative max-w-3xl mx-auto" role="alert">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Contact form -->
                <div class="bg-gray-800 p-8 rounded-lg border border-gray-700 shadow-xl transform transition duration-500 hover:border-green-400">
                    <h3 class="text-xl font-bold text-white mb-6">Envíanos un mensaje</h3>
                    <form action="{{ route('contacto') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name field -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre completo</label>
                            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-green-400 focus:border-green-400 text-white" required>
                        </div>
                        
                        <!-- Email field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Correo electrónico</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-green-400 focus:border-green-400 text-white" required>
                        </div>
                        
                        <!-- Phone field -->
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-gray-300 mb-1">Teléfono (opcional)</label>
                            <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-green-400 focus:border-green-400 text-white">
                        </div>
                        
                        <!-- Subject field -->
                        <div>
                            <label for="asunto" class="block text-sm font-medium text-gray-300 mb-1">Asunto</label>
                            <select id="asunto" name="asunto" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-green-400 focus:border-green-400 text-white" required>
                                <option value="">Selecciona un tema</option>
                                <option value="Protección Avanzada" {{ old('asunto') == 'Protección Avanzada' ? 'selected' : '' }}>Protección Avanzada</option>
                                <option value="Monitoreo 24/7" {{ old('asunto') == 'Monitoreo 24/7' ? 'selected' : '' }}>Monitoreo 24/7</option>
                                <option value="Análisis de Vulnerabilidades" {{ old('asunto') == 'Análisis de Vulnerabilidades' ? 'selected' : '' }}>Análisis de Vulnerabilidades</option>
                                <option value="Otro" {{ old('asunto') == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                        </div>
                        
                        <!-- Message field -->
                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-gray-300 mb-1">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" rows="5" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md focus:ring-2 focus:ring-green-400 focus:border-green-400 text-white" required>{{ old('mensaje') }}</textarea>
                        </div>
                        
                        <!-- Submit button -->
                        <div class="text-center">
                            <button type="submit" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-green-400 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-offset-2 focus:ring-offset-gray-800 transition duration-300">
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Contact information -->
                <div class="space-y-8">
                    <!-- Info card -->
                    <div class="bg-gray-800 p-8 rounded-lg border border-gray-700 shadow-xl transform transition duration-500 hover:border-green-400">
                        <h3 class="text-xl font-bold text-white mb-6">Información de contacto</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-gray-900 text-green-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-white">Teléfono</h4>
                                    <p class="mt-1 text-gray-300">+52 222 229 5500 ext. 7204</p>
                                    <p class="mt-1 text-gray-300">Lunes a Viernes, 9:00 - 18:00</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-gray-900 text-green-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-white">Email</h4>
                                    <p class="mt-1 text-gray-300">contacto.fcc@correo.buap.mx</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-gray-900 text-green-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-medium text-white">Dirección</h4>
                                    <p class="mt-1 text-gray-300">104-B, Avenida San Claudio, Blvrd 14 Sur, CU</p>
                                    <p class="mt-1 text-gray-300">72592 Heroica Puebla de Zaragoza, Pue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Response time -->
                    <div class="bg-gray-800 p-8 rounded-lg border border-gray-700 shadow-xl transform transition duration-500 hover:border-green-400">
                        <div class="flex items-center justify-center">
                            <div class="inline-flex items-center justify-center h-12 w-12 rounded-md bg-gray-900 text-green-400">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-white">Tiempo de respuesta garantizado</h4>
                                <p class="mt-1 text-green-400 font-semibold">< 24 horas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Map Section -->
            <div class="mt-12 bg-gray-800 p-6 rounded-lg border border-gray-700 shadow-xl">
                <h3 class="text-xl font-bold text-white mb-6">Nuestra ubicación</h3>
                <div class="w-full h-96 bg-gray-700 rounded-lg overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.3297841114045!2d-98.20699362479644!3d19.005184382184904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf58ad2399d1%3A0xb517171394a5208b!2sFaculty%20of%20Computer%20Science%20-%20BUAP!5e0!3m2!1sen!2smx!4v1740669989266!5m2!1sen!2smx" 
                        class="w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection