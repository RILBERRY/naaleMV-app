<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = [
            ['name' => 'Grade 1', 'slug' => 'grade-1', 'is_teaching' => true],
            ['name' => 'Grade 2', 'slug' => 'grade-2', 'is_teaching' => true],
            ['name' => 'Grade 3', 'slug' => 'grade-3', 'is_teaching' => true],
            ['name' => 'Grade 4', 'slug' => 'grade-4', 'is_teaching' => true],
            ['name' => 'Grade 5', 'slug' => 'grade-5', 'is_teaching' => true],
            ['name' => 'Grade 6', 'slug' => 'grade-6', 'is_teaching' => true],
            ['name' => 'Grade 7', 'slug' => 'grade-7', 'is_teaching' => true],
            ['name' => 'Grade 8', 'slug' => 'grade-8', 'is_teaching' => true],
            ['name' => 'Grade 9', 'slug' => 'grade-9', 'is_teaching' => true],
            ['name' => 'Grade 10', 'slug' => 'grade-10', 'is_teaching' => true],
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }
    }
}
