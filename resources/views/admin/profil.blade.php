@extends('layouts.admin')

@section('title')
    Edit Profil
@endsection

@section('content')
    <div class="p-6 rounded-lg bg-white flex justify-between items-center">
        <h2 class="text-2xl font-semibold">Ubah Nomor Telepon</h2>
        <div class="mt-5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
            <input type="text" name="harga" id="harga"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                placeholder="Nomor" required>
        </div>
    </div>
@endsection
