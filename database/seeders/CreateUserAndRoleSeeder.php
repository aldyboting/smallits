<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class CreateUserAndRoleSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'civitas ITS']);
        Permission::create(['name' => 'kepadatan']);
        Permission::create(['name' => 'potensi penjualan']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'dptsi']);
        $role1->givePermissionTo('civitas ITS');
        $role1->givePermissionTo('kepadatan');

        $role2 = Role::create(['name' => 'komersil']);
        $role2->givePermissionTo('potensi penjualan');
        $role2->givePermissionTo('kepadatan');

        $role3 = Role::create(['name' => 'civitasakademika']);
        $role3->givePermissionTo('kepadatan');

        $role4 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Divisi DPTSI',
            'email' => 'dptsi@smallits.com',
            'password' => Hash::make("123456789")
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Divisi Komersialisasi',
            'email' => 'komersil@smallits.com',
            'password' => Hash::make("123456789")
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Bejo Sadikin',
            'email' => 'bejo@gmail.com',
            'password' => Hash::make("123456789")
        ]);
        $user->assignRole($role3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Aldy Syah Daviq Ramadhan',
            'email' => 'aldyboting@gmail.com',
            'password' => Hash::make("123456789")
        ]);
        $user->assignRole($role4);
    }
}
