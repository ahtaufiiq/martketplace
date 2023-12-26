<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-800 dark:text-red-400" role="alert">
              <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Danger</span>
              <div>
                <span class="font-medium">Pastikan persyaratan berikut terpenuhi:</span>
                  <ul class="mt-1.5 list-disc list-inside">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                </ul>
              </div>
            </div>
          @endif
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full ">
                        <form class="flex items-center" method="POST" action="{{route('searchProduct')}}">
                            @csrf
                            <label for="search-product" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" name="search" id="search-product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        @if (Auth::check() && Auth::user()->user_type == 'admin')
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button data-modal-target="tambahProduk" data-modal-toggle="tambahProduk" type="button" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Tambah produk
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            <td scope="row" class="max-w-sm  px-6 py-4 font-medium text-gray-900 dark:text-white break-words ">
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
        </div>
        <div class="p-1 mt-3">
            {{ $products->links() }}
        </div>
    </div>

    
    @include('components.modal.tambah-produk')

    @foreach($products as $product)
    @include('components.modal.edit-produk')
    @include('components.modal.hapus-produk')
    @endforeach
</x-app-layout>
