@extends('layouts.admin')

@section('title')
    Jenis Barang
@endsection

@section('content')
    <div class="flex items-center gap-4">
        <button type="button" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="focus:outline-none text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-4 py-2 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            <span>Tambah Barang</span>
        </button>
        <div class="relative w-72">
            <input type="text" id="search"
                class="block w-full px-4 py-2 pe-12 text-gray-900 border-none rounded-lg bg-white focus:ring-primary focus:border-primary"
                placeholder="Search" required />
            <button class="absolute inset-y-0 right-0 flex items-center ps-3 px-5">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </button>
        </div>
    </div>
    @for ($i = 0; $i < 3; $i++)
        <div class="p-6 rounded-lg bg-white flex justify-between items-center mt-4">
            <div class="">
                <h2 class="text-3xl font-semibold">Botol Plastik</h2>
                <div class="flex items-center gap-4 mt-4 font-medium">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <span>Rp. 14.000</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_773_1809)">
                                <path
                                    d="M0 13.6187V20H18.1323V13.6187H0ZM17.3541 19.2218H0.77821V14.3969H1.55642V15.5642H2.33463V14.3191H3.11284V16.7315H3.89105V14.3191H5.05837V15.5642H5.83658V14.3191H6.77043V16.7315H7.54864V14.3191H8.63813V15.5642H9.41634V14.3191H10.5058V16.7315H11.284V14.3191H12.2179V15.5642H12.9961V14.3191H14.1634V16.7315H14.9416V14.3191H15.7977V15.5642H16.5759V14.3191H17.3541V19.2218ZM15.0195 2.02335H10.1167V0H8.01556V2.02335H3.11284L1.08949 12.3735H17.1206L15.0195 2.02335ZM8.79377 0.77821H9.33852V2.02335H8.79377V0.77821ZM3.73541 2.80156H14.3969L16.1089 11.5953H2.02335L3.73541 2.80156Z"
                                    fill="black" />
                                <path
                                    d="M8.56053 5.36966H7.78232L6.69283 6.69261C6.53718 6.77043 6.45936 6.92608 6.30372 7.08172V3.65759H5.68115V9.10506H6.38154V7.70428L6.69283 7.31518L8.01578 9.10506H8.87181L7.15975 6.92607L8.56053 5.36966ZM11.829 5.9144C11.6734 5.60312 11.2843 5.29183 10.6617 5.29183C9.80567 5.29183 8.94963 5.99222 8.94963 7.23736C8.94963 8.24903 9.65002 9.02724 10.5061 9.02724C11.0508 9.02724 11.5177 8.71596 11.6734 8.40467V8.79378C11.6734 9.72763 11.1286 10.1167 10.5061 10.1167C10.0391 10.1167 9.65002 9.96109 9.41656 9.80545L9.33874 10.428C9.65002 10.6615 10.1169 10.7393 10.5839 10.7393C11.0508 10.7393 11.5955 10.6615 11.9068 10.2724C12.2959 9.96109 12.4516 9.41635 12.4516 8.56032V5.36966H11.829V5.9144ZM11.7512 7.47082C11.7512 7.54864 11.7512 7.70429 11.6734 7.85993C11.5177 8.32685 11.1286 8.56032 10.7395 8.56032C10.0391 8.56032 9.65002 7.93775 9.65002 7.23736C9.65002 6.38133 10.1169 5.83658 10.7395 5.83658C11.2064 5.83658 11.5955 6.14786 11.6734 6.53697V7.47082H11.7512Z"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_773_1809">
                                    <rect width="18.1323" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>5 kg</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button type="button"
                    class="focus:outline-none text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                    <span>Edit</span>
                </button>
                <button type="button"
                    class="focus:outline-none text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Hapus</span>
                </button>
            </div>
        </div>
    @endfor

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-[rgba(0,0,0,0.4)]">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Tentukan Harga
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
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
                <form class="p-4 md:p-5 grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Nama
                            Barang</label>
                        <input type="text" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="Nama barang" required>
                    </div>
                    <div class="">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Satuan
                            Barang</label>
                        <input type="text" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="Contoh : kg" required>
                    </div>
                    <div class="">
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harag per
                            Satuan</label>
                        <input type="text" name="harga" id="harga"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="Harga per satuan" required>
                    </div>
                    <button type="submit"
                        class="text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-3 py-2">
                        Tambah Barang
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
