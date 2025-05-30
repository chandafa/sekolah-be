<?php

namespace Database\Seeders;

use App\Http\Controllers\data_manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_user_roles')->insert([
            [
                'name' => 'admin',
                // 'user_access' => data_manager::array2base(data_manager::accessRole()), // Example JSON array of user access
                'user_access' => json_encode(data_manager::accessRole()),

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('tb_admins')->insert([

            [
                'image' => 'smkicon.png',
                'name' => 'User',
                'username' => 'usersmk',
                'email' => 'smkuser@gmail.com',
                'token' => 'adminck',
                'role' => 1, // Assuming role ID 1 is for the admin role
                'created_by' => 'Admin',
                'password' => Hash::make('user123'), // Hash the password
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more admin records as needed
        ]);
    }
}
