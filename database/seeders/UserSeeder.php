<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan = User::create([
            'nama_user' => 'Rizziq Ibrahim',
            'email'     => 'rizziqibrahim@gmail.com',
            'password'  => bcrypt('12345678'),
            'role'      => '2'
        ]);

        $pelanggan->assignRole('user');

        $admin = User::create([
            'nama_user' => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            'role'      => '1'
        ]);
        
        $admin->assignRole('admin');
    }
}
