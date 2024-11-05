@extends('layouts.admin')

@section('title')
    Pesanan
@endsection

@section('content')
    <div class="flex items-center gap-4 justify-between font-medium flex-wrap">
        <div class="flex items-center gap-4 flex-wrap">
            <div class="relative w-72">
                <button class="absolute inset-y-0 right-0 flex items-center ps-3 px-5">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
                <input type="text" id="search"
                    class="block w-full px-4 py-3 pe-12 text-gray-900 border-none rounded-lg bg-white focus:ring-primary focus:border-primary"
                    placeholder="Search" required />
            </div>
            <select id="status"
                class="bg-white border-none text-gray-900 rounded-lg focus:ring-primary focus:border-primary block w-auto px-4 py-3">
                <option selected>Status : All</option>
                <option value="belum-dikonfirmasi">Status : Belum Konfirmasi</option>
                <option value="dikonfirmasi">Status : Dikonfirmasi</option>
                <option value="selesai">Status : Selesai</option>
            </select>
        </div>
        <select id="range"
            class="bg-white border-none text-gray-900 rounded-lg focus:ring-primary focus:border-primary block w-auto px-4 py-3">
            <option value="year" selected>Waktu : 1 Tahun</option>
            <option value="month">Waktu : 1 Bulan</option>
            <option value="week">Waktu : 1 Minggu</option>
            <option value="custom">Waktu : Custom</option>
        </select>
    </div>

    <div class="p-6 rounded-lg bg-white col-span-3 mt-4">
        <h2 class="text-lg font-semibold mb-2">Riwayat Pesanan</h2>
        <div class="relative overflow-x-auto font-medium mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
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
                            Status
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
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th class="px-6 py-4">
                                <a href="/admin/pesanan/detail" class="hover:underline">#647</a>
                            </th>
                            <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                Made Aditya
                            </td>
                            <td class="px-6 py-4">
                                Jl. Raya Kampus Unud, Jimbaran
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-yellow-500">Belum Dikonfirmasi</span>
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
        <div class="px-6 py-4">

        </div>
    </div>
@endsection
