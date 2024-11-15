<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolepelangganSeeder extends Seeder
{
    public function run()
    {
        $role = Role::firstOrCreate(['name' => 'pelanggan']);

        $pelanggan = ['view_pelanggan', 'create_pelanggan', 'view_any_pelanggan', 'view_buku', 'view_any_buku'];

        foreach ($pelanggan as $peng) {
            $pelanggan = Permission::firstOrCreate(['name' => $peng]);
            $role->givePermissionTo($pelanggan);
        }
    }
}
