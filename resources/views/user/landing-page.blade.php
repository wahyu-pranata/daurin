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
    
    <!-- Hero Section -->
    <div class="flex justify-between items-center py-12 px-10 md:px-20 w-[90%] md:w-[95%] mx-auto mt-[50px] md:mt-[80px] bg-primary rounded-lg">
        <div class="w-[60%]">
            <p class="mb-5 font-bold text-white text-xl md:text-5xl leading-snug w-[200px] md:w-auto ">Solusi sampah usaha dan rumah tangga anda</p>

            <button class="bg-white text-primary rounded-lg px-3 md:px-4 py-2  text-sm md:text-lg font-semibold">Coba Sekarang</button>
        </div>

        <div class="flex w-[40%] justify-end">
            <div class="bg-white rounded-lg py-3 md:py-5 px-2 md:px-4 md:max-w-[500px]">
                <img class="" src="/img/landing-page-img.png" alt="">
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="flex flex-col w-full items-center mt-14">
        <div class="mb-[45px]">
            <h1 class="text-primary_dark justify-center text-center font-semibold text-3xl font-quicksand">Dengan DaurIn</h1>
            <h1 class="text-primary_dark justify-center text-center font-semibold text-3xl font-quicksand">semua jadi mudah</h1>
        </div>

        <!-- Cards -->
        <div class="flex flex-col items-center md:flex-row space-y-4 md:space-x-4 md:space-y-0 ">
            <!-- satu card -->
            <div class="bg-white w-[224px] h-[228px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.66668 17.9333H16.6667C17.357 17.9333 17.9167 17.3737 17.9167 16.6833C17.9167 15.993 17.357 15.4333 16.6667 15.4333H5.65001C5.48371 15.4328 5.31912 15.4669 5.16668 15.5333C4.85956 15.6648 4.61485 15.9095 4.48334 16.2167C4.45815 16.3712 4.45815 16.5288 4.48334 16.6833V27.7333C4.48334 28.4237 5.04299 28.9833 5.73334 28.9833C6.4237 28.9833 6.98334 28.4237 6.98334 27.7333V19.7L17.55 30.2667C17.7821 30.5043 18.1012 30.6368 18.4333 30.6333C18.7651 30.6349 19.0835 30.5027 19.3167 30.2667C19.8041 29.7786 19.8041 28.988 19.3167 28.5L8.66668 17.9333Z" fill="#1C1917"/>
                        <path d="M35.6 12.25C35.6 11.5596 35.0404 11 34.35 11C33.6597 11 33.1 11.5596 33.1 12.25V20.3L22.5333 9.73333C22.3012 9.49509 21.9827 9.36072 21.65 9.36072C21.3174 9.36072 20.9988 9.49509 20.7667 9.73333C20.2793 10.2214 20.2793 11.012 20.7667 11.5L31.3333 22.0667H23.3333C22.643 22.0667 22.0833 22.6263 22.0833 23.3167C22.0833 24.007 22.643 24.5667 23.3333 24.5667H34.3833C34.5496 24.5672 34.7142 24.5331 34.8667 24.4667C35.1738 24.3352 35.4185 24.0905 35.55 23.7833C35.6032 23.6334 35.6314 23.4757 35.6333 23.3167L35.6 12.25Z" fill="#1C1917"/>
                    </svg>                                        
                </div>
                <h3 class="font-semibold font-quicksand text-lg mb-2">Pilah Sampah</h3>
                <p class="font-light font-quicksand text-dark2 text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>

            <!-- satu card -->
            <div class="bg-white w-[224px] h-[228px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.0333 25.8083C27.4252 25.5027 26.6844 25.7398 26.3666 26.3416C26.073 26.9548 26.3158 27.6903 26.9166 28.0083C28.3833 28.7583 29.2166 29.675 29.2166 30.5583C29.2166 32.4416 25.2833 34.5416 20.0166 34.5416C14.75 34.5416 10.8 32.4583 10.8 30.625C10.8 29.7583 11.6333 28.825 13.1 28.075C13.5398 27.8986 13.8421 27.4887 13.8806 27.0164C13.9192 26.5441 13.6873 26.0906 13.2819 25.8453C12.8764 25.6 12.3671 25.605 11.9666 25.8583C9.94314 26.6209 8.53244 28.4717 8.33331 30.625C8.33331 34.325 13.3333 37.1083 20 37.1083C26.6666 37.1083 31.6666 34.325 31.6666 30.625C31.4859 28.453 30.0721 26.5787 28.0333 25.8083Z" fill="#1C1917"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.75 31.3583V24.1583C13.2615 23.497 9.23753 18.6755 9.56875 13.1572C9.89998 7.63892 14.4718 3.33331 20 3.33331C25.5282 3.33331 30.1 7.63892 30.4312 13.1572C30.7624 18.6755 26.7385 23.497 21.25 24.1583V31.3583C21.25 32.0486 20.6903 32.6083 20 32.6083C19.3096 32.6083 18.75 32.0486 18.75 31.3583ZM27.3737 10.7352C26.1363 7.75675 23.2252 5.81821 20 5.82495C15.6131 5.83412 12.0592 9.38809 12.05 13.775C12.0432 17.0002 13.9818 19.9113 16.9602 21.1486C19.9387 22.386 23.3693 21.7055 25.6499 19.4249C27.9305 17.1443 28.611 13.7136 27.3737 10.7352Z" fill="#1C1917"/>
                        <path d="M15.9833 15.625C16.6737 15.625 17.2333 15.0653 17.2333 14.375C17.2333 12.4604 18.7854 10.9083 20.7 10.9083C21.3903 10.9083 21.95 10.3486 21.95 9.65828C21.95 8.96793 21.3903 8.40828 20.7 8.40828C19.1131 8.4127 17.593 9.04732 16.474 10.1725C15.355 11.2978 14.7289 12.8214 14.7333 14.4083C14.7377 14.7354 14.8719 15.0474 15.1063 15.2755C15.3407 15.5037 15.6562 15.6294 15.9833 15.625Z" fill="#1C1917"/>
                    </svg>
                </div>
                <h3 class="font-semibold font-quicksand text-lg mb-2">Pilih Lokasi</h3>
                <p class="font-light font-quicksand text-dark2 text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>

            <!-- satu card -->
            <div class="bg-white w-[224px] h-[228px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="4" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.74998 5H13.9C14.8974 4.99999 15.8538 5.39737 16.5575 6.10424C17.2613 6.81111 17.6544 7.76922 17.65 8.76667V13.9C17.65 15.9711 15.971 17.65 13.9 17.65H8.74998C6.67891 17.65 4.99998 15.9711 4.99998 13.9V8.76667C4.99554 7.76922 5.38867 6.81111 6.09242 6.10424C6.79616 5.39737 7.75252 4.99999 8.74998 5ZM13.9 15.1333C14.5866 15.1244 15.141 14.5699 15.15 13.8833V8.76667C15.15 8.07631 14.5903 7.51667 13.9 7.51667H8.74998C8.05962 7.51667 7.49998 8.07631 7.49998 8.76667V13.8833C7.50895 14.5699 8.06337 15.1244 8.74998 15.1333H13.9Z" fill="#1C1917"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.1 5H31.25C32.2475 4.99999 33.2038 5.39737 33.9076 6.10424C34.6113 6.81111 35.0044 7.76922 35 8.76667V13.9C35 15.9711 33.3211 17.65 31.25 17.65H26.1C24.0289 17.65 22.35 15.9711 22.35 13.9V8.75C22.35 6.67893 24.0289 5 26.1 5ZM31.25 15.1333C31.9366 15.1244 32.491 14.5699 32.5 13.8833V8.76667C32.5 8.07631 31.9404 7.51667 31.25 7.51667H26.1C25.4097 7.51667 24.85 8.07631 24.85 8.76667V13.8833C24.859 14.5699 25.4134 15.1244 26.1 15.1333H31.25Z" fill="#1C1917"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.74998 22.35H13.9C15.971 22.35 17.65 24.0289 17.65 26.1V31.25C17.65 33.3211 15.971 35 13.9 35H8.74998C7.75252 35 6.79616 34.6026 6.09242 33.8958C5.38867 33.1889 4.99554 32.2308 4.99998 31.2333V26.1C4.99998 24.0289 6.67891 22.35 8.74998 22.35ZM13.9 32.4833C14.5903 32.4833 15.15 31.9237 15.15 31.2333V26.1C15.141 25.4134 14.5866 24.859 13.9 24.85H8.74998C8.06337 24.859 7.50895 25.4134 7.49998 26.1V31.2333C7.49998 31.9237 8.05962 32.4833 8.74998 32.4833H13.9Z" fill="#1C1917"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.1 22.35H31.25C33.321 22.35 35 24.0289 35 26.1V31.2333C35.0044 32.2308 34.6113 33.1889 33.9075 33.8958C33.2038 34.6026 32.2474 35 31.25 35H26.1C25.1025 35 24.1462 34.6026 23.4424 33.8958C22.7387 33.1889 22.3455 32.2308 22.35 31.2333V26.1C22.35 24.0289 24.0289 22.35 26.1 22.35ZM31.25 32.4833C31.9403 32.4833 32.5 31.9237 32.5 31.2333V26.1C32.491 25.4134 31.9366 24.859 31.25 24.85H26.1C25.4134 24.859 24.859 25.4134 24.85 26.1V31.2333C24.85 31.9237 25.4096 32.4833 26.1 32.4833H31.25Z" fill="#1C1917"/>
                    </svg>
                </div>
                <h3 class="font-semibold font-quicksand text-lg mb-2">Ragam Jenis</h3>
                <p class="font-light font-quicksand text-dark2 text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>

            <!-- satu card -->
            <div class="bg-white w-[224px] h-[228px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 10C11.7833 10 5.34998 13.3333 5.34998 17.7167C5.34998 21.8 10.9333 25.0333 18.3333 25.4667L15.85 27.9333C15.3626 28.4214 15.3626 29.212 15.85 29.7C16.3437 30.1894 17.1396 30.1894 17.6333 29.7L22.1833 25.15C22.6707 24.662 22.6707 23.8714 22.1833 23.3833L17.6333 18.8333C17.136 18.3528 16.3473 18.3528 15.85 18.8333C15.3626 19.3214 15.3626 20.112 15.85 20.6L18.2166 22.95C12.0333 22.5333 7.84998 20 7.84998 17.7167C7.84998 15.4333 12.85 12.4333 20 12.4333C27.15 12.4333 32.15 15.2167 32.15 17.7167C32.15 19.3833 30.0333 21.05 26.75 22.0667C26.0872 22.2692 25.7141 22.9706 25.9166 23.6333C26.1191 24.2961 26.8206 24.6692 27.4833 24.4667C31.9666 23.0833 34.65 20.5667 34.65 17.8C34.65 13.3333 28.2166 10 20 10Z" fill="#1C1917"/>
                    </svg>                        
                </div>
                <h3 class="font-semibold font-quicksand text-lg mb-2">Lacak Riwayat</h3>
                <p class="font-light font-quicksand text-dark2 text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="flex flex-col justify-between items-center space-y-10 py-12 px-10 md:px-20 w-[90%] md:w-[95%] mx-auto mt-[50px] md:mt-[80px] bg-primary rounded-lg">
        <h2 class="font-semibold w-full text-white text-center text-xl md:text-3xl mb-2">Langkah Mudah <span class="block"></span>Setor Sampahmu di DaurIn</h2>

        <!-- steps -->
        <div class="w-full md:px-20 md:py-10 space-y-[30px]">
            <div class="w-full">
                <div class="bg-white rounded-full py-2 px-10 w-auto inline-block">
                    <h2 class="font-semibold text-lg font-quicksand text-primary_dark">1. Buat setoran sampah di aplikasi DaurIn</h2>
                </div>
            </div>

            <div class="flex justify-end w-full">
                <div class="bg-white rounded-full py-2 px-10 w-auto inline-block">
                    <h2 class="font-semibold text-lg font-quicksand text-primary_dark">2. Pilih apakah sampah diambil atau diantar</h2>
                </div>
            </div>

            <div class="w-full">
                <div class="bg-white rounded-full py-2 px-10 w-auto inline-block">
                    <h2 class="font-semibold text-lg font-quicksand text-primary_dark">3. Sampah diambil agen atau diantar pengguna</h2>
                </div>
            </div>

            <div class="flex justify-end w-full">
                <div class="bg-white rounded-full py-2 px-10 w-auto inline-block">
                    <h2 class="font-semibold text-lg font-quicksand text-primary_dark">4. Agen mengecek dan membayar sampah anda</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4 -->
    <div class="flex flex-col w-full items-center mt-14">
        <div class="mb-[45px]">
            <h1 class="text-primary_dark justify-center text-center font-semibold text-3xl font-quicksand">Misi & Tujuan Kami</h1>
        </div>

        <!-- Cards -->
        <div class="flex flex-col items-center md:flex-row space-y-4 md:space-x-4 md:space-y-0 ">

            <!-- satu card -->
            <div class="bg-primary flex flex-col items-center w-[224px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_115_404)">
                        <path d="M72.25 4.5C72.25 20.475 60.3531 33.6797 44.9406 35.7188C43.9422 28.2094 40.6375 21.4312 35.7578 16.1297C41.1437 6.51094 51.4375 0 63.25 0H67.75C70.2391 0 72.25 2.01094 72.25 4.5ZM0.25 13.5C0.25 11.0109 2.26094 9 4.75 9H9.25C26.6453 9 40.75 23.1047 40.75 40.5V67.5C40.75 69.9891 38.7391 72 36.25 72C33.7609 72 31.75 69.9891 31.75 67.5V45C14.3547 45 0.25 30.8953 0.25 13.5Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_115_404">
                        <rect width="72" height="72" fill="white" transform="translate(0.25)"/>
                        </clipPath>
                        </defs>
                    </svg>                                      
                </div>
                <h3 class="font-semibold font-quicksand text-lg text-white mb-2">Pilah Sampah</h3>
                <p class="font-medium font-quicksand text-white text-center text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>

            <!-- satu card -->
            <div class="bg-primary flex flex-col items-center w-[224px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_115_404)">
                        <path d="M72.25 4.5C72.25 20.475 60.3531 33.6797 44.9406 35.7188C43.9422 28.2094 40.6375 21.4312 35.7578 16.1297C41.1437 6.51094 51.4375 0 63.25 0H67.75C70.2391 0 72.25 2.01094 72.25 4.5ZM0.25 13.5C0.25 11.0109 2.26094 9 4.75 9H9.25C26.6453 9 40.75 23.1047 40.75 40.5V67.5C40.75 69.9891 38.7391 72 36.25 72C33.7609 72 31.75 69.9891 31.75 67.5V45C14.3547 45 0.25 30.8953 0.25 13.5Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_115_404">
                        <rect width="72" height="72" fill="white" transform="translate(0.25)"/>
                        </clipPath>
                        </defs>
                    </svg>                                      
                </div>
                <h3 class="font-semibold font-quicksand text-lg text-white mb-2">Pilah Sampah</h3>
                <p class="font-medium font-quicksand text-white text-center text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>
            
            <!-- satu card -->
            <div class="bg-primary flex flex-col items-center w-[224px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_115_404)">
                        <path d="M72.25 4.5C72.25 20.475 60.3531 33.6797 44.9406 35.7188C43.9422 28.2094 40.6375 21.4312 35.7578 16.1297C41.1437 6.51094 51.4375 0 63.25 0H67.75C70.2391 0 72.25 2.01094 72.25 4.5ZM0.25 13.5C0.25 11.0109 2.26094 9 4.75 9H9.25C26.6453 9 40.75 23.1047 40.75 40.5V67.5C40.75 69.9891 38.7391 72 36.25 72C33.7609 72 31.75 69.9891 31.75 67.5V45C14.3547 45 0.25 30.8953 0.25 13.5Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_115_404">
                        <rect width="72" height="72" fill="white" transform="translate(0.25)"/>
                        </clipPath>
                        </defs>
                    </svg>                                      
                </div>
                <h3 class="font-semibold font-quicksand text-lg text-white mb-2">Pilah Sampah</h3>
                <p class="font-medium font-quicksand text-white text-center text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>

            <!-- satu card -->
            <div class="bg-primary flex flex-col items-center w-[224px] rounded-lg shadow-md px-4 py-6">
                <div class="mb-3">
                    <svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_115_404)">
                        <path d="M72.25 4.5C72.25 20.475 60.3531 33.6797 44.9406 35.7188C43.9422 28.2094 40.6375 21.4312 35.7578 16.1297C41.1437 6.51094 51.4375 0 63.25 0H67.75C70.2391 0 72.25 2.01094 72.25 4.5ZM0.25 13.5C0.25 11.0109 2.26094 9 4.75 9H9.25C26.6453 9 40.75 23.1047 40.75 40.5V67.5C40.75 69.9891 38.7391 72 36.25 72C33.7609 72 31.75 69.9891 31.75 67.5V45C14.3547 45 0.25 30.8953 0.25 13.5Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_115_404">
                        <rect width="72" height="72" fill="white" transform="translate(0.25)"/>
                        </clipPath>
                        </defs>
                    </svg>                                      
                </div>
                <h3 class="font-semibold font-quicksand text-lg text-white mb-2">Pilah Sampah</h3>
                <p class="font-medium font-quicksand text-white text-center text-sm">Proses pemilahan sampah yang sudah disesuaikan dengan agen pengelola sampah di sekitar anda</p>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="flex flex-col md:flex-row justify-between space-y-4 md:space-x-12 items-center py-[30px] px-8 md:px-20 w-[90%] md:w-[95%] mx-auto mt-[50px] md:mt-[80px] bg-primary rounded-lg mb-12">
        <div class="flex w-[40%] justify-start">
            <div class="md:max-w-[500px]">
                <img class="" src="/img/Waste management-amico 1.png" alt="">
            </div>
        </div>

        <div class="flex flex-col items-center md:items-start md:w-[80%] justify-center md:justify-end px-16 md:px-0">
            <p class="text-center md:text-left font-bold text-white text-xl md:text-4xl leading-snug md:w-auto mb-[13px]">Ayo Gunakan DaurIn dan Setor Sampahmu Sekarang</p>
            <h2 class="font-medium text-center md:text-left text-white text-sm mb-[32px]">Demi lingkungan yang bersih dan perekonomian yang berkembang</h3>
            <button class="bg-white text-primary rounded-lg px-3 md:px-4 py-2  text-sm md:text-lg font-semibold">Coba DaurIn</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="w-full bg-gray-300 h-[200px] flex flex-row items-center px-[50px] py-5">
        <img src="image 3.png" class="w-20 md:max-w-[153px] md:max-h-[50px]" alt="">

        <div class="flex flex-col md:space-y-3 mx-16">
            <h5 class="font-quicksand text-primary text-base font-semibold">Beranda</h5>
            <h5 class="font-quicksand text-dark hover:text-primary_dark text-base font-semibold">Aplikasi</h5>
            <h5 class="font-quicksand text-dark hover:text-primary_dark text-base font-semibold">Tentang Kami</h5>
            <h5 class="font-quicksand text-dark hover:text-primary_dark text-base font-semibold">Kontak Kami</h5>
        </div>

        <div class="justify-end ml-auto">
            <h5 class="font-semibold">Contact Us</h5>
            <a href="gmail.com">sicteam@gmail.com</a>
        </div>
    </div>
</body>
</html>