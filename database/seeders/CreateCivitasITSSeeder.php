<?php

namespace Database\Seeders;

use App\Models\CivitasITS;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class CreateCivitasITSSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // create demo Civitas ITS
        CivitasITS::factory()->create([
            'NIM/NRP/NIP' => "1122334455",
            'nama_depan' => 'Divisi',
            'nama_belakang' => 'DPTSI',
            'email' => 'dptsi@smallits.com',
            'no_telp' => '0812935859238',
            'tgl_lahir' => Carbon::parse('2000-01-01'),
            'jabatan' => 'DPTSI',
            'jenis_kelamin' => 'Pria'
        ]);

        CivitasITS::factory()->create([
            'NIM/NRP/NIP' => "55441166",
            'nama_depan' => 'Divisi',
            'nama_belakang' => 'Komersialisasi',
            'email' => 'komersil@smallits.com',
            'no_telp' => '081363465758',
            'tgl_lahir' => Carbon::parse('2000-01-01'),
            'jabatan' => 'Komersil',
            'jenis_kelamin' => 'Wanita'
        ]);

        CivitasITS::factory()->create([
            'NIM/NRP/NIP' => "052116100072",
            'nama_depan' => 'Bejo',
            'nama_belakang' => 'Sadikin',
            'email' => 'bejo@gmail.com',
            'no_telp' => '081603416754',
            'tgl_lahir' => Carbon::parse('1998-01-01'),
            'jenis_kelamin' => 'Pria'
        ]);
    }
}
