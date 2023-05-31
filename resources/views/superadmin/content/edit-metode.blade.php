@extends('layouts.app')

@section('title', 'Tambah Metode Pengiriman')

@section('content')
    <div class="p-16 sm:ml-64">
        <div class="p-2 bg-white border-2 border-gray-100 rounded-lg dark:border-gray-700 mt-14">
            <div class="px-6 py-6 lg:px-8">

                <form class="space-y-6" action="{{ route('super-update-metode-pengaturan-toko', $metode->id) }}" method="POST" >
                    @csrf
                    @method('put')
                    <div>
                        <input type="text" name="nama_pengiriman" id="nama_pengiriman" placeholder="Masukkan Nama Pengiriman"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $metode->nama_pengiriman }}">
                    </div>
                    <div>
                        <input type="text" name="description_pengiriman" id="description_pengiriman" placeholder="Masukkan Deskripsi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary block w-full p-2.5 duration-500"
                            required value="{{ $metode->description_pengiriman }}">
                    </div>

                    <div class="flex flex-row justify-between">
                        <a href="{{ route('super-pengaturan-toko') }}"
                            class="text-primary bg-white hover:bg-primary border-2 border-primary hover:text-white focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 duration-500">Kembali</a>
                        <button type="submit"
                            class="text-white bg-primary hover:bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Perbarui
                        </button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection
