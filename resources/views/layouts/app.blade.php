<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Schedules</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100">
        <header>
            <nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
                <div class="container px-6 py-4 mx-auto">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="flex items-center justify-between">
                            <a href="#">
                                <img class="h-16 rounded-full" src="https://i.pinimg.com/564x/00/12/db/0012dbf3639767335dc65754e419a8ae.jpg" alt="">
                            </a>
                            <!-- Mobile menu button -->
                            {{-- <div class="flex lg:hidden">
                                <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                    <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                    </svg>
                            
                                    <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div> --}}

                            {{-- Titel that appers beside the logo --}}

                            <div>
                                <h1 class="font-extrabold lg:flex text-slate-50 font-mono ml-5">Schedules App</h1>
                            </div>
                        </div>
            
                        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                            <div class="flex flex-col -mx-6 items-center lg:flex-row lg:items-center lg:mx-8">
                                <a href="/about-me" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">About me</a>
                                <a href="calendar" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Calendar</a>
                                <a href="payments" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Payments</a>
                                <a href="/" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-400 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Principal</a>
                            </div>

                             {{-- This are login icon and responsive --}}

                            <div class="flex items-center mt-4 lg:mt-0">
                                <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                                    <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 w-full h-full">
                                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                          </svg>                                   
                                    </div>
                                    <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Usuario por definir</h3>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="container mx-auto mt-10">

            {{-- Here go the content of the page --}}
            
            <h2>
                @yield('title')
            </h2> 
            
            {{-- Here go the content of the page --}}

            @yield('content')
        </main>

        <footer class="text-center p-5 text-neutral-400 font-bold uppercase">
            schedules app - todos los derechos reservados {{ now()->year }}
        </footer>
    </body>
</html>