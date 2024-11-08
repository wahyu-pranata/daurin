<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaurIn | Manage Your Waste</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-quicksand w-full h-screen">
    <!-- Navbar -->
    <header>
        <nav class="flex justify-between items-center w-[80%] md:w-[95%] mx-auto mt-6">
            <div>
                <img src="/img/logo.png" class="w-32" alt="">
            </div>

            <div class="absolute nav-links duration-100 md:static bg-white2 md:bg-transparent min-h-[40vh] md:min-h-fit min-w-[30vw] md:w-auto mt-5 top-[-100%] md:top-0 right-5 md:right-0 rounded-lg flex items-center justify-center">
                <ul class="flex flex-col md:flex-row items-center gap-[2vw] md:gap-[4vw] ">
                    <li>
                        <a class="text-primary text-base font-semibold" href="">Beranda</a>
                    </li>

                    <li>
                        <a class="text-dark hover:text-primary text-base font-semibold" href="">Aplikasi</a>
                    </li>

                    <li>
                        <a class="text-dark hover:text-primary text-base font-semibold" href="">Tentang Kami</a>
                    </li>

                    <li>
                        <a class="text-dark hover:text-primary text-base font-semibold" href="">Kontak Kami</a>
                    </li>

                    <li>
                        <div>
                            <button class="bg-primary rounded-[4px] px-4 py-2 font-semibold text-sm md:text-lg text-white">Daftar</button>
                        </div>
                    </li>

                    <li>
                        <div>
                            <button class="bg-white rounded-[4px] px-4 py-2 font-semibold text-sm md:text-lg  text-primary border border-primary">Masuk</button>
                        </div>
                    </li>
                </ul>
            </div>

            <svg onclick="onToggleMenu(this)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="#44403C" className="size-6" class="max-h-[40px] md:hidden">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </nav>
    </header>

    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
    
    <!-- Body -->
    <div class="flex flex-col space-y-[28px] mb-40 py-12 justify-between mx-auto w-[90%] md:w-[85%]">
        <h1 class="font-bold text-3xl md:text-4xl">Pengepul</h1>
        
        <div class="flex items-center border border-gray-300 rounded-lg px-4 w-full max-w-sm">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 14L10.5354 10.5354M10.5354 10.5354C11.4731 9.59765 11.9999 8.32583 11.9999 6.9997C11.9999 5.67357 11.4731 4.40175 10.5354 3.46403C9.59765 2.52632 8.32583 1.99951 6.9997 1.99951C5.67357 1.99951 4.40175 2.52632 3.46403 3.46403C2.52632 4.40175 1.99951 5.67357 1.99951 6.9997C1.99951 8.32583 2.52632 9.59765 3.46403 10.5354C4.40175 11.4731 5.67357 11.9999 6.9997 11.9999C8.32583 11.9999 9.59765 11.4731 10.5354 10.5354Z" stroke="black" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input type="text" placeholder="Cari Pengepul" class="w-full border-none focus:ring-0 focus:outline-none placeholder-gray-400 text-gray-700">
        </div>

        <!-- cards -->
        <div class="flex flex-row flex-wrap gap-4 w-full mb-40">
            <!-- card -->
            <div class="w-[280px] h-[300px] rounded-lg shadow-xl mb-4">
                <div class="w-full flex items-center justify-center h-[162px] bg-dark-2 rounded-md">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 8.08C7.72457 8.08 8.62 7.18457 8.62 6.08C8.62 4.97543 7.72457 4.08 6.62 4.08C5.51543 4.08 4.62 4.97543 4.62 6.08C4.62 7.18457 5.51543 8.08 6.62 8.08Z" fill="#A8A29E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.74 0H8.5C4.08172 0 0.5 3.58172 0.5 8V12.24C0.5 16.6583 4.08172 20.24 8.5 20.24H12.74C17.1583 20.24 20.74 16.6583 20.74 12.24V8C20.74 5.87827 19.8971 3.84344 18.3969 2.34315C16.8966 0.842855 14.8617 0 12.74 0ZM8.5 1.5H12.74C15.9859 1.50507 18.7306 3.90396 19.17 7.12H17.62C13.4468 7.1234 9.58791 9.33824 7.48 12.94C6.16362 11.8943 4.53116 11.3267 2.85 11.33H2V8C2.00551 4.41243 4.91243 1.50551 8.5 1.5ZM2.85 12.83H2.03C2.24723 15.1883 3.72988 17.2418 5.9 18.19C5.97167 16.8552 6.27274 15.5426 6.79 14.31C5.69845 13.3571 4.29895 12.8314 2.85 12.83ZM12.74 18.74H8.5C8.12404 18.7385 7.74906 18.7017 7.38 18.63C7.50486 13.0613 12.05 8.60946 17.62 8.6H19.24V12.24C19.2345 15.8276 16.3276 18.7345 12.74 18.74Z" fill="#A8A29E"/>
                    </svg>
                </div>

                <div class="flex flex-col space-y-[18px] px-4 py-4">
                    <div class="font-semibold text-xl">Mitra Pengepul 1</div>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="font-medium text-sm">Jalan Cendrawasih XVII</div>
                        </div>

                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 8.75V5C13.125 4.1712 12.7957 3.37634 12.2097 2.79029C11.6236 2.20424 10.8288 1.875 9.99999 1.875C9.17119 1.875 8.37633 2.20424 7.79028 2.79029C7.20423 3.37634 6.87499 4.1712 6.87499 5V8.75M16.3383 7.08917L17.3908 17.0892C17.4492 17.6433 17.0158 18.125 16.4583 18.125H3.54165C3.41016 18.1251 3.28011 18.0976 3.15994 18.0442C3.03978 17.9908 2.93219 17.9127 2.84417 17.8151C2.75615 17.7174 2.68967 17.6023 2.64903 17.4772C2.6084 17.3521 2.59453 17.2199 2.60832 17.0892L3.66165 7.08917C3.68595 6.8588 3.79468 6.64558 3.96686 6.49063C4.13905 6.33568 4.36251 6.24996 4.59415 6.25H15.4058C15.8858 6.25 16.2883 6.6125 16.3383 7.08917ZM7.18749 8.75C7.18749 8.83288 7.15456 8.91237 7.09596 8.97097C7.03735 9.02958 6.95787 9.0625 6.87499 9.0625C6.79211 9.0625 6.71262 9.02958 6.65402 8.97097C6.59541 8.91237 6.56249 8.83288 6.56249 8.75C6.56249 8.66712 6.59541 8.58763 6.65402 8.52903C6.71262 8.47042 6.79211 8.4375 6.87499 8.4375C6.95787 8.4375 7.03735 8.47042 7.09596 8.52903C7.15456 8.58763 7.18749 8.66712 7.18749 8.75ZM13.4375 8.75C13.4375 8.83288 13.4046 8.91237 13.346 8.97097C13.2874 9.02958 13.2079 9.0625 13.125 9.0625C13.0421 9.0625 12.9626 9.02958 12.904 8.97097C12.8454 8.91237 12.8125 8.83288 12.8125 8.75C12.8125 8.66712 12.8454 8.58763 12.904 8.52903C12.9626 8.47042 13.0421 8.4375 13.125 8.4375C13.2079 8.4375 13.2874 8.47042 13.346 8.52903C13.4046 8.58763 13.4375 8.66712 13.4375 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="font-medium text-sm">500 Pesanan</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- card -->
            <div class="w-[280px] h-[300px] rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-center h-[162px] bg-dark-2 rounded-md">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 8.08C7.72457 8.08 8.62 7.18457 8.62 6.08C8.62 4.97543 7.72457 4.08 6.62 4.08C5.51543 4.08 4.62 4.97543 4.62 6.08C4.62 7.18457 5.51543 8.08 6.62 8.08Z" fill="#A8A29E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.74 0H8.5C4.08172 0 0.5 3.58172 0.5 8V12.24C0.5 16.6583 4.08172 20.24 8.5 20.24H12.74C17.1583 20.24 20.74 16.6583 20.74 12.24V8C20.74 5.87827 19.8971 3.84344 18.3969 2.34315C16.8966 0.842855 14.8617 0 12.74 0ZM8.5 1.5H12.74C15.9859 1.50507 18.7306 3.90396 19.17 7.12H17.62C13.4468 7.1234 9.58791 9.33824 7.48 12.94C6.16362 11.8943 4.53116 11.3267 2.85 11.33H2V8C2.00551 4.41243 4.91243 1.50551 8.5 1.5ZM2.85 12.83H2.03C2.24723 15.1883 3.72988 17.2418 5.9 18.19C5.97167 16.8552 6.27274 15.5426 6.79 14.31C5.69845 13.3571 4.29895 12.8314 2.85 12.83ZM12.74 18.74H8.5C8.12404 18.7385 7.74906 18.7017 7.38 18.63C7.50486 13.0613 12.05 8.60946 17.62 8.6H19.24V12.24C19.2345 15.8276 16.3276 18.7345 12.74 18.74Z" fill="#A8A29E"/>
                    </svg>
                </div>

                <div class="flex flex-col space-y-[18px] px-4 py-4">
                    <div class="font-semibold text-xl">Mitra Pengepul 1</div>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="font-medium text-sm">Jalan Cendrawasih XVII</div>
                        </div>

                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 8.75V5C13.125 4.1712 12.7957 3.37634 12.2097 2.79029C11.6236 2.20424 10.8288 1.875 9.99999 1.875C9.17119 1.875 8.37633 2.20424 7.79028 2.79029C7.20423 3.37634 6.87499 4.1712 6.87499 5V8.75M16.3383 7.08917L17.3908 17.0892C17.4492 17.6433 17.0158 18.125 16.4583 18.125H3.54165C3.41016 18.1251 3.28011 18.0976 3.15994 18.0442C3.03978 17.9908 2.93219 17.9127 2.84417 17.8151C2.75615 17.7174 2.68967 17.6023 2.64903 17.4772C2.6084 17.3521 2.59453 17.2199 2.60832 17.0892L3.66165 7.08917C3.68595 6.8588 3.79468 6.64558 3.96686 6.49063C4.13905 6.33568 4.36251 6.24996 4.59415 6.25H15.4058C15.8858 6.25 16.2883 6.6125 16.3383 7.08917ZM7.18749 8.75C7.18749 8.83288 7.15456 8.91237 7.09596 8.97097C7.03735 9.02958 6.95787 9.0625 6.87499 9.0625C6.79211 9.0625 6.71262 9.02958 6.65402 8.97097C6.59541 8.91237 6.56249 8.83288 6.56249 8.75C6.56249 8.66712 6.59541 8.58763 6.65402 8.52903C6.71262 8.47042 6.79211 8.4375 6.87499 8.4375C6.95787 8.4375 7.03735 8.47042 7.09596 8.52903C7.15456 8.58763 7.18749 8.66712 7.18749 8.75ZM13.4375 8.75C13.4375 8.83288 13.4046 8.91237 13.346 8.97097C13.2874 9.02958 13.2079 9.0625 13.125 9.0625C13.0421 9.0625 12.9626 9.02958 12.904 8.97097C12.8454 8.91237 12.8125 8.83288 12.8125 8.75C12.8125 8.66712 12.8454 8.58763 12.904 8.52903C12.9626 8.47042 13.0421 8.4375 13.125 8.4375C13.2079 8.4375 13.2874 8.47042 13.346 8.52903C13.4046 8.58763 13.4375 8.66712 13.4375 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="font-medium text-sm">500 Pesanan</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- card -->
            <div class="w-[280px] h-[300px] rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-center h-[162px] bg-dark-2 rounded-md">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 8.08C7.72457 8.08 8.62 7.18457 8.62 6.08C8.62 4.97543 7.72457 4.08 6.62 4.08C5.51543 4.08 4.62 4.97543 4.62 6.08C4.62 7.18457 5.51543 8.08 6.62 8.08Z" fill="#A8A29E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.74 0H8.5C4.08172 0 0.5 3.58172 0.5 8V12.24C0.5 16.6583 4.08172 20.24 8.5 20.24H12.74C17.1583 20.24 20.74 16.6583 20.74 12.24V8C20.74 5.87827 19.8971 3.84344 18.3969 2.34315C16.8966 0.842855 14.8617 0 12.74 0ZM8.5 1.5H12.74C15.9859 1.50507 18.7306 3.90396 19.17 7.12H17.62C13.4468 7.1234 9.58791 9.33824 7.48 12.94C6.16362 11.8943 4.53116 11.3267 2.85 11.33H2V8C2.00551 4.41243 4.91243 1.50551 8.5 1.5ZM2.85 12.83H2.03C2.24723 15.1883 3.72988 17.2418 5.9 18.19C5.97167 16.8552 6.27274 15.5426 6.79 14.31C5.69845 13.3571 4.29895 12.8314 2.85 12.83ZM12.74 18.74H8.5C8.12404 18.7385 7.74906 18.7017 7.38 18.63C7.50486 13.0613 12.05 8.60946 17.62 8.6H19.24V12.24C19.2345 15.8276 16.3276 18.7345 12.74 18.74Z" fill="#A8A29E"/>
                    </svg>
                </div>

                <div class="flex flex-col space-y-[18px] px-4 py-4">
                    <div class="font-semibold text-xl">Mitra Pengepul 1</div>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="font-medium text-sm">Jalan Cendrawasih XVII</div>
                        </div>

                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 8.75V5C13.125 4.1712 12.7957 3.37634 12.2097 2.79029C11.6236 2.20424 10.8288 1.875 9.99999 1.875C9.17119 1.875 8.37633 2.20424 7.79028 2.79029C7.20423 3.37634 6.87499 4.1712 6.87499 5V8.75M16.3383 7.08917L17.3908 17.0892C17.4492 17.6433 17.0158 18.125 16.4583 18.125H3.54165C3.41016 18.1251 3.28011 18.0976 3.15994 18.0442C3.03978 17.9908 2.93219 17.9127 2.84417 17.8151C2.75615 17.7174 2.68967 17.6023 2.64903 17.4772C2.6084 17.3521 2.59453 17.2199 2.60832 17.0892L3.66165 7.08917C3.68595 6.8588 3.79468 6.64558 3.96686 6.49063C4.13905 6.33568 4.36251 6.24996 4.59415 6.25H15.4058C15.8858 6.25 16.2883 6.6125 16.3383 7.08917ZM7.18749 8.75C7.18749 8.83288 7.15456 8.91237 7.09596 8.97097C7.03735 9.02958 6.95787 9.0625 6.87499 9.0625C6.79211 9.0625 6.71262 9.02958 6.65402 8.97097C6.59541 8.91237 6.56249 8.83288 6.56249 8.75C6.56249 8.66712 6.59541 8.58763 6.65402 8.52903C6.71262 8.47042 6.79211 8.4375 6.87499 8.4375C6.95787 8.4375 7.03735 8.47042 7.09596 8.52903C7.15456 8.58763 7.18749 8.66712 7.18749 8.75ZM13.4375 8.75C13.4375 8.83288 13.4046 8.91237 13.346 8.97097C13.2874 9.02958 13.2079 9.0625 13.125 9.0625C13.0421 9.0625 12.9626 9.02958 12.904 8.97097C12.8454 8.91237 12.8125 8.83288 12.8125 8.75C12.8125 8.66712 12.8454 8.58763 12.904 8.52903C12.9626 8.47042 13.0421 8.4375 13.125 8.4375C13.2079 8.4375 13.2874 8.47042 13.346 8.52903C13.4046 8.58763 13.4375 8.66712 13.4375 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="font-medium text-sm">500 Pesanan</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- card -->
            <div class="w-[280px] h-[300px] rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-center h-[162px] bg-dark-2 rounded-md">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 8.08C7.72457 8.08 8.62 7.18457 8.62 6.08C8.62 4.97543 7.72457 4.08 6.62 4.08C5.51543 4.08 4.62 4.97543 4.62 6.08C4.62 7.18457 5.51543 8.08 6.62 8.08Z" fill="#A8A29E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.74 0H8.5C4.08172 0 0.5 3.58172 0.5 8V12.24C0.5 16.6583 4.08172 20.24 8.5 20.24H12.74C17.1583 20.24 20.74 16.6583 20.74 12.24V8C20.74 5.87827 19.8971 3.84344 18.3969 2.34315C16.8966 0.842855 14.8617 0 12.74 0ZM8.5 1.5H12.74C15.9859 1.50507 18.7306 3.90396 19.17 7.12H17.62C13.4468 7.1234 9.58791 9.33824 7.48 12.94C6.16362 11.8943 4.53116 11.3267 2.85 11.33H2V8C2.00551 4.41243 4.91243 1.50551 8.5 1.5ZM2.85 12.83H2.03C2.24723 15.1883 3.72988 17.2418 5.9 18.19C5.97167 16.8552 6.27274 15.5426 6.79 14.31C5.69845 13.3571 4.29895 12.8314 2.85 12.83ZM12.74 18.74H8.5C8.12404 18.7385 7.74906 18.7017 7.38 18.63C7.50486 13.0613 12.05 8.60946 17.62 8.6H19.24V12.24C19.2345 15.8276 16.3276 18.7345 12.74 18.74Z" fill="#A8A29E"/>
                    </svg>
                </div>

                <div class="flex flex-col space-y-[18px] px-4 py-4">
                    <div class="font-semibold text-xl">Mitra Pengepul 1</div>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="font-medium text-sm">Jalan Cendrawasih XVII</div>
                        </div>

                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 8.75V5C13.125 4.1712 12.7957 3.37634 12.2097 2.79029C11.6236 2.20424 10.8288 1.875 9.99999 1.875C9.17119 1.875 8.37633 2.20424 7.79028 2.79029C7.20423 3.37634 6.87499 4.1712 6.87499 5V8.75M16.3383 7.08917L17.3908 17.0892C17.4492 17.6433 17.0158 18.125 16.4583 18.125H3.54165C3.41016 18.1251 3.28011 18.0976 3.15994 18.0442C3.03978 17.9908 2.93219 17.9127 2.84417 17.8151C2.75615 17.7174 2.68967 17.6023 2.64903 17.4772C2.6084 17.3521 2.59453 17.2199 2.60832 17.0892L3.66165 7.08917C3.68595 6.8588 3.79468 6.64558 3.96686 6.49063C4.13905 6.33568 4.36251 6.24996 4.59415 6.25H15.4058C15.8858 6.25 16.2883 6.6125 16.3383 7.08917ZM7.18749 8.75C7.18749 8.83288 7.15456 8.91237 7.09596 8.97097C7.03735 9.02958 6.95787 9.0625 6.87499 9.0625C6.79211 9.0625 6.71262 9.02958 6.65402 8.97097C6.59541 8.91237 6.56249 8.83288 6.56249 8.75C6.56249 8.66712 6.59541 8.58763 6.65402 8.52903C6.71262 8.47042 6.79211 8.4375 6.87499 8.4375C6.95787 8.4375 7.03735 8.47042 7.09596 8.52903C7.15456 8.58763 7.18749 8.66712 7.18749 8.75ZM13.4375 8.75C13.4375 8.83288 13.4046 8.91237 13.346 8.97097C13.2874 9.02958 13.2079 9.0625 13.125 9.0625C13.0421 9.0625 12.9626 9.02958 12.904 8.97097C12.8454 8.91237 12.8125 8.83288 12.8125 8.75C12.8125 8.66712 12.8454 8.58763 12.904 8.52903C12.9626 8.47042 13.0421 8.4375 13.125 8.4375C13.2079 8.4375 13.2874 8.47042 13.346 8.52903C13.4046 8.58763 13.4375 8.66712 13.4375 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="font-medium text-sm">500 Pesanan</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- card -->
            <div class="w-[280px] h-[300px] rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-center h-[162px] bg-dark-2 rounded-md">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 8.08C7.72457 8.08 8.62 7.18457 8.62 6.08C8.62 4.97543 7.72457 4.08 6.62 4.08C5.51543 4.08 4.62 4.97543 4.62 6.08C4.62 7.18457 5.51543 8.08 6.62 8.08Z" fill="#A8A29E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.74 0H8.5C4.08172 0 0.5 3.58172 0.5 8V12.24C0.5 16.6583 4.08172 20.24 8.5 20.24H12.74C17.1583 20.24 20.74 16.6583 20.74 12.24V8C20.74 5.87827 19.8971 3.84344 18.3969 2.34315C16.8966 0.842855 14.8617 0 12.74 0ZM8.5 1.5H12.74C15.9859 1.50507 18.7306 3.90396 19.17 7.12H17.62C13.4468 7.1234 9.58791 9.33824 7.48 12.94C6.16362 11.8943 4.53116 11.3267 2.85 11.33H2V8C2.00551 4.41243 4.91243 1.50551 8.5 1.5ZM2.85 12.83H2.03C2.24723 15.1883 3.72988 17.2418 5.9 18.19C5.97167 16.8552 6.27274 15.5426 6.79 14.31C5.69845 13.3571 4.29895 12.8314 2.85 12.83ZM12.74 18.74H8.5C8.12404 18.7385 7.74906 18.7017 7.38 18.63C7.50486 13.0613 12.05 8.60946 17.62 8.6H19.24V12.24C19.2345 15.8276 16.3276 18.7345 12.74 18.74Z" fill="#A8A29E"/>
                    </svg>
                </div>

                <div class="flex flex-col space-y-[18px] px-4 py-4">
                    <div class="font-semibold text-xl">Mitra Pengepul 1</div>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="font-medium text-sm">Jalan Cendrawasih XVII</div>
                        </div>

                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 8.75V5C13.125 4.1712 12.7957 3.37634 12.2097 2.79029C11.6236 2.20424 10.8288 1.875 9.99999 1.875C9.17119 1.875 8.37633 2.20424 7.79028 2.79029C7.20423 3.37634 6.87499 4.1712 6.87499 5V8.75M16.3383 7.08917L17.3908 17.0892C17.4492 17.6433 17.0158 18.125 16.4583 18.125H3.54165C3.41016 18.1251 3.28011 18.0976 3.15994 18.0442C3.03978 17.9908 2.93219 17.9127 2.84417 17.8151C2.75615 17.7174 2.68967 17.6023 2.64903 17.4772C2.6084 17.3521 2.59453 17.2199 2.60832 17.0892L3.66165 7.08917C3.68595 6.8588 3.79468 6.64558 3.96686 6.49063C4.13905 6.33568 4.36251 6.24996 4.59415 6.25H15.4058C15.8858 6.25 16.2883 6.6125 16.3383 7.08917ZM7.18749 8.75C7.18749 8.83288 7.15456 8.91237 7.09596 8.97097C7.03735 9.02958 6.95787 9.0625 6.87499 9.0625C6.79211 9.0625 6.71262 9.02958 6.65402 8.97097C6.59541 8.91237 6.56249 8.83288 6.56249 8.75C6.56249 8.66712 6.59541 8.58763 6.65402 8.52903C6.71262 8.47042 6.79211 8.4375 6.87499 8.4375C6.95787 8.4375 7.03735 8.47042 7.09596 8.52903C7.15456 8.58763 7.18749 8.66712 7.18749 8.75ZM13.4375 8.75C13.4375 8.83288 13.4046 8.91237 13.346 8.97097C13.2874 9.02958 13.2079 9.0625 13.125 9.0625C13.0421 9.0625 12.9626 9.02958 12.904 8.97097C12.8454 8.91237 12.8125 8.83288 12.8125 8.75C12.8125 8.66712 12.8454 8.58763 12.904 8.52903C12.9626 8.47042 13.0421 8.4375 13.125 8.4375C13.2079 8.4375 13.2874 8.47042 13.346 8.52903C13.4046 8.58763 13.4375 8.66712 13.4375 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="font-medium text-sm">500 Pesanan</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- card -->
            <div class="w-[280px] h-[300px] rounded-lg shadow-xl">
                <div class="w-full flex items-center justify-center h-[162px] bg-dark-2 rounded-md">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 8.08C7.72457 8.08 8.62 7.18457 8.62 6.08C8.62 4.97543 7.72457 4.08 6.62 4.08C5.51543 4.08 4.62 4.97543 4.62 6.08C4.62 7.18457 5.51543 8.08 6.62 8.08Z" fill="#A8A29E"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.74 0H8.5C4.08172 0 0.5 3.58172 0.5 8V12.24C0.5 16.6583 4.08172 20.24 8.5 20.24H12.74C17.1583 20.24 20.74 16.6583 20.74 12.24V8C20.74 5.87827 19.8971 3.84344 18.3969 2.34315C16.8966 0.842855 14.8617 0 12.74 0ZM8.5 1.5H12.74C15.9859 1.50507 18.7306 3.90396 19.17 7.12H17.62C13.4468 7.1234 9.58791 9.33824 7.48 12.94C6.16362 11.8943 4.53116 11.3267 2.85 11.33H2V8C2.00551 4.41243 4.91243 1.50551 8.5 1.5ZM2.85 12.83H2.03C2.24723 15.1883 3.72988 17.2418 5.9 18.19C5.97167 16.8552 6.27274 15.5426 6.79 14.31C5.69845 13.3571 4.29895 12.8314 2.85 12.83ZM12.74 18.74H8.5C8.12404 18.7385 7.74906 18.7017 7.38 18.63C7.50486 13.0613 12.05 8.60946 17.62 8.6H19.24V12.24C19.2345 15.8276 16.3276 18.7345 12.74 18.74Z" fill="#A8A29E"/>
                    </svg>
                </div>

                <div class="flex flex-col space-y-[18px] px-4 py-4">
                    <div class="font-semibold text-xl">Mitra Pengepul 1</div>
                    <div class="flex flex-col space-y-3">
                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="font-medium text-sm">Jalan Cendrawasih XVII</div>
                        </div>

                        <div class="flex flex-row space-x-[6px]">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 8.75V5C13.125 4.1712 12.7957 3.37634 12.2097 2.79029C11.6236 2.20424 10.8288 1.875 9.99999 1.875C9.17119 1.875 8.37633 2.20424 7.79028 2.79029C7.20423 3.37634 6.87499 4.1712 6.87499 5V8.75M16.3383 7.08917L17.3908 17.0892C17.4492 17.6433 17.0158 18.125 16.4583 18.125H3.54165C3.41016 18.1251 3.28011 18.0976 3.15994 18.0442C3.03978 17.9908 2.93219 17.9127 2.84417 17.8151C2.75615 17.7174 2.68967 17.6023 2.64903 17.4772C2.6084 17.3521 2.59453 17.2199 2.60832 17.0892L3.66165 7.08917C3.68595 6.8588 3.79468 6.64558 3.96686 6.49063C4.13905 6.33568 4.36251 6.24996 4.59415 6.25H15.4058C15.8858 6.25 16.2883 6.6125 16.3383 7.08917ZM7.18749 8.75C7.18749 8.83288 7.15456 8.91237 7.09596 8.97097C7.03735 9.02958 6.95787 9.0625 6.87499 9.0625C6.79211 9.0625 6.71262 9.02958 6.65402 8.97097C6.59541 8.91237 6.56249 8.83288 6.56249 8.75C6.56249 8.66712 6.59541 8.58763 6.65402 8.52903C6.71262 8.47042 6.79211 8.4375 6.87499 8.4375C6.95787 8.4375 7.03735 8.47042 7.09596 8.52903C7.15456 8.58763 7.18749 8.66712 7.18749 8.75ZM13.4375 8.75C13.4375 8.83288 13.4046 8.91237 13.346 8.97097C13.2874 9.02958 13.2079 9.0625 13.125 9.0625C13.0421 9.0625 12.9626 9.02958 12.904 8.97097C12.8454 8.91237 12.8125 8.83288 12.8125 8.75C12.8125 8.66712 12.8454 8.58763 12.904 8.52903C12.9626 8.47042 13.0421 8.4375 13.125 8.4375C13.2079 8.4375 13.2874 8.47042 13.346 8.52903C13.4046 8.58763 13.4375 8.66712 13.4375 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="font-medium text-sm">500 Pesanan</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>