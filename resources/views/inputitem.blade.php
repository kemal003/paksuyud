<x-app-layout>
    <x-slot name="header">
        <!-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row g-3">
                <div class="col-md-12">
                    <b>Masukkan data-data barang</b>
                </div>
                <form class="row g-3" action="{{ route('itemUpload') }}" method="POST" enctype="multipart/form-data">
                    <div class="col-md-9">
                        <label for="inputNama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="inputNama" name="inputNama">
                    </div>
                    <div class="col-md-3">
                        <label for="inputHarga" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control" id="inputHarga" name="inputHarga">
                    </div>
                    <div class="col-md-12">
                        <label for="inputDesc" class="form-label">Deskripsi Barang</label>
                        <input type="text" class="form-control" id="inputDesc" name="inputDesc">
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategory" class="form-label">Kategori</label>
                        <select name="inputCategory" class="form-select" aria-label="Default select example">
                            <option selected>Tempe Kripik Daun Jeruk</option>
                            <option value="Tempe Kripik Bawang">Tempe Kripik Bawang</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        @if ($message = Session::get('succeed'))
                        <div alert alert-success alert-block>
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Ups!</strong> Terdapat masalah saat upload barang.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        <div class="col-md-3">
                            <label for="image" class="form-label">Upload Foto</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-primary" type="submit">Upload Barang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
