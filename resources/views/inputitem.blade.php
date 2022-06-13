<x-app-layout>
    <x-slot name="header">
        <!-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col">
                    Input Barang
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row g-3">
                <div class="col-md-9">
                    <label for="inputNama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="inputNama">
                </div>
                <div class="col-md-3">
                    <label for="inputHarga" class="form-label">Harga Barang</label>
                    <input type="number" class="form-control" id="inputHarga">
                </div>
                <div class="col-md-12">
                    <label for="inputDesc" class="form-label">Deskripsi Barang</label>
                    <input type="text" class="form-control" id="inputDesc">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
