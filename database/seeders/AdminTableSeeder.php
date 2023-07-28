<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'super admin',
            'email' => 'Super@gmail.com',
            'password' => bcrypt('password'),
            'type' => 'admin'
        ]);

        User::create([
            'name' => 'pradip',
            'email' => 'p@gmail.com',
            'password' => bcrypt('noRlWc2J'),
            'type' => 'user'
        ]);

        User::create([
            'name' => 'bibesh',
            'email' => 'b@gmail.com',
            'password' => bcrypt('3COYbREQ'),
            'type' => 'user'
        ]);
    }
}
