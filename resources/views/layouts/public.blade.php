<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Ciberseguridad </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header class="bg-gradient-to-r from-slate-950 via-gray-900 to-slate-950 border-b border-violet-600/40 shadow-lg">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="{{route ('inicio')}}" class="-m-1.5 p-1.5">
        <span class="sr-only">Ciberseguridad</span>
        <svg class="h-8 w-auto text-violet-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
        </svg>
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-300">
        <span class="sr-only">Open main menu</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{route('inicio')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Inicio</a>
      <a href="{{route('contacto')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Contacto</a>
      <a href="{{route('servicios')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Servicios</a>
      <a href="{{route('recursos')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Recursos</a>
      <a href="{{route('faq')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">FAQ</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Log in <span aria-hidden="true" class="group-hover:translate-x-1 transition-transform duration-200">&rarr;</span></a>
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-slate-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <svg class="h-8 w-auto text-violet-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
          </svg>
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-300">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-300 hover:bg-gray-800" aria-controls="disclosure-1" aria-expanded="false">
                Product
                <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
              <div class="mt-2 space-y-2" id="disclosure-1">
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Analytics</a>
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Engagement</a>
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Security</a>
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Integrations</a>
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Automations</a>
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Watch demo</a>
                <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-300 hover:bg-gray-800">Contact sales</a>
              </div>
            </div>
            <a href="{{route('inicio')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Inicio</a>
      <a href="{{route('contacto')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Contacto</a>
      <a href="{{route('servicios')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Servicios</a>
      <a href="{{route('recursos')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">Recursos</a>
      <a href="{{route('faq')}}" class="text-sm/6 font-semibold text-gray-300 hover:text-violet-400 transition-colors duration-200">FAQ</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-300 hover:bg-gray-800">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

    <main class="flex-1 relative overflow-hidden">
        @yield('content')
    </main> 

<footer class="bg-gradient-to-r from-slate-950 via-gray-900 to-slate-950 border-t border-violet-600/40 shadow-lg">
  <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <h6 class="text-sm font-semibold leading-6 text-violet-400">Servicios</h6>
        <div class="mt-6 space-y-4">
          <a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Protección Avanzada</a>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Monitoreo 24/7</a></div>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Ánalisis de vulnerabilidades</a></div>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Atención específica</a></div>
        </div>
      </div>
      <div>
        <h6 class="text-sm font-semibold leading-6 text-violet-400">Compañia</h6>
        <div class="mt-6 space-y-4">
          <a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Sobre nosotros</a>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Contacto</a></div>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Herramientas</a></div>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">FAQ</a></div>
        </div>
      </div>
      <div>
        <h6 class="text-sm font-semibold leading-6 text-violet-400">Legal</h6>
        <div class="mt-6 space-y-4">
          <a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Terminos de uso</a>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Política de privacidadd</a></div>
          <div><a href="#" class="text-sm leading-6 text-gray-300 hover:text-violet-400 transition-colors duration-200">Política de Cookies</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>
    
</body>
</html>