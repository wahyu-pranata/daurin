@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-6 rounded-lg bg-white col-span-3 md:col-span-1">
            <h5 class="text-lg font-semibold">Total Pesanan</h5>
            <h2 class="text-4xl font-bold mt-1.5">25.7K</h2>
            <div class="flex gap-1 items-center mt-1.5">
                <div class="flex items-center gap-1 text-green-500 text-sm mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>
                    <span>6%</span>
                </div>
                <span class="text-[#8B909A]">vs last month</span>
            </div>
        </div>
        <div class="p-6 rounded-lg bg-white col-span-3 md:col-span-1">
            <h5 class="text-lg font-semibold">Total Pesanan</h5>
            <h2 class="text-4xl font-bold mt-1.5">25.7K</h2>
            <div class="flex gap-1 items-center mt-1.5">
                <div class="flex items-center gap-1 text-green-500 text-sm mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>
                    <span>6%</span>
                </div>
                <span class="text-[#8B909A]">vs last month</span>
            </div>
        </div>
        <div class="p-6 rounded-lg bg-white col-span-3 md:col-span-1">
            <h5 class="text-lg font-semibold">Total Pesanan</h5>
            <h2 class="text-4xl font-bold mt-1.5">25.7K</h2>
            <div class="flex gap-1 items-center mt-1.5">
                <div class="flex items-center gap-1 text-green-500 text-sm mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                    </svg>
                    <span>6%</span>
                </div>
                <span class="text-[#8B909A]">vs last month</span>
            </div>
        </div>
        <div class="p-6 rounded-lg bg-white col-span-3">
            <h2 class="text-lg font-semibold mb-2">Laporan Usaha</h2>
            <div
                class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 overflow-x-auto overflow-y-hidden">
                <ul class="flex -mb-px">
                    <li class="me-2">
                        <a href="#"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Profile</a>
                    </li>
                    <li class="me-2">
                        <a href="#"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li class="me-2">
                        <a href="#"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Settings</a>
                    </li>
                    <li class="me-2">
                        <a href="#"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Contacts</a>
                    </li>
                    <li>
                        <a
                            class="inline-block p-4 text-gray-400 rounded-t-lg cursor-not-allowed dark:text-gray-500">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-6 rounded-lg bg-white col-span-3">
            <h2 class="text-lg font-semibold mb-2">Konfirmasi Pesanan</h2>
            <div class="relative overflow-x-auto font-medium">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Customer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pilihan Pengantaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Estimasi Total
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                                <th class="px-6 py-4">
                                    #647
                                </th>
                                <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    Made Aditya
                                </td>
                                <td class="px-6 py-4">
                                    Jl. Raya Kampus Unud, Jimbaran
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-blue-500">Diantar Pelanggan</span>
                                </td>
                                <td class="px-6 py-4">
                                    17.000 - 20.000
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
