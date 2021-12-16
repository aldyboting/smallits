<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 divide-opacity-0">
            <div>
                <h2 class="font-semibold text-2xl text-white leading-tight text-left">
                    {{ __('Beranda') }}
                </h2>
            </div>
            <div>
                <img class="object-contain h-8 leading-tight mx-auto" src="https://4.bp.blogspot.com/-i5MLRxGuK5s/VVADS3PUL2I/AAAAAAAAQ20/3RljzZYiHeA/s1600/logo-its-putih-transparan.png" alt="ITS Logo">
            </div>
            <div>
                <h2 class="font-bold text-2xl text-white leading-tight text-right">
                    SMALL ITS
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="container mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 my-4 mx-6">
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="{{ URL::to('/') }}/menu-asset/lost-items.png" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Laporan Kehilangan</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="{{ URL::to('/') }}/menu-asset/bad.png" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Laporan Komplain</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6" href="">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="{{ URL::to('/') }}/menu-asset/add-folder.png" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Buat Data Civitas ITS</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="{{ URL::to('/') }}/menu-asset/open-folder.png" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Lihat Data Civitas ITS</h3>
                </div>
            </div>
            <div></div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6" href="">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="{{ URL::to('/') }}/menu-asset/folder.png" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Ubah Data Civitas ITS</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
