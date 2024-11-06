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
    
    <div class="mt-12 flex flex-col space-y-5 mb-40 justify-between mx-auto w-[90%] md:w-[85%]">
        <!-- header --> 
        <div class="flex flex-col space-y-5 mb-12">
            <div class="flex flex-col md:flex-row items-center">
                <h1 class="font-bold text-4xl mr-5">Pengepul Makmur Sejahtera</h1>
                <div class="text-[#854D0E] bg-[#FEF9C3] px-2 py-1 justify-between rounded-md font-semibold text-sm">Menunggu Konfirmasi</div>
            </div>
            <!-- location -->
            <div class="flex flex-row items-center space-x-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 8.75C12.5 9.41304 12.2366 10.0489 11.7678 10.5178C11.2989 10.9866 10.663 11.25 10 11.25C9.33696 11.25 8.70107 10.9866 8.23223 10.5178C7.76339 10.0489 7.5 9.41304 7.5 8.75C7.5 8.08696 7.76339 7.45107 8.23223 6.98223C8.70107 6.51339 9.33696 6.25 10 6.25C10.663 6.25 11.2989 6.51339 11.7678 6.98223C12.2366 7.45107 12.5 8.08696 12.5 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.25 8.75C16.25 14.7017 10 18.125 10 18.125C10 18.125 3.75 14.7017 3.75 8.75C3.75 7.0924 4.40848 5.50268 5.58058 4.33058C6.75268 3.15848 8.3424 2.5 10 2.5C11.6576 2.5 13.2473 3.15848 14.4194 4.33058C15.5915 5.50268 16.25 7.0924 16.25 8.75Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="text-base font-medium text-center md:text-left">Jl. Raya Kampus Jimbaran</div>
            </div>
        </div>

        <!-- body -->
        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:justify-between w-[90%] md:w-[95%]  mt-[50px] md:mt-12 md:space-x-12 mb-12">
            <!-- Daftar Barang -->
            <div class="w-full md:w-[55%] flex flex-col space-y-4 mb-12">
                <h2 class="font-semibold text-3xl md:text-2xl">Daftar Barang</h2>
                <!-- card 1 -->
                <div class="flex flex-row item-center justify-center w-full px-6 py-4 border-2 border-opacity-10 border-dark2 rounded-lg ">
                    <div class="flex flex-col space-y-2">
                        <h2 class="font-semibold text-2xl">Botol Plastik</h2>
                        <p>10kg</p>                     
                    </div>

                    <div class="ml-auto flex justify-end">
                        <h2 class="font-semibold text-xl">Rp 17.000</h2>
                    </div>
                </div>

                <!-- card 1 -->
                <div class="flex flex-row item-center justify-center w-full px-6 py-4 border-2 border-opacity-10 border-dark2 rounded-lg ">
                    <div class="flex flex-col space-y-2">
                        <h2 class="font-semibold text-2xl">Botol Plastik</h2>
                        <p>10kg</p>                     
                    </div>

                    <div class="ml-auto flex justify-end">
                        <h2 class="font-semibold text-xl">Rp 17.000</h2>
                    </div>
                </div>

                <!-- card 1 -->
                <div class="flex flex-row item-center justify-center w-full px-6 py-4 border-2 border-opacity-10 border-dark2 rounded-lg ">
                    <div class="flex flex-col space-y-2">
                        <h2 class="font-semibold text-2xl">Botol Plastik</h2>
                        <p>10kg</p>                     
                    </div>

                    <div class="ml-auto flex justify-end">
                        <h2 class="font-semibold text-xl">Rp 17.000</h2>
                    </div>
                </div>
            </div>

            <!-- Rincian Pesanan -->
            <div class="w-full md:w-[45%] flex flex-col space-y-5 mb-12">
                <h2 class="font-semibold text-3xl md:text-2xl">Rincian Pesanan</h2>

                <div class="flex flex-row items-center justify-center">
                    <div class="font-medium text-lg">Jenis Barang</div>
                    <div class="ml-auto flex justify-end font-medium text-lg">5</div>
                </div>
                <div class="flex flex-row items-center justify-center">
                    <div class="font-medium text-lg">Total Berat</div>
                    <div class="ml-auto flex justify-end font-medium text-lg">40 kg</div>
                </div>

                <hr class="border-black opacity-10">
                
                <div class="flex flex-row items-center justify-center">
                    <div class="font-medium text-lg">Estimasi Harga</div>
                    <div class="ml-auto flex justify-end font-medium text-lg">Rp 270.000</div>
                </div>
                <div class="flex flex-row items-center justify-center">
                    <div class="font-medium text-lg">Pengantaran Barang</div>
                    <div class="ml-auto flex justify-end font-medium text-lg">Dijemput</div>
                </div>
                <div class="flex flex-row items-center justify-center">
                    <div class="font-medium text-lg">Biaya Penjemputan</div>
                    <div class="ml-auto flex justify-end font-medium text-lg">Rp 10.000</div>
                </div>

                <hr class="border-black opacity-10">
                
                <div class="flex flex-row items-center justify-center">
                    <div class="font-medium text-lg">Estimasi Total</div>
                    <div class="ml-auto flex justify-end font-medium text-lg">Rp 260.000</div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>