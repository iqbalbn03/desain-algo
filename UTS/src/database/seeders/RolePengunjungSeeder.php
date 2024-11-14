<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePengunjungSeeder extends Seeder
{
    public function run()
    {
        $role = Role::firstOrCreate(['name' => 'pengunjung']);

        $pengunjung = ['view_pengunjung', 'create_pengunjung', 'view_any_pengunjung', 'view_buku', 'view_any_buku'];

        foreach ($pengunjung as $peng) {
            $pengunjung = Permission::firstOrCreate(['name' => $peng]);
            $role->givePermissionTo($pengunjung);
        }
    }
}