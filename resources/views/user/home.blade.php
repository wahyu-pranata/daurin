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
        <div class="flex flex-col space-y-6 md:space-y-8">
            <div class="flex flex-col space-y-1 md:space-y-4">
                <h1 class="font-bold text-white text-3xl md:text-5xl leading-snug w-auto ">Selamat Datang, Jhon Doe</h1>
                <p class="text-white text-lg md:text-xl">Mulai kebaikan dengan menyetor sampah daur ulangmu</p>
            </div>

            <button class="bg-white text-primary rounded-lg px-3 md:px-4 py-2  text-base md:text-lg font-semibold w-[145px] md:w-[193px]">Setor Sampah</button>
        </div>
    </div>

    <!-- Body -->
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:justify-between w-[90%] md:w-[95%] mx-auto mt-[50px] md:mt-12 md:space-x-8 mb-12" >
        <!-- Riwayat -->
        <div class="w-full md:w-[50%] flex flex-col space-y-4 mb-12">
            <h2 class="font-bold text-3xl ml-6 md:text-4xl">Riwayat</h2>
            <!-- card 1 -->
            <div class="flex flex-row item-center w-full px-6 py-5 border-2 border-opacity-10 border-dark2 rounded-lg ">
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-row space-x-4">
                        <h2 class="font-semibold text-2xl">Pengepul Makmur Sejahtera</h2>
                        <div class="text-[#854D0E] bg-[#FEF9C3] text-center justify-center px-2 py-1 rounded-md font-bold text-sm">Menunggu Konfirmasi</div>
                    </div>
                    <div class="flex flex-row  space-x-5"> 
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 1V3.25M15.25 1V3.25M1 16.75V5.5C1 4.90326 1.23705 4.33097 1.65901 3.90901C2.08097 3.48705 2.65326 3.25 3.25 3.25H16.75C17.3467 3.25 17.919 3.48705 18.341 3.90901C18.7629 4.33097 19 4.90326 19 5.5V16.75M1 16.75C1 17.3467 1.23705 17.919 1.65901 18.341C2.08097 18.7629 2.65326 19 3.25 19H16.75C17.3467 19 17.919 18.7629 18.341 18.341C18.7629 17.919 19 17.3467 19 16.75M1 16.75V9.25C1 8.65326 1.23705 8.08097 1.65901 7.65901C2.08097 7.23705 2.65326 7 3.25 7H16.75C17.3467 7 17.919 7.23705 18.341 7.65901C18.7629 8.08097 19 8.65326 19 9.25V16.75M10 10.75H10.008V10.758H10V10.75ZM10 13H10.008V13.008H10V13ZM10 15.25H10.008V15.258H10V15.25ZM7.75 13H7.758V13.008H7.75V13ZM7.75 15.25H7.758V15.258H7.75V15.25ZM5.5 13H5.508V13.008H5.5V13ZM5.5 15.25H5.508V15.258H5.5V15.25ZM12.25 10.75H12.258V10.758H12.25V10.75ZM12.25 13H12.258V13.008H12.25V13ZM12.25 15.25H12.258V15.258H12.25V15.25ZM14.5 10.75H14.508V10.758H14.5V10.75ZM14.5 13H14.508V13.008H14.5V13Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Nov 12, 2024</div>
                        </div>
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.25 1.75H18.25M6.25 7H18.25M6.25 12.25H18.25M1.75 1.75H1.757V1.758H1.75V1.75ZM2.125 1.75C2.125 1.84946 2.08549 1.94484 2.01516 2.01516C1.94484 2.08549 1.84946 2.125 1.75 2.125C1.65054 2.125 1.55516 2.08549 1.48483 2.01516C1.41451 1.94484 1.375 1.84946 1.375 1.75C1.375 1.65054 1.41451 1.55516 1.48483 1.48484C1.55516 1.41451 1.65054 1.375 1.75 1.375C1.84946 1.375 1.94484 1.41451 2.01516 1.48484C2.08549 1.55516 2.125 1.65054 2.125 1.75ZM1.75 7H1.757V7.008H1.75V7ZM2.125 7C2.125 7.09946 2.08549 7.19484 2.01516 7.26517C1.94484 7.33549 1.84946 7.375 1.75 7.375C1.65054 7.375 1.55516 7.33549 1.48483 7.26517C1.41451 7.19484 1.375 7.09946 1.375 7C1.375 6.90054 1.41451 6.80516 1.48483 6.73483C1.55516 6.66451 1.65054 6.625 1.75 6.625C1.84946 6.625 1.94484 6.66451 2.01516 6.73483C2.08549 6.80516 2.125 6.90054 2.125 7ZM1.75 12.25H1.757V12.258H1.75V12.25ZM2.125 12.25C2.125 12.3495 2.08549 12.4448 2.01516 12.5152C1.94484 12.5855 1.84946 12.625 1.75 12.625C1.65054 12.625 1.55516 12.5855 1.48483 12.5152C1.41451 12.4448 1.375 12.3495 1.375 12.25C1.375 12.1505 1.41451 12.0552 1.48483 11.9848C1.55516 11.9145 1.65054 11.875 1.75 11.875C1.84946 11.875 1.94484 11.9145 2.01516 11.9848C2.08549 12.0552 2.125 12.1505 2.125 12.25Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">5 Barang</div>
                        </div>
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 15.75C6.58561 15.7457 11.898 16.4522 17.047 17.851C17.774 18.049 18.5 17.509 18.5 16.755V15.75M2.75 1.5V2.25C2.75 2.44891 2.67098 2.63968 2.53033 2.78033C2.38968 2.92098 2.19891 3 2 3H1.25M1.25 3V2.625C1.25 2.004 1.754 1.5 2.375 1.5H19.25M1.25 3V12M19.25 1.5V2.25C19.25 2.664 19.586 3 20 3H20.75M19.25 1.5H19.625C20.246 1.5 20.75 2.004 20.75 2.625V12.375C20.75 12.996 20.246 13.5 19.625 13.5H19.25M1.25 12V12.375C1.25 12.6734 1.36853 12.9595 1.5795 13.1705C1.79048 13.3815 2.07663 13.5 2.375 13.5H2.75M1.25 12H2C2.19891 12 2.38968 12.079 2.53033 12.2197C2.67098 12.3603 2.75 12.5511 2.75 12.75V13.5M19.25 13.5V12.75C19.25 12.5511 19.329 12.3603 19.4697 12.2197C19.6103 12.079 19.8011 12 20 12H20.75M19.25 13.5H2.75M14 7.5C14 8.29565 13.6839 9.05871 13.1213 9.62132C12.5587 10.1839 11.7956 10.5 11 10.5C10.2044 10.5 9.44129 10.1839 8.87868 9.62132C8.31607 9.05871 8 8.29565 8 7.5C8 6.70435 8.31607 5.94129 8.87868 5.37868C9.44129 4.81607 10.2044 4.5 11 4.5C11.7956 4.5 12.5587 4.81607 13.1213 5.37868C13.6839 5.94129 14 6.70435 14 7.5ZM17 7.5H17.008V7.508H17V7.5ZM5 7.5H5.008V7.508H5V7.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Rp 300.000</div>
                        </div>
                    </div>
                    <!-- List Barang -->
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-row space-x-3">
                            <div class="flex flex-row items-center space-x-3">
                                <svg width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.877 1.59818L12.852 1.64418L12.776 1.78218L13.642 2.30418L13.72 2.16218L13.744 2.12018L13.703 2.09518L12.922 1.62518L12.877 1.59818ZM13.204 3.79218L11.732 2.90518L9.067 4.21518C8.01919 4.71167 7.2078 5.59917 6.807 6.68718L6.866 6.65718C7.45616 6.3616 8.11872 6.24152 8.77507 6.31118C9.43143 6.38084 10.054 6.63731 10.569 7.05018C11.086 7.46418 11.779 7.58718 12.408 7.37818L13.463 7.02618L13.453 6.89318L13.204 3.79218ZM14.961 7.79018C15.0062 7.65345 15.011 7.5066 14.975 7.36718C14.975 7.23585 14.971 7.10451 14.963 6.97318L14.948 6.78018L14.686 3.51318L15.041 2.87118C15.101 2.76804 15.1564 2.66227 15.207 2.55418C15.26 2.43818 15.318 2.28018 15.327 2.08718C15.3389 1.82956 15.2707 1.57457 15.132 1.35718C15.0421 1.22253 14.9278 1.10586 14.795 1.01318C14.6969 0.944681 14.5958 0.880617 14.492 0.82118L14.476 0.81118L13.677 0.32918C13.5694 0.262357 13.4593 0.199645 13.347 0.14118C13.1947 0.0631167 13.0286 0.0158803 12.858 0.00218006C12.5882 -0.0137728 12.3205 0.0581547 12.095 0.20718C11.9542 0.304066 11.8339 0.427758 11.741 0.57118C11.676 0.66918 11.61 0.78918 11.549 0.89918L11.226 1.48218L8.399 2.87218L8.231 2.95518C6.606 3.79018 5.46 5.36018 5.116 7.18818C5.106 7.23818 5.097 7.29118 5.082 7.37818L5.081 7.38518L5.051 7.55918C4.78213 9.05533 4.04917 10.4289 2.956 11.4852L2.152 12.2762C1.648 12.7722 1.242 13.1712 0.937998 13.5162C0.627998 13.8662 0.377998 14.2092 0.227998 14.6032C0.030446 15.1238 -0.0396839 15.684 0.023465 16.2372C0.086614 16.7905 0.281209 17.3205 0.590998 17.7832C0.826998 18.1332 1.149 18.4092 1.53 18.6772C1.903 18.9402 2.389 19.2322 2.99 19.5952L3.703 20.0252C4.304 20.3862 4.79 20.6792 5.195 20.8852C5.607 21.0952 6.001 21.2512 6.42 21.2902C6.96976 21.3401 7.52314 21.2483 8.02733 21.0235C8.53151 20.7987 8.96968 20.4485 9.3 20.0062C9.554 19.6722 9.713 19.2752 9.848 18.8232C9.981 18.3782 10.109 17.8122 10.268 17.1082L10.523 15.9862L10.562 15.8162C10.9084 14.3395 11.7123 13.01 12.859 12.0172L12.865 12.0122L13.006 11.8872C14.1608 10.824 14.8604 9.35665 14.961 7.79018ZM13.296 8.66318L12.883 8.80118C12.336 8.98385 11.7519 9.02648 11.1841 8.92516C10.6164 8.82383 10.0831 8.5818 9.633 8.22118C9.34172 7.98744 8.98944 7.84227 8.61806 7.80291C8.24667 7.76356 7.8718 7.83168 7.538 7.99918L6.352 8.59218C5.95748 10.0379 5.19623 11.3572 4.142 12.4222L4.012 12.5522L3.223 13.3262C2.695 13.8462 2.326 14.2092 2.062 14.5082C1.799 14.8062 1.685 14.9902 1.629 15.1382C1.401 15.7382 1.479 16.4182 1.834 16.9452C1.921 17.0732 2.071 17.2252 2.393 17.4502C2.717 17.6792 3.157 17.9442 3.788 18.3242L4.453 18.7242C5.084 19.1052 5.524 19.3692 5.875 19.5482C6.225 19.7262 6.421 19.7842 6.56 19.7972C7.146 19.8522 7.728 19.5972 8.104 19.1012C8.198 18.9782 8.294 18.7822 8.411 18.3932C8.527 18.0032 8.645 17.4872 8.811 16.7502L9.061 15.6502L9.103 15.4682C9.50656 13.7527 10.4216 12.2002 11.727 11.0162L11.864 10.8952L11.868 10.8912L11.996 10.7782C12.6174 10.2077 13.0676 9.47527 13.296 8.66318Z" fill="black"/>
                                </svg>
                                <div class="text-base">Botol Plastik</div>
                            </div>
                            <div class="justify-end text-base ml-auto">5 kg</div>
                        </div>
                        <div class="flex flex-row space-x-3">
                            <div class="flex flex-row items-center space-x-3">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 4.5H11.5M10 7.5H11.5M4 10.5H11.5M4 13.5H11.5M14.5 4.5H17.875C18.496 4.5 19 5.004 19 5.625V15C19 15.5967 18.7629 16.169 18.341 16.591C17.919 17.0129 17.3467 17.25 16.75 17.25M14.5 4.5V15C14.5 15.5967 14.7371 16.169 15.159 16.591C15.581 17.0129 16.1533 17.25 16.75 17.25M14.5 4.5V1.875C14.5 1.254 13.996 0.75 13.375 0.75H2.125C1.504 0.75 1 1.254 1 1.875V15C1 15.5967 1.23705 16.169 1.65901 16.591C2.08097 17.0129 2.65326 17.25 3.25 17.25H16.75M4 4.5H7V7.5H4V4.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="text-base">Koran Bekas</div>
                            </div>
                            <div class="justify-end text-base ml-auto">5 kg</div>
                        </div>
                    </div>    
                </div>

                <div class="ml-auto fles justify-end">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 16H12M28 16C28 17.5759 27.6896 19.1363 27.0866 20.5922C26.4835 22.0481 25.5996 23.371 24.4853 24.4853C23.371 25.5996 22.0481 26.4835 20.5922 27.0866C19.1363 27.6896 17.5759 28 16 28C14.4241 28 12.8637 27.6896 11.4078 27.0866C9.95189 26.4835 8.62902 25.5996 7.51472 24.4853C6.40042 23.371 5.5165 22.0481 4.91345 20.5922C4.31039 19.1363 4 17.5759 4 16C4 12.8174 5.26428 9.76516 7.51472 7.51472C9.76516 5.26428 12.8174 4 16 4C19.1826 4 22.2348 5.26428 24.4853 7.51472C26.7357 9.76516 28 12.8174 28 16Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <!-- card 2 -->
            <div class="flex flex-row item-center w-full px-6 py-5 border-2 border-opacity-10 border-dark2 rounded-lg ">
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-row space-x-4">
                        <h2 class="font-semibold text-2xl">Mitra Pengepul</h2>
                        <div class="text-[#1E40AF] bg-[#DBEAFE] px-2 py-1 text-center justify-center rounded-md font-bold text-sm">Dikonfirmasi</div>
                    </div>
                    <div class="flex flex-row  space-x-5"> 
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 1V3.25M15.25 1V3.25M1 16.75V5.5C1 4.90326 1.23705 4.33097 1.65901 3.90901C2.08097 3.48705 2.65326 3.25 3.25 3.25H16.75C17.3467 3.25 17.919 3.48705 18.341 3.90901C18.7629 4.33097 19 4.90326 19 5.5V16.75M1 16.75C1 17.3467 1.23705 17.919 1.65901 18.341C2.08097 18.7629 2.65326 19 3.25 19H16.75C17.3467 19 17.919 18.7629 18.341 18.341C18.7629 17.919 19 17.3467 19 16.75M1 16.75V9.25C1 8.65326 1.23705 8.08097 1.65901 7.65901C2.08097 7.23705 2.65326 7 3.25 7H16.75C17.3467 7 17.919 7.23705 18.341 7.65901C18.7629 8.08097 19 8.65326 19 9.25V16.75M10 10.75H10.008V10.758H10V10.75ZM10 13H10.008V13.008H10V13ZM10 15.25H10.008V15.258H10V15.25ZM7.75 13H7.758V13.008H7.75V13ZM7.75 15.25H7.758V15.258H7.75V15.25ZM5.5 13H5.508V13.008H5.5V13ZM5.5 15.25H5.508V15.258H5.5V15.25ZM12.25 10.75H12.258V10.758H12.25V10.75ZM12.25 13H12.258V13.008H12.25V13ZM12.25 15.25H12.258V15.258H12.25V15.25ZM14.5 10.75H14.508V10.758H14.5V10.75ZM14.5 13H14.508V13.008H14.5V13Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Nov 12, 2024</div>
                        </div>
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.25 1.75H18.25M6.25 7H18.25M6.25 12.25H18.25M1.75 1.75H1.757V1.758H1.75V1.75ZM2.125 1.75C2.125 1.84946 2.08549 1.94484 2.01516 2.01516C1.94484 2.08549 1.84946 2.125 1.75 2.125C1.65054 2.125 1.55516 2.08549 1.48483 2.01516C1.41451 1.94484 1.375 1.84946 1.375 1.75C1.375 1.65054 1.41451 1.55516 1.48483 1.48484C1.55516 1.41451 1.65054 1.375 1.75 1.375C1.84946 1.375 1.94484 1.41451 2.01516 1.48484C2.08549 1.55516 2.125 1.65054 2.125 1.75ZM1.75 7H1.757V7.008H1.75V7ZM2.125 7C2.125 7.09946 2.08549 7.19484 2.01516 7.26517C1.94484 7.33549 1.84946 7.375 1.75 7.375C1.65054 7.375 1.55516 7.33549 1.48483 7.26517C1.41451 7.19484 1.375 7.09946 1.375 7C1.375 6.90054 1.41451 6.80516 1.48483 6.73483C1.55516 6.66451 1.65054 6.625 1.75 6.625C1.84946 6.625 1.94484 6.66451 2.01516 6.73483C2.08549 6.80516 2.125 6.90054 2.125 7ZM1.75 12.25H1.757V12.258H1.75V12.25ZM2.125 12.25C2.125 12.3495 2.08549 12.4448 2.01516 12.5152C1.94484 12.5855 1.84946 12.625 1.75 12.625C1.65054 12.625 1.55516 12.5855 1.48483 12.5152C1.41451 12.4448 1.375 12.3495 1.375 12.25C1.375 12.1505 1.41451 12.0552 1.48483 11.9848C1.55516 11.9145 1.65054 11.875 1.75 11.875C1.84946 11.875 1.94484 11.9145 2.01516 11.9848C2.08549 12.0552 2.125 12.1505 2.125 12.25Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">5 Barang</div>
                        </div>
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 15.75C6.58561 15.7457 11.898 16.4522 17.047 17.851C17.774 18.049 18.5 17.509 18.5 16.755V15.75M2.75 1.5V2.25C2.75 2.44891 2.67098 2.63968 2.53033 2.78033C2.38968 2.92098 2.19891 3 2 3H1.25M1.25 3V2.625C1.25 2.004 1.754 1.5 2.375 1.5H19.25M1.25 3V12M19.25 1.5V2.25C19.25 2.664 19.586 3 20 3H20.75M19.25 1.5H19.625C20.246 1.5 20.75 2.004 20.75 2.625V12.375C20.75 12.996 20.246 13.5 19.625 13.5H19.25M1.25 12V12.375C1.25 12.6734 1.36853 12.9595 1.5795 13.1705C1.79048 13.3815 2.07663 13.5 2.375 13.5H2.75M1.25 12H2C2.19891 12 2.38968 12.079 2.53033 12.2197C2.67098 12.3603 2.75 12.5511 2.75 12.75V13.5M19.25 13.5V12.75C19.25 12.5511 19.329 12.3603 19.4697 12.2197C19.6103 12.079 19.8011 12 20 12H20.75M19.25 13.5H2.75M14 7.5C14 8.29565 13.6839 9.05871 13.1213 9.62132C12.5587 10.1839 11.7956 10.5 11 10.5C10.2044 10.5 9.44129 10.1839 8.87868 9.62132C8.31607 9.05871 8 8.29565 8 7.5C8 6.70435 8.31607 5.94129 8.87868 5.37868C9.44129 4.81607 10.2044 4.5 11 4.5C11.7956 4.5 12.5587 4.81607 13.1213 5.37868C13.6839 5.94129 14 6.70435 14 7.5ZM17 7.5H17.008V7.508H17V7.5ZM5 7.5H5.008V7.508H5V7.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Rp 300.000</div>
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="flex flex-row items-center space-x-5">
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 19V11.5C12.5 11.3011 12.579 11.1103 12.7197 10.9697C12.8603 10.829 13.0511 10.75 13.25 10.75H16.25C16.4489 10.75 16.6397 10.829 16.7803 10.9697C16.921 11.1103 17 11.3011 17 11.5V19M12.5 19H1.35999M12.5 19H17M17 19H20.64M19.25 19V7.349M19.25 7.349C18.6501 7.6951 17.9489 7.82304 17.2654 7.71113C16.5819 7.59922 15.9582 7.25435 15.5 6.735C14.95 7.357 14.146 7.75 13.25 7.75C12.8243 7.75041 12.4034 7.66 12.0154 7.48479C11.6274 7.30959 11.2812 7.05363 11 6.734C10.45 7.357 9.64599 7.75 8.74999 7.75C8.32427 7.75041 7.90336 7.66 7.51536 7.48479C7.12736 7.30959 6.7812 7.05363 6.49999 6.734C6.04191 7.25351 5.41823 7.59858 4.73473 7.71067C4.05124 7.82276 3.35001 7.69498 2.74999 7.349M19.25 7.349C19.6486 7.11891 19.9889 6.80019 20.2446 6.41751C20.5003 6.03484 20.6645 5.59846 20.7245 5.14215C20.7846 4.68584 20.7388 4.22184 20.5908 3.78605C20.4428 3.35026 20.1965 2.95436 19.871 2.629L18.681 1.44C18.4 1.15862 18.0187 1.00035 17.621 1H4.37799C3.98044 1.00008 3.59919 1.15798 3.31799 1.439L2.12899 2.629C1.80423 2.95474 1.5586 3.3507 1.41106 3.78637C1.26351 4.22204 1.21799 4.68577 1.27799 5.14182C1.33799 5.59786 1.50191 6.03403 1.75713 6.41671C2.01234 6.79939 2.35202 7.11835 2.74999 7.349M2.74999 19V7.349M5.74999 16H9.49999C9.6989 16 9.88967 15.921 10.0303 15.7803C10.171 15.6397 10.25 15.4489 10.25 15.25V11.5C10.25 11.3011 10.171 11.1103 10.0303 10.9697C9.88967 10.829 9.6989 10.75 9.49999 10.75H5.74999C5.55108 10.75 5.36031 10.829 5.21966 10.9697C5.07901 11.1103 4.99999 11.3011 4.99999 11.5V15.25C4.99999 15.664 5.33599 16 5.74999 16Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Jl. Raya Kampus Jimbaran</div>
                        </div>

                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.25 1.25L19 5M19 5L15.25 8.75M19 5H1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 11.0001L10.204 2.04507C10.644 1.60607 11.356 1.60607 11.795 2.04507L20.75 11.0001M3.5 8.75007V18.8751C3.5 19.4961 4.004 20.0001 4.625 20.0001H8.75V15.1251C8.75 14.5041 9.254 14.0001 9.875 14.0001H12.125C12.746 14.0001 13.25 14.5041 13.25 15.1251V20.0001H17.375C17.996 20.0001 18.5 19.4961 18.5 18.8751V8.75007M7.25 20.0001H15.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Jl. Raya Kampus Jimbaran</div>
                        </div>
                    </div>   
                </div>

                <div class="ml-auto flex justify-end">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 16H12M28 16C28 17.5759 27.6896 19.1363 27.0866 20.5922C26.4835 22.0481 25.5996 23.371 24.4853 24.4853C23.371 25.5996 22.0481 26.4835 20.5922 27.0866C19.1363 27.6896 17.5759 28 16 28C14.4241 28 12.8637 27.6896 11.4078 27.0866C9.95189 26.4835 8.62902 25.5996 7.51472 24.4853C6.40042 23.371 5.5165 22.0481 4.91345 20.5922C4.31039 19.1363 4 17.5759 4 16C4 12.8174 5.26428 9.76516 7.51472 7.51472C9.76516 5.26428 12.8174 4 16 4C19.1826 4 22.2348 5.26428 24.4853 7.51472C26.7357 9.76516 28 12.8174 28 16Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <!-- card 3 -->
            <div class="flex flex-row item-center w-full px-6 py-5 border-2 border-opacity-10 border-dark2 rounded-lg ">
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-row space-x-4">
                        <h2 class="font-semibold text-2xl">Mitra Pengepul</h2>
                        <div class="text-[#166534] bg-[#DCFCE7] px-2 py-1 text-center justify-center rounded-md font-bold text-sm">Pesanan Selesai</div>
                    </div>
                    <div class="flex flex-row  space-x-5"> 
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.75 1V3.25M15.25 1V3.25M1 16.75V5.5C1 4.90326 1.23705 4.33097 1.65901 3.90901C2.08097 3.48705 2.65326 3.25 3.25 3.25H16.75C17.3467 3.25 17.919 3.48705 18.341 3.90901C18.7629 4.33097 19 4.90326 19 5.5V16.75M1 16.75C1 17.3467 1.23705 17.919 1.65901 18.341C2.08097 18.7629 2.65326 19 3.25 19H16.75C17.3467 19 17.919 18.7629 18.341 18.341C18.7629 17.919 19 17.3467 19 16.75M1 16.75V9.25C1 8.65326 1.23705 8.08097 1.65901 7.65901C2.08097 7.23705 2.65326 7 3.25 7H16.75C17.3467 7 17.919 7.23705 18.341 7.65901C18.7629 8.08097 19 8.65326 19 9.25V16.75M10 10.75H10.008V10.758H10V10.75ZM10 13H10.008V13.008H10V13ZM10 15.25H10.008V15.258H10V15.25ZM7.75 13H7.758V13.008H7.75V13ZM7.75 15.25H7.758V15.258H7.75V15.25ZM5.5 13H5.508V13.008H5.5V13ZM5.5 15.25H5.508V15.258H5.5V15.25ZM12.25 10.75H12.258V10.758H12.25V10.75ZM12.25 13H12.258V13.008H12.25V13ZM12.25 15.25H12.258V15.258H12.25V15.25ZM14.5 10.75H14.508V10.758H14.5V10.75ZM14.5 13H14.508V13.008H14.5V13Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Nov 12, 2024</div>
                        </div>
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.25 1.75H18.25M6.25 7H18.25M6.25 12.25H18.25M1.75 1.75H1.757V1.758H1.75V1.75ZM2.125 1.75C2.125 1.84946 2.08549 1.94484 2.01516 2.01516C1.94484 2.08549 1.84946 2.125 1.75 2.125C1.65054 2.125 1.55516 2.08549 1.48483 2.01516C1.41451 1.94484 1.375 1.84946 1.375 1.75C1.375 1.65054 1.41451 1.55516 1.48483 1.48484C1.55516 1.41451 1.65054 1.375 1.75 1.375C1.84946 1.375 1.94484 1.41451 2.01516 1.48484C2.08549 1.55516 2.125 1.65054 2.125 1.75ZM1.75 7H1.757V7.008H1.75V7ZM2.125 7C2.125 7.09946 2.08549 7.19484 2.01516 7.26517C1.94484 7.33549 1.84946 7.375 1.75 7.375C1.65054 7.375 1.55516 7.33549 1.48483 7.26517C1.41451 7.19484 1.375 7.09946 1.375 7C1.375 6.90054 1.41451 6.80516 1.48483 6.73483C1.55516 6.66451 1.65054 6.625 1.75 6.625C1.84946 6.625 1.94484 6.66451 2.01516 6.73483C2.08549 6.80516 2.125 6.90054 2.125 7ZM1.75 12.25H1.757V12.258H1.75V12.25ZM2.125 12.25C2.125 12.3495 2.08549 12.4448 2.01516 12.5152C1.94484 12.5855 1.84946 12.625 1.75 12.625C1.65054 12.625 1.55516 12.5855 1.48483 12.5152C1.41451 12.4448 1.375 12.3495 1.375 12.25C1.375 12.1505 1.41451 12.0552 1.48483 11.9848C1.55516 11.9145 1.65054 11.875 1.75 11.875C1.84946 11.875 1.94484 11.9145 2.01516 11.9848C2.08549 12.0552 2.125 12.1505 2.125 12.25Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">5 Barang</div>
                        </div>
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 15.75C6.58561 15.7457 11.898 16.4522 17.047 17.851C17.774 18.049 18.5 17.509 18.5 16.755V15.75M2.75 1.5V2.25C2.75 2.44891 2.67098 2.63968 2.53033 2.78033C2.38968 2.92098 2.19891 3 2 3H1.25M1.25 3V2.625C1.25 2.004 1.754 1.5 2.375 1.5H19.25M1.25 3V12M19.25 1.5V2.25C19.25 2.664 19.586 3 20 3H20.75M19.25 1.5H19.625C20.246 1.5 20.75 2.004 20.75 2.625V12.375C20.75 12.996 20.246 13.5 19.625 13.5H19.25M1.25 12V12.375C1.25 12.6734 1.36853 12.9595 1.5795 13.1705C1.79048 13.3815 2.07663 13.5 2.375 13.5H2.75M1.25 12H2C2.19891 12 2.38968 12.079 2.53033 12.2197C2.67098 12.3603 2.75 12.5511 2.75 12.75V13.5M19.25 13.5V12.75C19.25 12.5511 19.329 12.3603 19.4697 12.2197C19.6103 12.079 19.8011 12 20 12H20.75M19.25 13.5H2.75M14 7.5C14 8.29565 13.6839 9.05871 13.1213 9.62132C12.5587 10.1839 11.7956 10.5 11 10.5C10.2044 10.5 9.44129 10.1839 8.87868 9.62132C8.31607 9.05871 8 8.29565 8 7.5C8 6.70435 8.31607 5.94129 8.87868 5.37868C9.44129 4.81607 10.2044 4.5 11 4.5C11.7956 4.5 12.5587 4.81607 13.1213 5.37868C13.6839 5.94129 14 6.70435 14 7.5ZM17 7.5H17.008V7.508H17V7.5ZM5 7.5H5.008V7.508H5V7.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Rp 300.000</div>
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="flex flex-row items-center space-x-5">
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 19V11.5C12.5 11.3011 12.579 11.1103 12.7197 10.9697C12.8603 10.829 13.0511 10.75 13.25 10.75H16.25C16.4489 10.75 16.6397 10.829 16.7803 10.9697C16.921 11.1103 17 11.3011 17 11.5V19M12.5 19H1.35999M12.5 19H17M17 19H20.64M19.25 19V7.349M19.25 7.349C18.6501 7.6951 17.9489 7.82304 17.2654 7.71113C16.5819 7.59922 15.9582 7.25435 15.5 6.735C14.95 7.357 14.146 7.75 13.25 7.75C12.8243 7.75041 12.4034 7.66 12.0154 7.48479C11.6274 7.30959 11.2812 7.05363 11 6.734C10.45 7.357 9.64599 7.75 8.74999 7.75C8.32427 7.75041 7.90336 7.66 7.51536 7.48479C7.12736 7.30959 6.7812 7.05363 6.49999 6.734C6.04191 7.25351 5.41823 7.59858 4.73473 7.71067C4.05124 7.82276 3.35001 7.69498 2.74999 7.349M19.25 7.349C19.6486 7.11891 19.9889 6.80019 20.2446 6.41751C20.5003 6.03484 20.6645 5.59846 20.7245 5.14215C20.7846 4.68584 20.7388 4.22184 20.5908 3.78605C20.4428 3.35026 20.1965 2.95436 19.871 2.629L18.681 1.44C18.4 1.15862 18.0187 1.00035 17.621 1H4.37799C3.98044 1.00008 3.59919 1.15798 3.31799 1.439L2.12899 2.629C1.80423 2.95474 1.5586 3.3507 1.41106 3.78637C1.26351 4.22204 1.21799 4.68577 1.27799 5.14182C1.33799 5.59786 1.50191 6.03403 1.75713 6.41671C2.01234 6.79939 2.35202 7.11835 2.74999 7.349M2.74999 19V7.349M5.74999 16H9.49999C9.6989 16 9.88967 15.921 10.0303 15.7803C10.171 15.6397 10.25 15.4489 10.25 15.25V11.5C10.25 11.3011 10.171 11.1103 10.0303 10.9697C9.88967 10.829 9.6989 10.75 9.49999 10.75H5.74999C5.55108 10.75 5.36031 10.829 5.21966 10.9697C5.07901 11.1103 4.99999 11.3011 4.99999 11.5V15.25C4.99999 15.664 5.33599 16 5.74999 16Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Jl. Raya Kampus Jimbaran</div>
                        </div>
                        
                        <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.25 1.25L19 5M19 5L15.25 8.75M19 5H1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                        <div class="flex flex-row items-center space-x-3">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.25 11.0001L10.204 2.04507C10.644 1.60607 11.356 1.60607 11.795 2.04507L20.75 11.0001M3.5 8.75007V18.8751C3.5 19.4961 4.004 20.0001 4.625 20.0001H8.75V15.1251C8.75 14.5041 9.254 14.0001 9.875 14.0001H12.125C12.746 14.0001 13.25 14.5041 13.25 15.1251V20.0001H17.375C17.996 20.0001 18.5 19.4961 18.5 18.8751V8.75007M7.25 20.0001H15.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="text-base">Jl. Raya Kampus Jimbaran</div>
                        </div>
                    </div>   
                </div>

                <div class="ml-auto fles justify-end">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 16H12M28 16C28 17.5759 27.6896 19.1363 27.0866 20.5922C26.4835 22.0481 25.5996 23.371 24.4853 24.4853C23.371 25.5996 22.0481 26.4835 20.5922 27.0866C19.1363 27.6896 17.5759 28 16 28C14.4241 28 12.8637 27.6896 11.4078 27.0866C9.95189 26.4835 8.62902 25.5996 7.51472 24.4853C6.40042 23.371 5.5165 22.0481 4.91345 20.5922C4.31039 19.1363 4 17.5759 4 16C4 12.8174 5.26428 9.76516 7.51472 7.51472C9.76516 5.26428 12.8174 4 16 4C19.1826 4 22.2348 5.26428 24.4853 7.51472C26.7357 9.76516 28 12.8174 28 16Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pengeplu -->
        <div class="w-full md:w-[45%] flex flex-col space-y-4 mb-12">
            <h2 class="font-bold text-3xl ml-6 md:text-4xl">Pengepul</h2>
            <!-- card 1 -->
            <div class="flex flex-row item-center space-x-5 w-full px-6 py-5 border-2 border-opacity-10 border-dark2 rounded-md ">
                <!-- Profile Image Pengepul -->
                <div class="flex justify-center items-center w-[72px] h-[72px] bg-dark-2 rounded-md">
                    <img class="w-full px-1 py-1" src="\img\logo-white.png" alt="">
                </div>

                <!-- Informasi Pengepul -->
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold">Mitra Pengepul</h2>
                    
                    <div class="flex flex-row items-center space-x-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="text-base font-medium">Jl. Raya Kampus Jimbaran</div>

                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="text-base">5 km</div>
                    </div>
                </div>
            </div>

            <!-- card 2 -->
            <div class="flex flex-row item-center space-x-5 w-full px-6 py-5 border-2 border-opacity-10 border-dark2 rounded-md ">
                <!-- Profile Image Pengepul -->
                <div class="flex justify-center items-center w-[72px] h-[72px] bg-dark-2 rounded-md">
                    <img class="w-full px-1 py-1" src="\img\logo-white.png" alt="">
                </div>

                <!-- Informasi Pengepul -->
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold">Mitra Pengepul</h2>
                    
                    <div class="flex flex-row items-center space-x-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="text-base font-medium">Jl. Raya Kampus Jimbaran</div>

                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="text-base">5 km</div>
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="flex flex-row item-center space-x-5 w-full px-6 py-5 border-2 border-opacity-10 border-dark2 rounded-md ">
                <!-- Profile Image Pengepul -->
                <div class="flex justify-center items-center w-[72px] h-[72px] bg-dark-2 rounded-md">
                    <img class="w-full px-1 py-1" src="\img\logo-white.png" alt="">
                </div>

                <!-- Informasi Pengepul -->
                <div class="flex flex-col space-y-2">
                    <h2 class="text-xl font-semibold">Mitra Pengepul</h2>
                    
                    <div class="flex flex-row items-center space-x-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="text-base font-medium">Jl. Raya Kampus Jimbaran</div>

                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.25 16.5L1.5 12.75M1.5 12.75L5.25 9M1.5 12.75H12.75M12.75 1.5L16.5 5.25M16.5 5.25L12.75 9M16.5 5.25H5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div class="text-base">5 km</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>