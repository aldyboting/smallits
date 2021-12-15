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
{{--        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mb-6">--}}
{{--            <nav class="flex my-2 mx-auto" aria-label="Breadcrumb">--}}
{{--                <ol class="inline-flex items-center space-x-1 md:space-x-3">--}}
{{--                    <li class="inline-flex items-center">--}}
{{--                        <a href="#" class="text-gray-700 hover:text-gray-900 inline-flex items-center">--}}
{{--                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>--}}
{{--                            Beranda--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    --}}{{--            <li>--}}
{{--                    --}}{{--                <div class="flex items-center">--}}
{{--                    --}}{{--                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                    --}}{{--                    <a href="#" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium">Projects</a>--}}
{{--                    --}}{{--                </div>--}}
{{--                    --}}{{--            </li>--}}
{{--                    --}}{{--            <li aria-current="page">--}}
{{--                    --}}{{--                <div class="flex items-center">--}}
{{--                    --}}{{--                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>--}}
{{--                    --}}{{--                    <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium">FlowBite</span>--}}
{{--                    --}}{{--                </div>--}}
{{--                    --}}{{--            </li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--        </div>--}}

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 my-4 mx-6">
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto" src="https://image.freepik.com/free-vector/law_1284-19049.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Design Tools</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto" src="https://image.freepik.com/free-vector/law_1284-19049.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Design Tools</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto" src="https://image.freepik.com/free-vector/law_1284-19049.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Design Tools</h3>
                </div>
            </div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto" src="https://image.freepik.com/free-vector/law_1284-19049.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Design Tools</h3>
                </div>
            </div>
            <div></div>
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <img class="object-contain h-24 mx-auto" src="https://image.freepik.com/free-vector/law_1284-19049.jpg" alt="">
                    <h3 class="text-gray-800 text-xl font-semibold align-center">Design Tools</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
