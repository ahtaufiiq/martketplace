<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (Auth::check() && Auth::user()->user_type == 'admin')
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-2">
                <div class="w-full md:w-1/2">
                </div>
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <button data-modal-target="tambahProduk" data-modal-toggle="tambahProduk" type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Tambah produk
                    </button>
                </div>
            </div>
            @endif
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Kategori
                            </th>
                            @if (Auth::check() && Auth::user()->user_type == 'admin')
                            <th scope="col" class="px-6 py-3 text-center">
                                Action
                            </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $product->nama_produk }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                 @currency($product->harga) 
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $product->kategori }}
                            </td>
                            @if (Auth::check() && Auth::user()->user_type == 'admin')
                            <td class="px-6 py-4 flex flex-col items-center text-center">
                                <a href="#" data-modal-target="editProduk-{{$product->id_produk}}" data-modal-toggle="editProduk-{{$product->id_produk}}"  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" data-modal-target="hapusProduk-{{$product->id_produk}}" data-modal-toggle="hapusProduk-{{$product->id_produk}}" class="hover:underline mt-1 font-medium text-red-600 dark:text-blue-500 hover:Delete">Delete</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </div>

    
    @include('components.modal.tambah-produk')

    @foreach($products as $product)
    @include('components.modal.edit-produk')
    @include('components.modal.hapus-produk')
    @endforeach
</x-app-layout>
