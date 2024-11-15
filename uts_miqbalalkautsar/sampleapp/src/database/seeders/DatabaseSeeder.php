<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->callSeeders();
        $this->seedUsers();

    }

    private function seedusers(): void
    {
        if (! User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createMany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Pelanggan',
                    'email' => 'visitor@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                } else {
                    $user->assignRole('Pelanggan');
                }
            }
        }
    }

    private function callSeeders(): void
    {
        $this->call([
            RoleSeeder::class,
            BukuSeeder::class,
            PelangganSeeder::class,
            RolePelangganSeeder::class,
        ]);

    }
}
