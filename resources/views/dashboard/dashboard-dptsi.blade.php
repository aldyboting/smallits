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
                    <img class="object-contain h-24 mx-auto my-2" src="https://cdn-icons.flaticon.com/png/512/3372/premium/3372415.png?token=exp=1639584988~hmac=9f4efb85920d73653967c5bc3fad6093" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Laporan Kehilangan</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://cdn-icons.flaticon.com/png/512/2973/premium/2973781.png?token=exp=1639585124~hmac=2626186005038ce516f9dc12ae6ec6d3" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Laporan Komplain</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6" href="">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://cdn-icons.flaticon.com/png/512/2140/premium/2140705.png?token=exp=1639585170~hmac=3ae8c8d854f7c6ff2739ca32e0ab23a9" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Buat Data Civitas ITS</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://cdn-icons.flaticon.com/png/512/3735/premium/3735291.png?token=exp=1639585209~hmac=4fbdfd2cdda905e00110c0420b7d883d" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Lihat Data Civitas ITS</h3>
                </div>
            </div>
            <div></div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6" href="">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://cdn-icons.flaticon.com/png/512/4080/premium/4080958.png?token=exp=1639585265~hmac=9d83b000c8a80fbb358fb15ba538270a" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Ubah Data Civitas ITS</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
