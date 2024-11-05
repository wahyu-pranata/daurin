@extends('layouts.default')

@section('title')
    Pesanan Baru
@endsection

@section('content')
    <div class="flex items-center justify-center gap-3 px-2">
        <div class="w-24">
            <div
                class="w-16 h-16 flex justify-center items-center rounded-full border border-primary mb-2 text-lg mx-auto text-primary">
                1
            </div>
            <p class="text-center text-lg text-primary">Input Alamat</p>
        </div>
        <div class="w-24">
            <div class="w-16 h-16 flex justify-center items-center rounded-full border border-dashed mb-2 text-lg mx-auto">2
            </div>
            <p class="text-center text-lg">Pilih Agen Pengepul</p>
        </div>
        <div class="w-24">
            <div class="w-16 h-16 flex justify-center items-center rounded-full border border-dashed mb-2 text-lg mx-auto">3
            </div>
            <p class="text-center text-lg">Input Barang</p>
        </div>
        <div class="w-24">
            <div class="w-16 h-16 flex justify-center items-center rounded-full border border-dashed mb-2 text-lg mx-auto">4
            </div>
            <p class="text-center text-lg">Pilih Cara Pengantaran</p>
        </div>
        <div class="w-24">
            <div class="w-16 h-16 flex justify-center items-center rounded-full border border-dashed mb-2 text-lg mx-auto">5
            </div>
            <p class="text-center text-lg">Proses Pesanan</p>
        </div>
    </div>

    <div class="bg-[rgba(0,0,0,0.03)] py-8 px-32"></div>
@endsection
