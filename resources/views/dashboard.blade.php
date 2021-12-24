<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="">
                        <button class="ml-12 inline-flex items-center px-6 py-2 bg-white rounded-md font-semibold text-sm text-green-600 uppercase tracking-widest hover:text-gray-900 hover:bg-gray-100 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Tambah Karyawan</button>
                    </a>
                    <a href="">
                        <button class="ml-12 inline-flex items-center px-6 py-2 bg-white rounded-md font-semibold text-sm text-indigo-600 uppercase tracking-widest hover:text-gray-900 hover:bg-gray-100 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Tambah Obat</button>
                    </a>
                    <a href="">
                        <button class="ml-12 inline-flex items-center px-6 py-2 bg-white rounded-md font-semibold text-sm text-red-600 uppercase tracking-widest hover:text-gray-900 hover:bg-gray-100 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Tambah 3</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
