<x-formcivitas-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 divide-opacity-0">
            <div>
                <h2 class="font-semibold text-2xl text-white leading-tight text-left">
                    {{ __('Edit Civitas') }}
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
        @if(session()->has('message-succes'))

        @endif

        <div class="grid grid-cols-1 my-4 mx-6">
            <div class="w-full min-w-fit py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">
                <div>
                    <h2 class="text-gray-800 text-xl font-semibold text-center">Ubah Data Civitas Akademika ITS</h2>
                </div>
            </div>

            @if(session()->has('message-succes'))
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500 fixed inset-x-0 top-0 left-0">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
                    <span class="inline-block align-middle mr-8">
    <b class="capitalize">Sukses!</b> Data berhasil diubah
  </span>
                    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                        <span>×</span>

                    </button>
                </div>
                <script>
                    function closeAlert(event){
                        let element = event.target;
                        while(element.nodeName !== "BUTTON"){
                            element = element.parentNode;
                        }
                        element.parentNode.parentNode.removeChild(element.parentNode);
                    }
                </script>
            @endif

            <form class="w-full" action="{{ route('civitas.update', $users->id) }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @method('PUT')
                <div class="w-full min-w-fit py-4 px-8 bg-white shadow-lg rounded-lg mx-auto my-6">

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Nama Depan
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nama_depan" name="nama_depan" type="text" value="{{ $civitas->nama_depan }}">
                                <p class="text-red-500 text-xs italic">Harap isi kolom ini.</p>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                    Nama Belakang
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nama_belakang" name="nama_belakang" type="text" value="{{ $civitas->nama_belakang }}">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Alamat Email
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="text" value="{{ $civitas->email }}">
                                <p class="text-gray-600 text-xs italic">Masukkan Alamat Email</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Password
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" name="password" type="password" value="">
                                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Nomor Telepon
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="no_telp" name="no_telp" type="text" value="{{ $civitas->no_telp }}">
                                <p class="text-gray-600 text-xs italic">Masukkan Nomor Telepon</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Alamat (Sesuai KTP)
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="alamat" name="alamat" type="text" value="{{ $civitas->alamat }}">
                                <p class="text-gray-600 text-xs italic">Masukkan Alamat Domisili</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Tanggal Lahir {{ $myDateTime }}
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </div>
                                    <input datepicker type="text" id="tgl_lahir" name="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $myDateTime }}">
                                </div>
                                <p class="text-gray-600 text-xs italic">Masukkan Tanggal Lahir</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Jenis Kelamin
                                </label>
                                <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded" id="jenis_kelamin" name="jenis_kelamin" value="{{ $civitas->jenis_kelamin }}">
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                </select>
                                <p class="text-gray-600 text-xs italic">Masukkan Jenis Kelamin</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    NIM/NRP/NIP
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomor_induk" name="nomor_induk" type="text" value="{{ $civitas->nomor_induk }}">
                                <p class="text-gray-600 text-xs italic">Masukkan NIM/NRP/NIP</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Jabatan
                                </label>
                                <select id="jabatan" name="jabatan" class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded" value="{{ $civitas->jabatan }}">
                                        <option>Mahasiswa</option>
                                        <option>Dosen</option>
                                        <option>Tendik</option>
                                        <option>Karyawan</option>
                                        <option>DPTSI</option>
                                        <option>Komersil</option>
                                </select>
                                <p class="text-gray-600 text-xs italic">Masukkan Jabatan Anda</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Departemen
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="departemen" name="departemen" type="text" value="{{ $civitas->departemen }}">
                                <p class="text-gray-600 text-xs italic">Masukkan Nama Departemen Asal Anda</p>
                            </div>
                        </div>
                </div>

                <button class="w-full bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit">Ubah</button>
            </form>
            <button class="my-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" onclick="window.location='{{ route("view-civitas") }}'">Kembali</button>
        </div>

        <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/datepicker.bundle.js"></script>
    </div>
</x-formcivitas-layout>
