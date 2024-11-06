<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daurin - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-quicksand">
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/img/logo.png" class="h-10" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="flex items-center gap-4">
                    <button class="bg-primary rounded-lg px-4 py-2 font-semibold text-white">Daftar</button>
                    <button
                        class="bg-white rounded-lg px-4 py-2 font-semibold  text-primary border border-primary">Masuk</button>
                </div>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-primary rounded md:bg-transparent md:text-primary md:p-0"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/orders/new"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0">Setor
                            Sampah</a>
                    </li>
                    <li>
                        <a href="/orders"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0">Riwayat</a>
                    </li>
                    <li>
                        <a href="/agen"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary md:p-0">Pengepul</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="px-12 pb-6 pt-28">
        @yield('content')
    </div>

    {{-- @vite('resources/js/app.js') --}}
</body>

</html>
