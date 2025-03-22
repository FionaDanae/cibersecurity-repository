<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <link href="/css/matrix-auth.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-black h-full">
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
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <div class="auth-card p-6 rounded-lg shadow-xl w-full max-w-md">
                <a href="/" class="flex justify-center mb-6">
                    <x-application-logo class="w-20 h-20 fill-current text-green-400" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 auth-card shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
