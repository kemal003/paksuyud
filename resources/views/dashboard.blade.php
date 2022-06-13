<x-app-layout>
    <x-slot name="header">
        <!-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col">
                    List Barang
                </div>
                <div class="col">
                    <button type="button" class='btn btn-primary' onclick="window.location='{{ route('input') }}'">Tambah Barang</button>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table table-striped table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Link Gambar</td>
                        <td>Harga</td>
                        <td>Kategori</td>
                        <td>Available</td>
                        <td>Deskripsi</td>
                    </tr>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['img_url']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>{{$item['category']}}</td>
                        <td>{{$item['available']}}</td>
                        <td>{{$item['desc']}}</td>
                    </tr>
                    @endforeach
                </table>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    <button class="btn btn-blue">add item</button>
                </div> -->
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    
                </div> -->
                <!-- <table border="2">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Link Gambar</td>
                        <td>Harga</td>
                        <td>Kategori</td>
                        <td>Available</td>
                        <td>Deskripsi</td>
                    </tr>
                </table> -->
            </div>
        </div>
    </div>
</x-app-layout>
