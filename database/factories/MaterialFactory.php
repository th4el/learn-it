<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => User::where('role', 'guru')->inRandomOrder()->value('id'),
            'grade_id' => Grade::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'pdf_path' => "materials/" . fake()->uuid() . '.pdf', //Cuma contoh path
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
