<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Guru',
                'email' => 'guru@email.com',
                'password' => bcrypt(123456),
                'role' => 'guru'
            ],
            [
                'name' => 'Murid',
                'email' => 'murid@email.com',
                'password' => bcrypt(123456),
                'role' => 'murid',
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }

        User::factory(5)->create();
    }
}
