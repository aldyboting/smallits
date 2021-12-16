<x-viewcivitas-layout>
    <x-slot name="header">
        <div class="grid grid-cols-3 divide-opacity-0">
            <div>
                <h2 class="font-semibold text-2xl text-white leading-tight text-left">
                    {{ __('Lihat Civitas') }}
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
        <div class="grid grid-cols-1 my-2 mx-6">
            <div class="flex flex-row-reverse mr-2">
                <!--Add button-->
                <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" onclick="window.location='{{ route("add-civitas") }}'">Tambah</button>
            </div>
            <!--/container-->
            <div class="container w-full mx-auto px-2">

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:my-2 rounded shadow bg-white">
                    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                        <tr>
                            <th data-priority="1">Nama Lengkap</th>
                            <th data-priority="2">NIM/NRP/NIP</th>
                            <th data-priority="3">Email</th>
                            <th data-priority="4">Jabatan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nomor_induk }}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->jabatan}}</td>
                                <td>
                                    <button class="mr-4 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" onclick="window.location='{{ route('civitas.edit', $item->id) }}'">Lihat/Ubah</button>
                                    <button class="mr-4 bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded" onclick="window.location='{{ route("add-civitas") }}'">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


                </div>
                <!--/Card-->


            </div>
        </div>
    </div>





    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</x-viewcivitas-layout>
