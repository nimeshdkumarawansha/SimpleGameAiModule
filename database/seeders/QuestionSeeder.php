<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['content' => 'What is 2 + 2?', 'difficulty_score' => 1],
            ['content' => 'Solve x: 2x + 3 = 7', 'difficulty_score' => 5],
            ['content' => 'Integrate x^2', 'difficulty_score' => 8],
        ];
        Question::insert($data);
        
    }
}
