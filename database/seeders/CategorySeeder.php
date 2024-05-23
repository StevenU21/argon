<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'PHP',
            'Laravel',
            'JavaScript',
            'Vue.js',
            'React.js',
            'Angular',
            'Node.js',
            'Python',
            'Django',
            'Flask',
            'Ruby',
            'Rails',
            'Java',
            'Spring',
            'Kotlin',
            'Android',
            'Swift',
            'iOS',
            'Go',
            'Rust',
            'Dart',
            'Flutter',
            'C#',
            'ASP.NET',
            'SQL',
            'NoSQL',
            'MongoDB',
            'Firebase',
            'Docker',
            'AWS',
            'Azure',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
