@extends('layouts.admin')

@section('title')
    Detail Pesanan
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-4">
        <div class="p-6 rounded-lg bg-white col-span-12">
            <div class="flex gap-x-5 gap-y-2 items-center flex-wrap">
                <h2 class="text-3xl font-semibold">Pesanan #647</h2>
                <span class="bg-yellow-100 text-yellow-800 text-xs font-bold me-2 px-2.5 py-1 rounded">Belum
                    Dikonfirmasi</span>
            </div>
            <div class="mt-3.5 flex items-center gap-4 flex-wrap">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span>Made Aditya</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span>Jl. Raya Kampus Jimbaran</span>
                </div>
            </div>
            <div class="mt-3.5 flex items-center gap-4">
                <div class="flex items-center gap-2">
                    <svg width="24" height="18" viewBox="0 0 24 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.5832 14.9583C21.1259 14.9583 21.8181 14.9583 22.3078 14.4307C22.3295 14.4076 22.35 14.3842 22.3695 14.3603C22.8354 13.8046 22.8354 12.9303 22.8354 11.1797C22.8354 9.85258 22.8354 9.18958 22.5754 8.6295C22.3035 8.0445 21.8138 7.67942 20.7835 6.93408C19.7598 6.19308 19.0329 5.36108 18.3395 4.21492C17.3515 2.57908 16.8565 1.76117 16.1155 1.31808C15.3745 0.875 14.5002 0.875 12.7517 0.875H11.9934M8.74121 14.9583H15.2466"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M14.1625 0.875L14.9707 4.645C15.4365 6.81492 15.5124 8.45833 17.991 8.45833H22.294M22.8357 11.7083H21.7524M11.9948 0.875V14.9583M17.4158 17.125C17.9906 17.1251 18.5419 16.897 18.9484 16.4906C19.3549 16.0843 19.5834 15.5331 19.5835 14.9583C19.5837 14.3836 19.3555 13.8323 18.9492 13.4257C18.5428 13.0192 17.9916 12.7907 17.4169 12.7906C16.8421 12.7906 16.2909 13.0189 15.8844 13.4253C15.478 13.8318 15.2497 14.383 15.2497 14.9578C15.2497 15.5326 15.478 16.0838 15.8844 16.4902C16.2909 16.8967 16.841 17.125 17.4158 17.125ZM6.57487 17.125C6.85947 17.1251 7.1413 17.0691 7.40427 16.9602C7.66723 16.8514 7.90618 16.6918 8.10748 16.4906C8.30877 16.2894 8.46846 16.0506 8.57744 15.7876C8.68642 15.5247 8.74255 15.2429 8.74262 14.9583C8.74269 14.6737 8.6867 14.3919 8.57786 14.1289C8.46901 13.866 8.30944 13.627 8.10824 13.4257C7.90705 13.2244 7.66818 13.0647 7.40527 12.9558C7.14236 12.8468 6.86055 12.7907 6.57595 12.7906C6.00117 12.7904 5.44988 13.0186 5.04335 13.425C4.63681 13.8313 4.40835 14.3825 4.4082 14.9573C4.40806 15.532 4.63625 16.0833 5.04258 16.4899C5.44891 16.8964 6.00009 17.1249 6.57487 17.125Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M11.9892 8.46155H1.16455V13.564C1.16455 13.9703 1.9153 14.448 2.58913 14.7665C2.82422 14.8781 3.08205 14.929 3.34205 14.9355L4.4048 14.9659"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Penjemputan pada 16 November 2024</span>
                </div>
            </div>
        </div>
        <div class="p-6 rounded-lg bg-white col-span-12 md:col-span-7">
            <h2 class="text-3xl font-semibold">Daftar Barang</h2>
            @for ($i = 0; $i < 3; $i++)
                <div class="mt-5 px-6 py-4 rounded-lg border">
                    <div class="flex gap-3 justify-between">
                        <div>
                            <h3 class="text-2xl font-semibold">Botol Plastik</h3>
                            <p class="font-medium mt-2">10 kg</p>
                        </div>
                        <h3 class="text-xl font-semibold text-end">17.000 - 20.000</h3>
                    </div>

                    <div class="flex gap-2.5 mt-2.5">
                        <button type="button" data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                            class="text-blue-500 hover:text-white border border-blue-500 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg sm:text-sm sm:px-4 sm:py-2 text-xs px-3 py-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="sm:size-5 inline-block sm:me-2 size-4 me-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            <span>Gambar</span>
                        </button>
                        <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                            class="text-primary hover:text-white border border-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-teal-100 font-medium rounded-lg sm:text-sm sm:px-4 sm:py-2 text-xs px-3 py-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="sm:size-5 inline-block sm:me-2 size-4 me-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                            <span>Set Harga</span>
                        </button>
                    </div>
                </div>
            @endfor
        </div>
        <div class="p-6 rounded-lg bg-white col-span-12 md:col-span-5">
            <h2 class="text-3xl font-semibold">Daftar Barang</h2>
            <div class="flex justify-between gap-2 mt-5">
                <p>Jenis Barang</p>
                <p>5</p>
            </div>
            <div class="flex justify-between gap-2 mt-5">
                <p>Total Berat</p>
                <p>40 kg</p>
            </div>
            <hr class="mt-5">
            <div class="flex justify-between gap-2 mt-5">
                <p>Estimasi Harga</p>
                <p>Rp. 250.000 - 270.000</p>
            </div>
            <div class="flex justify-between gap-2 mt-5">
                <p>Biaya Penjemputan</p>
                <p>Rp. 16.000</p>
            </div>
            <hr class="mt-5">
            <div class="flex justify-between gap-2 mt-5">
                <p>Estimasi Total</p>
                <p>Rp. 234.000 - 254.000</p>
            </div>
            <button type="button"
                class="w-full text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-5 py-2 mt-5">Konfirmasi
                Pesanan</button>
        </div>
    </div>

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-[rgba(0,0,0,0.4)]">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Tentukan Harga
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <img src="/img/cover.jpg" alt="" class="h-48 w-full object-cover rounded-lg border">
                    <div class="my-5">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga
                            Barang</label>
                        <input type="number" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="17.000 - 20.000" required="">
                    </div>
                    <button type="submit"
                        class="text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-4 py-2">Tentukan
                        Harga</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Image Modal --}}
    <div id="extralarge-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full max-h-full bg-[rgba(0,0,0,0.4)]">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                {{-- <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div> --}}
                <img src="/img/cover.jpg" class="w-full h-[calc(100vh-6rem)] object-cover rounded-lg" alt="">
            </div>
        </div>
    </div>
@endsection
