@extends('layouts.default')

@section('title')
    Pesanan Baru
@endsection

@section('content')
    <div x-data="new_order">
        <div class="flex items-start justify-center gap-3 px-2">
            <template x-for="(s, i) in steps">
                <div class="w-24 cursor-pointer" @click="changeStep(i+1)">
                    <div class="w-10 h-10 flex justify-center items-center rounded-full border mb-2 mx-auto" x-text="i+1"
                        :class="i < step ? 'border-solid border-primary text-primary' : 'border-dashed'">
                    </div>
                    <p class="text-center" x-text="s" :class="i < step && 'text-primary'"></p>
                </div>
            </template>
        </div>

        <div class="bg-[rgba(0,0,0,0.03)] py-8 px-4 mt-6">
            <div x-show="step == 1">
                <div>
                    @foreach ($addresses as $address)
                        <div class="bg-white px-5 py-4 rounded-lg flex justify-between items-start w-[720px] max-w-full mx-auto mt-4 cursor-pointer"
                            x-on:click="form.alamat = {{ $address }}">
                            <div class="flex gap-2">
                                <div class="flex justify-center items-center w-5 h-5 rounded-full border-2 mt-1"
                                    :class="form.alamat?.id == '{{ $address->id }}' ? 'border-primary' : 'border-gray-300'">
                                    <div class="w-2.5 h-2.5 rounded-full"
                                        :class="form.alamat?.id == '{{ $address->id }}' && 'bg-primary'"></div>
                                </div>
                                <div class="">
                                    <h3 class="text-xl font-semibold">{{ $address->name }}</h3>
                                    <p class="mt-2">{{ $address->address }}</p>
                                </div>
                            </div>
                            {{-- <div class="flex">
                                <button class="px-4 border-r">Edit</button>
                                <button class="px-4 text-red-600">Remove</button>
                            </div> --}}
                        </div>
                    @endforeach
                </div>
            </div>
            <div x-show="step == 2">
                <div>
                    <h2 class="text-2xl font-semibold text-center">Pilih agen mitra kami yang terpercaya</h2>
                    <div class="w-[1064px] max-w-full mx-auto mt-6 grid grid-cols-2 gap-x-8 gap-y-4">
                        <template x-for="agen in data.pengepul">
                            <div class="bg-white px-6 py-5 flex gap-4 rounded-lg cursor-pointer"
                                :class="form.pengepul == agen.id && 'border border-primary'"
                                x-on:click="selectAgen(agen.id)">
                                <img src="/img/cover.jpg" alt="" class="w-16 h-16 rounded-lg object-cover">
                                <div>
                                    <h3 class="text-xl font-semibold" x-text="agen.name"></h3>
                                    <div class="flex items-center gap-1.5 mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                        </svg>
                                        <span x-text="agen.address"></span>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <template x-if="loadingAgen"><x-loader /></template>
                </div>
            </div>
            <div x-show="step == 3">
                <div>
                    <div class="flex gap-1 w-96 items-center mx-auto">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full ps-10 p-2.5"
                                placeholder="Cari jenis barang..." x-model="searchItem" />
                        </div>
                        <button type="button" x-on:click="showCartModal()"
                            class="p-2.5 ms-2 text-sm font-medium text-white bg-primary rounded-lg border border-primary hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-[720px] max-w-full mx-auto mt-6">
                        <template
                            x-for="item in data.barang.filter(barang => barang.name.toLowerCase().includes(searchItem) && !form.cart.find(c => c.barang.id == barang.id))">
                            <div class="bg-white px-6 py-5 flex gap-4 justify-between items-center mt-5">
                                <div>
                                    <h3 class="text-xl font-semibold" x-text="item.name"></h3>
                                    <div class="mt-2" x-text="`${item.base_price} - ${item.top_price} / ${item.unit}`">
                                    </div>
                                </div>
                                <button type="button" data-modal-target="add-item-detail-modal"
                                    data-modal-toggle="add-item-detail-modal" x-on:click="addItemDetail(item)"
                                    class="w-12 h-12 rounded-full flex justify-center items-center bg-primary text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="3" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </div>
                        </template>
                    </div>
                    <template x-if="loadingItems"><x-loader /></template>
                </div>
            </div>
            <div x-show="step == 4">
                <div class="w-[1064px] max-w-full mx-auto">
                    <h2 class="text-2xl text-center font-semibold">Pilih cara pengantaran/penjemputan barang</h2>
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-8 mt-6">
                        <div class="px-6 py-5 rounded-lg flex items-center bg-white gap-5 cursor-pointer border"
                            :class="form.tipe_antar == 'dijemput' ? 'border-primary' : 'border-white'"
                            x-on:click="form.tipe_antar = 'dijemput'">
                            <img src="/img/pickup.svg" alt="" class="h-10">
                            <div>
                                <h4 class="text-lg mb-2">Dijemput Agen</h4>
                                <p>Petugas dari <span class="font-semibold">Agen Madura Sejahtera</span> yang datang untuk
                                    mengantar barang kamu.</p>
                            </div>
                        </div>
                        <div class="px-6 py-5 rounded-lg flex items-center bg-white gap-5 cursor-pointer border"
                            :class="form.tipe_antar == 'dibawa' ? 'border-primary' : 'border-white'"
                            x-on:click="form.tipe_antar = 'dibawa'">
                            <img src="/img/box.svg" alt="" class="h-10">
                            <div>
                                <h4 class="text-lg mb-2">Dibawa Langsung</h4>
                                <p>Anda yang mengantarkan ke <span class="font-semibold">Agen Madura Sejahtera</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="step == 5">
                <div class="grid grid-cols-12 gap-4">
                    <div class="p-6 rounded-lg bg-white col-span-12 md:col-span-7">
                        <h2 class="text-3xl font-semibold">Daftar Barang</h2>
                        <template x-for="c in form.cart">
                            <div class="mt-5 px-6 py-4 rounded-lg border">
                                <div class="flex gap-3 justify-between">
                                    <div>
                                        <h3 class="text-2xl font-semibold" x-text="c.barang.name"></h3>
                                        <p class="font-medium mt-2" x-text="`${c.berat} ${c.barang.unit}`">10 kg</p>
                                    </div>
                                    <h3 class="text-xl font-semibold text-end"
                                        x-text="`${c.base_price} - ${c.top_price} / ${c.barang.unit}`"></h3>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="p-6 rounded-lg bg-white col-span-12 md:col-span-5">
                        <h2 class="text-3xl font-semibold">Daftar Barang</h2>
                        <div class="flex justify-between gap-2 mt-5">
                            <p>Jenis Barang</p>
                            <p x-text="form.cart.length"></p>
                        </div>
                        {{-- <div class="flex justify-between gap-2 mt-5">
                            <p>Total Berat</p>
                            <p x-text="${form.cart.reduce((acc, c) => acc += c.berat)">40 kg</p>
                        </div>
                        <hr class="mt-5"> --}}
                        <div class="flex justify-between gap-2 mt-5">
                            <p>Estimasi Harga</p>
                            <p x-text="`Rp. ${accumulated_base_price} - ${accumulated_top_price}`">
                            </p>
                        </div>
                        <template x-if="form.tipe_antar == 'dijemput'">
                            <div class="flex justify-between gap-2 mt-5">
                                <p>Biaya Penjemputan</p>
                                <p x-text="`Rp. ${ongkir}`"></p>
                            </div>
                        </template>
                        <hr class="mt-5">
                        <div class="flex justify-between gap-2 mt-5">
                            <p>Estimasi Total</p>
                            <p x-text="`Rp. ${total_base_price} - ${total_top_price}`"></p>
                        </div>
                        <div class="flex justify-between gap-2 mt-5 items-center">
                            <p x-text="`Tanggal ${form.tipe_antar == 'dijemput' ? 'Penjemputan' : 'Pengambilan'}`"></p>
                            <input type="date" id="tanggal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary px-3 py-2"
                                :placeholder="`Tanggal ${form.tipe_antar == 'dijemput' ? 'Penjemputan' : 'Pengambilan'}`"
                                x-model="form.tanggal" required :min="new Date()" />
                        </div>
                        <button type="button" x-on:click="submit" :disabled="loadingSubmit"
                            class="w-full text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-5 py-2 mt-5 flex gap-2 items-center justify-center">
                            <template x-if="loadingSubmit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 animate-spin">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </template>
                            <span>Konfirmasi Pesanan</span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- Modal Item --}}
            <div id="add-item-detail-modal" tabindex="-1" aria-hidden="true"
                class="hidden modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-[rgba(0,0,0,0.4)]">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 border-b rounded-t">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Detail Setoran
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-toggle="add-item-detail-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5 gap-4" x-on:submit.prevent="addToCart">
                            <div class="mb-4">
                                <label for="berat-barang" class="block mb-2 text-sm font-medium text-gray-900"
                                    x-text="`Estimasi
																		jumlah/berat barang (${form.selectedItemDetail?.unit})`"></label>
                                <input type="number" name="berat-barang" id="berat-barang"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                    placeholder="Berat barang" required x-model="formAddToCart.berat">
                            </div>
                            <div class="mb-4">
                                <label for="gambar-barang" class="block mb-2 text-sm font-medium text-gray-900">Gambar
                                    Barang</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none"
                                    id="gambar-barang" type="file" x-on:input="fileChange">
                            </div>
                            <template x-if="formAddToCart.preview">
                                <div class="mb-4">
                                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Preview
                                        Gambar</label>
                                    <img :src="formAddToCart.preview" alt=""
                                        class="h-[200px] w-full object-cover">
                                </div>
                            </template>
                            <button type="submit"
                                class="text-white bg-primary hover:bg-teal-500 focus:ring-4 focus:ring-teal-100 font-medium rounded-lg text-sm px-3 py-2">
                                Tambah Barang
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Cart Modal --}}
            <div id="cart-modal" tabindex="-1" aria-hidden="true"
                class="hidden modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-[rgba(0,0,0,0.4)]">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 border-b rounded-t">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Keranjang
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-toggle="cart-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="px-7">
                            <template x-for="c in form.cart">
                                <div class="py-4 flex justify-between items-start">
                                    <div>
                                        <h3 class="text-xl font-semibold" x-text="c.barang.name"></h3>
                                        <p class="font-medium mt-2" x-text="`${c.berat} ${c.barang.unit}`"></p>
                                    </div>
                                    <h3 class="text-xl font-semibold" x-text="`${c.base_price} - ${c.top_price}`"></h3>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- </div> --}}

        <script>
            const $targetEl = document.getElementById('crud-modal');
            const options = {
                placement: 'bottom-right',
                backdrop: 'dynamic',
                backdropClasses: 'bg-gray-900/50 fixed inset-0 z-40',
                closable: true,
            };
            document.addEventListener('alpine:init', () => {
                // window.initFlowbite()
                // const modal = new Modal($targetEl, options)
                // modal.show()
                Alpine.data('new_order', () => ({
                    steps: [
                        "Input Alamat",
                        "Pilih Agen Pengepul",
                        "Input Barang",
                        "Pilih Cara Pengantaran",
                        "Proses Pesanan",
                    ],
                    step: 1,
                    data: {
                        pengepul: [],
                        barang: []
                    },
                    form: {
                        alamat: {},
                        pengepul: null,
                        cart: [],
                        selectedItemDetail: null,
                        tipe_antar: null,
                        tanggal
                    },
                    searchItem: '',
                    formAddToCart: {
                        berat: null,
                        file: null,
                        preview: null,
                        ongkir: null
                    },
                    loadingAgen: false,
                    loadingItems: false,
                    loadingSubmit: false,
                    get accumulated_base_price() {
                        return this.form.cart.reduce((acc, c) => acc + c.base_price, 0)
                    },
                    get accumulated_top_price() {
                        return this.form.cart.reduce((acc, c) => acc + c.top_price, 0)
                    },
                    get total_base_price() {
                        return this.accumulated_base_price - this.ongkir
                    },
                    get total_top_price() {
                        return this.accumulated_top_price - this.ongkir
                    },
                    get ongkir() {
                        return this.form.tipe_antar == 'dijemput' ? 1000 : 0
                    },
                    next() {
                        this.changeStep(this.step + 1)
                    },
                    async changeStep(s) {
                        if (s == 1)
                            this.step = s
                        if (s == 2 && this.form.alamat) {
                            this.step = s
                            if (!this.data.pengepul.length) {
                                this.loadingAgen = true
                                try {
                                    this.data.pengepul = (await axios.get('/api/pengepul-rekomen')).data
                                } catch (error) {

                                }
                                this.loadingAgen = false
                            }
                        }
                        if (s == 3 && this.form.pengepul) {
                            this.step = s
                            if (!this.data.barang.length) {
                                this.loadingItems = true
                                try {
                                    this.data.barang = (await axios.get(
                                            '/api/items-by-agency?agency_id=' + this.form.pengepul))
                                        .data
                                    // console.log(this.data.barang.filter(this.filterBarang));

                                } catch (error) {

                                }
                                this.loadingItems = false
                            }
                        }
                        if (s == 4 && this.form.cart.length) {
                            this.step = s
                        }
                        if (s == 5 && this.form.tipe_antar) {
                            this.step = s
                        }
                    },
                    selectAgen(id) {
                        this.form.pengepul = id
                    },
                    addItemDetail(item) {
                        this.form.selectedItemDetail = item
                        window.addItemDetailModal.show()
                    },
                    fileChange(event) {
                        const file = event.target.files[0]
                        console.log(file);
                        this.formAddToCart.file = file
                        this.formAddToCart.preview = URL.createObjectURL(file)
                    },
                    resetFormAddToCart() {
                        this.formAddToCart = {
                            berat: null,
                            file: null,
                            preview: null
                        }
                        document.querySelector('#gambar-barang').value = ''
                    },
                    addToCart() {
                        this.form.cart.push({
                            berat: this.formAddToCart.berat,
                            file: this.formAddToCart.file,
                            barang: this.form.selectedItemDetail,
                            base_price: this.formAddToCart.berat * this.form.selectedItemDetail
                                .base_price,
                            top_price: this.formAddToCart.berat * this.form.selectedItemDetail
                                .top_price,
                        })
                        this.resetFormAddToCart()
                        this.form.selectedItemDetail = null
                        window.addItemDetailModal.hide()
                        console.log(this.form.cart);
                    },
                    showCartModal() {
                        window.cartModal.show()
                    },
                    async submit() {
                        // Buat FormData untuk mengirim data yang berisi file
                        this.loadingSubmit = true
                        const formData = new FormData();
                        console.log(this.form);

                        // Tambahkan data selain `cart`
                        formData.append('alamat', JSON.stringify(this.form.alamat));
                        formData.append('pengepul', JSON.stringify(this.form.pengepul));
                        formData.append('selectedItemDetail', JSON.stringify(this.form
                            .selectedItemDetail));
                        formData.append('tipe_antar', this.form.tipe_antar);
                        formData.append('ongkir', this.ongkir);
                        formData.append('ship_date', this.form.tanggal);

                        // Tambahkan setiap item di dalam `cart` ke FormData
                        this.form.cart.forEach((item, index) => {
                            formData.append(`cart[${index}][berat]`, item.berat);
                            formData.append(`cart[${index}][file]`, item.file); // file blob
                            formData.append(`cart[${index}][barang]`, JSON.stringify(item
                                .barang));
                        });
                        const {
                            data
                        } = await axios.post('/orders/new', formData, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        })
                        this.loadingAgen = false
                        console.log(data);
                        window.Swal.fire({
                            title: "Pesanan",
                            text: "Sampah anda berhasil diserahkan, silahkan tunggu konfirmasi dari agen",
                            icon: "success"
                        }).then(() => window.location.href = '/');
                    }
                }))
            })
        </script>
    @endsection
