<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Ciberseguridad </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/countdown.js') }}"></script>
    <style>
        body {
            font-family: 'Source Code Pro', monospace;
            letter-spacing: 0.05em;
        }
        .matrix-text {
            font-family: 'Source Code Pro', monospace;
            font-weight: 600;
            text-shadow: 0 0 5px rgba(0, 255, 0, 0.5);
        }
        .neon-glow {
            text-shadow: 0 0 5px rgba(0, 255, 0, 0.5),
                       0 0 10px rgba(0, 255, 0, 0.3);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('[aria-label="Open main menu"]');
            const mobileMenu = document.querySelector('[role="dialog"]');
            const closeMenuButton = mobileMenu.querySelector('[aria-label="Close menu"]');
            const backdrop = mobileMenu.querySelector('.fixed.inset-0');

            function toggleMenu() {
                const isHidden = mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden');
                
                if (!isHidden) {
                    document.body.style.overflow = '';
                } else {
                    document.body.style.overflow = 'hidden';
                }
            }

            mobileMenuButton.addEventListener('click', toggleMenu);
            closeMenuButton.addEventListener('click', toggleMenu);
            backdrop.addEventListener('click', toggleMenu);
        });
    </script>
</head>
<body class="bg-black h-full flex flex-col min-h-screen">
    <canvas id="matrixCanvas" class="fixed inset-0 z-0 opacity-80"></canvas>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const canvas = document.getElementById('matrixCanvas');
            const ctx = canvas.getContext('2d');
            const characters = 'アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン0123456789';
            const fontSize = 20;
            let columns = 0;
            let drops = [];

            function resize() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
                columns = Math.floor(canvas.width / fontSize);
                drops = Array(columns).fill(1);
            }

            function draw() {
                ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
                ctx.fillRect(0, 0, canvas.width, canvas.height);
                ctx.fillStyle = '#0F0';
                ctx.font = `${fontSize}px monospace`;

                for (let i = 0; i < drops.length; i++) {
                    const text = characters[Math.floor(Math.random() * characters.length)];
                    ctx.fillText(text, i * fontSize, drops[i] * fontSize);

                    gsap.to({}, {
                        duration: 0.1,
                        onComplete: () => {
                            if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                                drops[i] = 0;
                            }
                            drops[i]++;
                        }
                    });
                }
                requestAnimationFrame(draw);
            }

            resize();
            window.addEventListener('resize', resize);
            draw();
        });
    </script>

    <div class="relative z-10 flex flex-col min-h-screen">
        <header class="bg-slate-900/80 backdrop-blur-sm relative z-50">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{route ('inicio')}}" class="-m-1.5 p-1.5">
                        <span class="sr-only">Ciberseguridad</span>
                        <svg class="h-8 w-auto text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-100 hover:text-green-400" aria-label="Open main menu">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{route('inicio')}}" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibold transition-colors duration-200">Inicio</a>
                    <a href="{{route('contacto')}}" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibold transition-colors duration-200">Contacto</a>
                    <a href="{{route('nosotros')}}" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibold transition-colors duration-200">Nosotros</a>
                    <a href="{{route('servicios')}}" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibolvd transition-colors duration-200">Servicios</a>
                    <a href="{{route('recursos')}}" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibold transition-colors duration-200">Recursos</a>
                    <a href="{{route('faq')}}" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibold transition-colors duration-200">FAQ</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#" class="text-gray-100 hover:text-green-400 text-sm/6 font-semibold transition-colors duration-200">Log in <span aria-hidden="true" class="group-hover:translate-x-1 transition-transform duration-200">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu -->
            <div class="lg:hidden hidden" role="dialog" aria-modal="true">
                <div class="fixed inset-0 z-10 bg-gray-900/80"></div>
                <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-slate-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Ciberseguridad</span>
                            <svg class="h-8 w-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-300" aria-label="Close menu">
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="{{route('inicio')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">Inicio</a>
                                <a href="{{route('contacto')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">Contacto</a>
                                <a href="{{route('nosotros')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">Nosotros</a>
                                <a href="{{route('servicios')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">Servicios</a>
                                <a href="{{route('recursos')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">Recursos</a>
                                <a href="{{route('faq')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">FAQ</a>
                            </div>
                            <div class="py-6">
                                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-300 hover:bg-gray-800">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1 relative z-10 bg-transparent">
            @yield('content')
        </main> 

        <footer class="bg-slate-900/80 backdrop-blur-sm border-t border-green-600/40 shadow-lg relative z-10">
            <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <div>
                        <h6 class="text-sm font-semibold leading-6 text-green-400">Servicios</h6>
                        <div class="mt-6 space-y-4">
                            <a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Protección Avanzada</a>
                            <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Monitoreo 24/7</a></div>
                            <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Ánalisis de vulnerabilidades</a></div>
                            <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Atención específica</a></div>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-sm font-semibold leading-6 text-green-400">Compañia</h6>
                        <div class="mt-6 space-y-4">
                            <a href="{{route('contacto')}}" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Contacto</a>
                            <div><a href="{{route('nosotros')}}" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Nosotros</a></div>
                            <div><a href="{{route('servicios')}}" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Servicios</a></div>
                            <div><a href="{{route('recursos')}}" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Recursos</a></div>
                            <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">FAQ</a></div>
                        </div>
                    </div>
                    <div>
                        <h6 class="text-sm font-semibold leading-6 text-green-400">Legal</h6>
                        <div class="mt-6 space-y-4">
                            <a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Terminos de uso</a>
                            <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Política de privacidadd</a></div>
                            <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-green-400 transition-colors duration-200">Política de Cookies</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>