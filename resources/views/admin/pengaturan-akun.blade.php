@extends('layouts.admin')

@section('title')
    Pengaturan Akun
@endsection

@section('content')
    <form class="p-6 rounded-lg bg-white">
        <h2 class="text-2xl font-semibold">Ubah Nomor Telepon</h2>
        <div class="my-5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
            <input type="text" name="harga" id="harga"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-96 max-w-full p-2.5"
                placeholder="Nomor telepon" required>
        </div>
        <button type="submit"
            class="text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-3 py-2">
            Simpan
        </button>
    </form>
    <form class="p-6 rounded-lg bg-white mt-4">
        <h2 class="text-2xl font-semibold">Ubah Password</h2>
        <div class="mt-5">
            <label for="password-lama" class="block mb-2 text-sm font-medium text-gray-900">Password Lama</label>
            <input type="password" name="password-lama" id="password-lama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-96 max-w-full p-2.5"
                placeholder="Password lama" required>
        </div>
        <div class="mt-5">
            <label for="password-baru" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
            <input type="password" name="password-baru" id="password-baru"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-96 max-w-full p-2.5"
                placeholder="Password baru" required>
        </div>
        <div class="mt-5">
            <label for="konfirmasi-password-baru" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password
                baru</label>
            <input type="password" name="konfirmasi-password-baru" id="konfirmasi-password-baru"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-96 max-w-full p-2.5"
                placeholder="Konfirmasi Password baru" required>
        </div>
        <button type="submit"
            class="text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-3 py-2 mt-5">
            Simpan
        </button>
    </form>
@endsection
