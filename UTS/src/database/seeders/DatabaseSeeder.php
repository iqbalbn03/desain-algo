<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classroom;
use App\Models\Pengunjung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Spatie\Permission\Contracts\Role;

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
        if(!User::where('email', 'admin@admin.com')->exists())
        {
            $users = User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'visitor@admin.com',
                'password' => bcrypt('password'),
            ]
        ]);

        foreach($users as $user){
            if($user->email =='admin@admin.com' ){
                $user->assignRole('super_admin');
            }else{
                $user->assignRole('Pengunjung');
            }
        }
}
    }
    private function callSeeders(): void
    {
        $this->call([
            RoleSeeder::class,
            BukuSeeder::class,
            PengunjungSeeder::class,
            RolePengunjungSeeder::class
        ]);
            
    }
 }


