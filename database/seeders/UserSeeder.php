<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = User::create([
            'name' => 'dinacom@mail.com',
            'email' => 'siswacom@mail.com',
            'password' => bcrypt('123456'),
            'status' =>'siswa',
        ]);

        $siswa->assignRole('siswa');


        $admin = User::create([
            'name' => 'user@mail.com',
            'email' => 'ierfan@mail.com',
            'password' => bcrypt('123456'),
            'status' =>'admin',
        ]);
        $admin->assignRole('admin');

        $guru = User::create([
            'name' => 'user@mail.com',
            'email' => 'joko@mail.com',
            'password' => bcrypt('123456'),
            'status' =>'guru',
        ]);
        $guru->assignRole('guru');
    }
}
