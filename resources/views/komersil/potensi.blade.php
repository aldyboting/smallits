<x-formcivitas-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 divide-opacity-0">
            <div>
                <h2 class="font-semibold text-2xl text-white leading-tight text-left">
                    {{ __('Potensi Permintaan Produk') }}
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

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 my-4 mx-6">
            <div class="w-full min-w-fit py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <h2 class="text-gray-800 text-xl font-semibold text-center">Potensi Permintaan Produk</h2>
                </div>
            </div>

            <div class="w-full min-w-fit py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <form class="w-full ">
                    
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Tanggal Potensi Permintaan Produk
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                            <p class="text-gray-600 text-xs italic">Masukkan Tanggal Potensi Permintaan Produk yang diinginkan</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Departemen
                            </label>
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>Sistem Informasi</option>
                                    <option>Teknik Informatika</option>
                                    <option>Teknologi Informasi</option>
                                    <option>Teknik Elektro</option>
                                    <option>Teknik Biomedik</option>
                                    <option>Teknik Komputer</option>
                            </select>
                            <p class="text-gray-600 text-xs italic">Masukkan Jenis Kelamin</p>
                        </div>
                    </div>

                </form>
            </div>

         <div class="grid grid-cols-1 md:grid-cols-3 gap-2 my-4 mx-6">
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://i.ibb.co/sw2RGSh/pngegg.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold text-center">Pagi (Jam 08.00 - 10.00)</h3>
                    <h5 class="text-green-500 text-xl font-semibold text-center">14</h5>
                    <h5 class="text-gray-800 text-xl font-semibold text-center">Potensi Permintaan</h5>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://png.pngtree.com/png-vector/20190623/ourlarge/pngtree-sunsunrisesunset--flat-color-icon--vector-icon-banner-templa-png-image_1491638.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold text-center">Siang (Jam 11.00 - 14.00)</h3>
                    <h5 class="text-green-500 text-xl font-semibold text-center">20</h5>
                    <h5 class="text-gray-800 text-xl font-semibold text-center">Potensi Permintaan</h5>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6" >
                <div>
                    <img class="object-contain h-24 mx-auto my-2" src="https://i.ibb.co/y4ZVG5X/pngegg2.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold text-center">Sore (Jam 15.00 - 17.00)</h3>
                    <h5 class="text-red-500 text-xl font-semibold text-center">5</h5>
                    <h5 class="text-gray-800 text-xl font-semibold text-center">Potensi Permintaan</h5>
                </div>
            </div>
        </div>

    </div>

        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/datepicker.bundle.js"></script>
    </div>
</x-formcivitas-layout>
