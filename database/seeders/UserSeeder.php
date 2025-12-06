<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gradeIds = Grade::pluck('id')->toArray();
        User::factory()->count(2)->state([
            'role' => 'guru',
            'grade_id' => null,
        ])->create();

        User::factory()->count(20)->state(function() use ($gradeIds){
            return[
                'role' => 'murid',
                'grade_id' => fake()->randomElement($gradeIds),
            ];
        })->create();
    }
}
