<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('roles')->insert([
        [
            'name' => 'Pengunjung',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
